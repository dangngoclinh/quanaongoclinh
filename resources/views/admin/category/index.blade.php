@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-warning category-list">
          <div class="box-header">
            <h3 class="box-title">Danh Sách Category</h3>
          </div>
	        <div class="box-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th class="col-md-1">ID</th>
              <th class="col-md-4">Tên Category</th>
              <th class="col-md-4">Slug</th>
							<th class="col-md-1">STT</th>
							<th class="col-md-2"></th>
						</tr>
					</thead>
					<tbody>
          @if( !empty( $cats ) )
            @foreach( $cats as $cat )
            <tr>
              <td>{{ $cat->id }}</td>
              <td>{{ $cat->ten }}</td>
              <td>{{ $cat->tenkhongdau }}</td>
              <td>{{ $cat->stt }}</td>
              <td>
                <a href="{{ route('admin.category.edit', $cat->id) }}" class="btn bg-olive btn-flat">
                <i class="glyphicon glyphicon-pencil"></i></a>
                <button type="button" data-id='{{ $cat->id }}' class="btn bg-maroon btn-flat delete">
                <i class="glyphicon glyphicon-remove"></i></button>
              </td>
            </tr>     
              @if( $cat->cats->count() > 0 )    
                @foreach($cat->cats as $item)   
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>---- {{ $item->ten }}</td>
                  <td>{{ $item->tenkhongdau }}</td>
                  <td>{{ $item->stt }}</td>
                  <td>
                    <a href="{{ route('admin.category.edit', $item->id) }}" class="btn bg-olive btn-flat">
                    <i class="glyphicon glyphicon-pencil"></i></a>
                    <button type="button" data-id='{{ $item->id }}' class="btn bg-maroon btn-flat delete">
                    <i class="glyphicon glyphicon-remove"></i></button>
                  </td>
                </tr>  
                @endforeach
              @endif
            @endforeach
          @else
          @endif
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admincategorystore') }}" method="post">
          {{ csrf_field() }}
          <div class="box-body">
            @if( $errors->count() > 0 )
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Lỗi!</strong>
                @foreach( $errors->all() as $error )
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
            <div class="form-group">
              <select name="id_list" id="input" class="form-control">
                <option value="0">-- Chọn Danh Sách --</option>
                @if( !empty($cats) )
                  @foreach( $cats as $cat )
                    <option value="{{ $cat->id }}">{{ $cat->ten }}</option>
                  @endforeach
                @endif
              </select>
            </div>
            <div class="form-group">
              <label for="inputTen">Tên:</label>
              <input type="text" name="ten" id="inputTen" class="form-control" value="{{ old('ten') }}" required="required">
            </div>
            <div class="form-group">
              <label for="inputMota">Slug:</label>
              <input type="text" name="tenkhongdau" id="inputTenkhongdau" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Key:</label>
              <input type="text" name="keyword" id="inputKeyword" class="form-control" value="" required="required">
            </div>
            <div class="form-group">
              <label for="inputMetadescription">Meta Description:</label>
              <textarea name="description" id="inputMetadescription" class="form-control" rows="3" required="required"></textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
          	<button type="button" class="btn btn-danger btn-reset">Nhập Lại</button>
            <button type="submit" class="btn btn-primary pull-right">Thêm</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
	</div>
</div>
@endsection

@section('footer_script')
<script type="text/javascript">
  $(document).ready(function() {
    $('.category-list button.delete').click(function() {
      var tr = $(this).closest('tr');
      var id = $(this).attr('data-id');
      var verify = confirm('Bạn có chắc chắn xóa Category [' + id + '] Không');
      var token = $('meta[name="csrf-token"]').attr('content');
      if(verify)
      {
        $.ajax({
          url: "{{ route('admincategorydelete') }}",
          headers: {
            'X-CSRF-TOKEN': token
          },
          type: 'POST',
          data: {
            id: id
          },
          dataType: 'json',
          success: function(data) {
            if(data.result)
            {
              tr.fadeOut();
            }
          },
          error: function(data) {
            alert('Lỗi - Không thực hiện được');
          }
        });
      }
    });
  });
</script>
@endsection