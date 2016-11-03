@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-12">
    <div class="box box-primary box-search">
      <div class="box-header">
        <h3 class="box-title">Tìm Kiếm</h3>
      </div>
      <div class="box-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="inputMasanpham">Mã SP: </label>
            <input type="text" class="form-control" name="masanpham" id="inputMasanpham" style="width: 100px;" placeholder="Mã SP">
          </div>
          <div class="form-group">
            <label for="inputTensanpham"> Tên SP: </label>
            <input type="text" class="form-control" name="tensanpham" id="inputTensanpham" placeholder="Tên SP">
          </div>
          <div class="form-group">
            <label for="inputGianhonhat"> Giá nhỏ nhất: </label>
            <input type="number" class="form-control" name="gianhonhat" id="inputGianhonhat" placeholder="20000" style="width: 100px;">
          </div>
          <div class="form-group">
            <label for="inputPassword3"> Giá lớn nhất: </label>
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
				<table class="table table-hover table-bordered">
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
						<tr>
							<td>1</td>
							<td>Áo Bé Trai Cotton In Ba Chú Hề Đại Xám 4_Size 9-12T</td>
              <td>20.000</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
							<td>
								<a href="#" class="btn bg-olive btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="#" class="btn bg-maroon btn-flat"><i class="glyphicon glyphicon-remove"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
      <!-- .box-body -->

      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
      <!-- .box-footer -->
		</div>
	</div>
</div>
@endsection