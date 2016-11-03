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
            <label for="inputTen">Tên: </label>
            <input type="text" class="form-control" name="ten" id="inputTen" style="width: 150px;" placeholder="Tên">
          </div>         
          <div class="form-group">
            <label for="inputEmail">&nbsp;Email: </label>
            <input type="email" name="email" id="inputEmail" class="form-control" required="required" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputDiachi">&nbsp;Địa chỉ: </label>
            <input type="text" name="diachi" id="inputDiachi" class="form-control" required="required" placeholder="Đại chỉ">
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
        <h3 class="box-title">Danh Sách Người Dùng</h3>
      </div>
      <!-- .box-header -->

	    <div class="box-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên</th>
							<th>Email</th>
              <th>Địa chỉ</th>
              <th>Liên lạc</th>
              <th class="col-md-2"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Dương Ngọc Thái</td>
              <td>ngocthai@gmail.com</td>
              <td>Hóc Môn</td>
              <td>09888888</td>
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
        <a href="<?php echo route('adminuseradd');?>" class="btn btn-primary">Thêm Tin Mới</a>
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