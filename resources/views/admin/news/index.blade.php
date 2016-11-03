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
            <label for="inputTieude">Tiêu Đề: </label>
            <input type="text" class="form-control" name="tieude" id="inputTieude" style="width: 200px;" placeholder="Tiêu đề">
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
        <h3 class="box-title">Danh Sách Tin Tức</h3>
      </div>
      <!-- .box-header -->

	    <div class="box-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tiêu Đề</th>
							<th>Hiển Thị</th>
              <th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Áo Bé Trai Cotton In Ba Chú Hề Đại Xám 4_Size 9-12T</td>
              <td><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-check"></i></button></td>
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
        <a href="<?php echo route('adminnewsadd');?>" class="btn btn-primary">Thêm Tin Mới</a>
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