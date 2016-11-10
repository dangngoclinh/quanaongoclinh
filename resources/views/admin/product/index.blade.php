@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-12">
    <div class="box box-primary box-search">
      <div class="box-header">
        <h3 class="box-title">Tìm Kiếm</h3>
      </div>
      <div class="box-body">
        <form action="{{ route('adminproduct') }}" method="get" class="form-inline">
          <div class="form-group">
            <label for="inputMasp">Mã SP: </label>
            <input type="text" class="form-control" name="masp" id="inputMasp" style="width: 100px;" placeholder="Mã SP">
          </div>
          <div class="form-group">
            <label for="inputTen"> Tên SP: </label>
            <input type="text" class="form-control" name="ten" id="inputTen" placeholder="Tên SP">
          </div>
          <div class="form-group">
            <label for="inputGianhonhat"> Giá nhỏ nhất: </label>
            <input type="number" class="form-control" name="gianhonhat" id="inputGianhonhat" placeholder="20000" style="width: 100px;">
          </div>
          <div class="form-group">
            <label for="inputGialonnhat"> Giá lớn nhất: </label>
            <input type="number" class="form-control" name="gialonnhat" id="inputGialonnhat" placeholder="10000" style="width: 100px">
          </div>          
          <div class="form-group">
            <button type="submit" class="btn btn-success">Tìm Kiếm</button> 
          </div>
        </form>
      </div>
    </div>
    <!-- .box.box-search -->

		<div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title">Danh Sách Sản Phẩm</h3>
      </div>
      <!-- .box-header -->

	    <div class="box-body">
				<table class="table table-hover table-bordered table-products">
					<thead>
						<tr>
							<th>Mã SP</th>
							<th>Tên SP</th>
							<th>Giá</th>
              <th>Nổi Bật</th>
              <th>Bán Chạy</th>
              <th>Còn Hàng</th>
              <th>Hiển thị</th>
              <th>Giảm giá</th>
              <th></th>
						</tr>
					</thead>
					<tbody>
          @if(!empty($products))
            @foreach($products as $product)
  						<tr>
  							<td>{{ $product->masp }}</td>
  							<td>{{ str_limit($product->ten, 45) }}</td>
                <td>{{ number_format($product->gia) }}</td>
                <td style="text-align: center;">
                  <i class="fa fa-check-circle fa-lg status {{ !($product->noibat) ? 'disable' : '' }}" aria-hidden="true" data-id='{{ $product->id }}' data-action='noibat'></i></td>
                <td style="text-align: center;">
                  <i class="fa fa-check-circle fa-lg status {{ ($product->spbc == 0) ? 'disable' : '' }}" aria-hidden="true" data-id='{{ $product->id }}' data-action='banchay'></i></td>
                <td style="text-align: center;">
                  <i class="fa fa-check-circle fa-lg status {{ !($product->conhang) ? 'disable' : '' }}" aria-hidden="true" data-id='{{ $product->id }}' data-action='conhang'></i></td>
                <td style="text-align: center;">
                  <i class="fa fa-check-circle fa-lg status {{ !($product->hienthi) ? 'disable' : '' }}" aria-hidden="true" data-id='{{ $product->id }}' data-action='hienthi'></i></td>
                <td style="text-align: center;">
                  <i class="fa fa-check-circle fa-lg status disable" aria-hidden="true" data-id='{{ $product->id }}' data-action='giamgia'></i></td>
  							<td>
  								<a href="#" class="btn bg-olive btn-sm btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
  								<a href="#" class="btn bg-maroon btn-sm btn-flat"><i class="glyphicon glyphicon-remove"></i></a>
  							</td>
  						</tr>
            @endforeach
          @else
          @endif
					</tbody>
				</table>
			</div>
      <!-- .box-body -->

      <div class="box-footer clearfix">
        <a href="{{ route('adminproductadd') }}" class="btn btn-primary">Thêm Sản Phẩm</a>
        <div class="pull-right">
          {{ $products->links() }}
        </div>
      </div>
      <!-- .box-footer -->
		</div>
	</div>
</div>
@endsection

@section('footer_script')
<script type="text/javascript">
  $(document).ready(function() {
    $('table.table-products .status').click(function() {
      var ielement = $(this);
      var data = {
        id : $(this).attr('data-id'),
        action : $(this).attr('data-action')
      };
      $.ajax({
        header: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('adminproductaction') }}",
        type: 'post',
        data: data,
        dataType: 'json',
        success: function(result) {
          if(data.value = 1) {
            ielement.removeClass('disable');

          }
          else {
            ielement.addClass('disable');
          }
        },
        error: function(result) {

        }
      });
    });
  });
</script>
@endsection