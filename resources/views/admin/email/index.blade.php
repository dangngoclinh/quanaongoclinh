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
            <label for="inputHoten">Họ Tên: </label>
            <input type="text" class="form-control" name="hoten" id="inputHoten" style="width: 150px;" placeholder="Họ tên">
          </div>
          <div class="form-group">
            <label for="inputEmail"> Email: </label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputDiachi"> Địa chỉ: </label>
            <input type="text" class="form-control" name="diachi" id="inputDiachi" placeholder="Đại chỉ" style="width: 150px;">
          </div>
          <div class="form-group">
            <label for="inputNgaytai"> Ngày tải: </label>
            <input type="date" class="form-control" name="ngaytai" id="inputNgaytai" placeholder="Ngày tải" style="width: 175px">
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
        <h3 class="box-title">Email Đăng Ký Nhận Báo Giá</h3>
      </div>
      <!-- .box-header -->

	    <div class="box-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Họ Tên</th>
							<th>Email</th>
							<th>Có Shop</th>
							<th>Địa chỉ</th>
							<th>Ngày tải</th>
							<th>Lần tải</th>
							<th> </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> 1</td>
							<td>huynh ngoc minh</td>
							<td>cuongstb@gmail.com</td>
							<td> 1</td>
							<td>phan rang - ninh thuan</td>
							<td>11/2/2016 7:59:21 PM</td>
							<td> 1</td>
							<td>
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