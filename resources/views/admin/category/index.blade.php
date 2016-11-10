@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-7">
		<div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Category</h3>
            </div>
	        <div class="box-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th class="col-md-1">ID</th>
							<th class="col-md-7">Tên Category</th>
							<th class="col-md-1">STT</th>
							<th class="col-md-3"></th>
						</tr>
					</thead>
					<tbody>
          @if( !empty( $cats ) )
            @foreach( $cats as $cat )
            <tr>
              <td>{{ $cat->id }}</td>
              <td>{{ $cat->ten }}</td>
              <td>{{ $cat->stt }}</td>
              <td>
                <a href="#" class="btn bg-olive btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="#" class="btn bg-maroon btn-flat"><i class="glyphicon glyphicon-remove"></i></a>
              </td>
            </tr>            
            @endforeach
          @else
          @endif
					</tbody>
				</table>
			</div>
		</div>
	</div>	
	<div class="col-md-5">
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
                <option value="-1">-- Chọn Danh Sách --</option>
                @if( !empty($lists) )
                  @foreach( $lists as $list )
                    <option value="{{ $list->id }}">{{ $list->ten }}</option>
                  @endforeach
                @endif
              </select>
            </div>
            <div class="form-group">
              <label for="inputTen">Tên:</label>
              <input type="text" name="ten" id="inputTen" class="form-control" value="" required="required">
            </div>
            <div class="form-group">
              <label for="inputMota">Slug:</label>
              <textarea name="tenkhongdau" id="inputMota" class="form-control" rows="3" required="required"></textarea>
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