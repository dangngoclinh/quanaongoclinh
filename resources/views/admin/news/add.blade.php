@extends('admin.shared._layout')

@section('header_script')
<link rel="stylesheet" href="<?php echo asset('public/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
@endsection

@section('footer_script')
<script type="text/javascript" src="<?php echo asset('public/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.textarea').wysihtml5();
  });
</script>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
  		<div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Danh Sách Tin Tức</h3>
        </div>
        <!-- .box-header -->

  	    <div class="box-body">
          <div class="form-group">
            <label for="inputTieude" class="col-sm-2 control-label">Tiêu Đề</label>
            <div class="col-md-10">
              <input type="text" name="tieude" id="inputTieude" class="form-control" value="" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="inputMota" class="col-sm-2 control-label">Mô tả</label>
            <div class="col-md-10">
              <textarea name="mota" id="inputMota" class="form-control" rows="3" required="required"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputNoidung" class="col-sm-2 control-label">Nội Dung</label>
            <div class="col-md-10">
              <textarea name="noidung" id="inputNoidung" class="form-control textarea" rows="10" required="required"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputHinhanh" class="col-sm-2 control-label">Hinh Ảnh</label>
            <div class="col-md-10">
              <input type="file" name="hinhanh" id="inputHinhanh" class="form-control" required="required" accept="image/*">
            </div>
          </div>
          <div class="form-group">
            <label for="inputKeyword" class="col-sm-2 control-label">Keyword</label>
            <div class="col-md-10">
              <input type="text" name="keyword" id="inputKeyword" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Meta Description</label>
            <div class="col-md-10">
              <textarea name="description" id="inputDescription" class="form-control" rows="3" required="required"></textarea>
            </div>
          </div>
  			</div>
        <!-- .box-body -->

        <div class="box-footer clearfix">
          <button type="reset" class="btn btn-danger">Nhập Lại</button>
          <button type="submit" class="btn btn-primary pull-right">Lưu Tin Mới</button>
        </div>
        <!-- .box-footer -->
  		</div>
      <!-- END .box -->
    </form>
  </div>
</div>
@endsection