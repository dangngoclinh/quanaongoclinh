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
							<th class="col-md-1">#</th>
							<th class="col-md-3">Hành Động</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Category</td>
							<td>1</td>
							<td>
								<a href="#" class="btn bg-olive btn-flat"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="#" class="btn bg-maroon btn-flat"><i class="glyphicon glyphicon-remove"></i></a>
							</td>
						</tr>
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
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="inputTen">Tên:</label>
              <input type="text" name="Ten" id="inputTen" class="form-control" value="" required="required" pattern="" title="">
            </div>
            <div class="form-group">
              <label for="inputMota">Mô Tả:</label>
              <textarea name="mota" id="inputMota" class="form-control" rows="3" required="required">
              	
              </textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Key:</label>
              <input type="text" name="keyword" id="inputKeyword" class="form-control" value="" required="required" pattern="" title="">
            </div>
            <div class="form-group">
              <label for="inputMetadescription">Meta Description:</label>
              <textarea name="metadescription" id="inputMetadescription" class="form-control" rows="3" required="required"></textarea>
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