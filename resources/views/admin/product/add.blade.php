@extends('admin.shared._layout')

@section('header_script')
<link rel="stylesheet" href="<?php echo asset('public/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
@endsection

@section('footer_script')
<script src="<?php echo asset('public/plugins/jquery-validate/jquery.validate.min.js');?>"></script>
<script src="<?php echo asset('public/plugins/jquery-validate/lang/messages_vi.min.js');?>"></script>
<script src="<?php echo asset('public/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<script>
  $(document).ready(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

    $(".form-addproduct").validate({
      debug: true,
      rules: {
        tensanpham: {
          required : true
        },
        masanpham: {
          required : true
        },
        gia: {
          required : true,
          number   : true,
          min      : 10000,
          max      : 1000000,
        },
        loaivai: {
          required : true
        },
        thuonghieu: {
          required : true
        },
        soluong: {
          required : true
        },
        size: {
          required : true
        }
      }
    });

    $('select#selectLoaisanpham1').change(function() {
      var select2 = $('select#selectLoaisanpham2');
      var option = $("option:selected", $(this));
      var id = option.attr('value');
      if(id > 0)
      {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $token
          },
          url: "{{ route('adminproductsgetcats') }}",
          data: {
            id: id
          },
          type: 'POST',
          dataType: 'JSON',
          success: function(result) {
            select2.empty();
            select2.append('<option value="-1">Chọn Loại Sản Phẩm 2</option>')
            $.each(result.cats, function(index, value) {
              select2.append('<option value="' + value.id + '">' + value.ten + '</option>');
            });
          },
          error: function(result) {
            console.log(result);
          }
        })
      }
    });
  });
</script>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Thêm Sản Phẩm Mới</h3>
    </div>
    <!-- /.box-header -->
    <form class="form-horizontal form-addproduct" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label for="inputLoaisanpham1" class="col-sm-2 control-label">Loại Sản Phẩm 1</label>
          <div class="col-sm-10">
            <select name="loaisanpham1" id="selectLoaisanpham1" class="form-control" required="required">
              <option value="-1">Chọn loại sản phẩm</option>
              @if($lists->count() > 0)
                @foreach($lists->all() as $list)
                  <option value="{{ $list->id }}">{{ $list->ten }}</option>
                @endforeach
              @endif
            </select>
          </div>
        </div>  
        <div class="form-group">
          <label for="inputLoaisanpham2" class="col-sm-2 control-label">Loại Sản Phẩm 2</label>
          <div class="col-sm-10">
            <select name="loaisanpham2" id="selectLoaisanpham2" class="form-control" required="required">
              <option value="-1">Chọn loại sản phẩm 2</option>
            </select>
          </div>
        </div>            
        <div class="form-group">
          <label for="inputTensanpham" class="col-sm-2 control-label">Tên Sản Phẩm</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tensanpham" id="inputTensanpham" placeholder="Tên sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label for="inputTensanpham" class="col-sm-2 control-label">Slug</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tensanpham" id="inputTensanpham" placeholder="Tên sản phẩm">
          </div>
        </div>        
        <div class="form-group">
          <label for="inputHinhanh" class="col-sm-2 control-label">Hình Ảnh</label>
          <div class="col-sm-10">
            <input type="file" name="hinhanh" id="inputHinhanh" class="form-control" required="required" accept="image/*">
          </div>
        </div>
        <div class="form-group">
          <label for="inputMasanpham" class="col-sm-2 control-label">Mã Sản Phẩm</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="masanpham" id="inputMasanpham" placeholder="Mã sản phẩm">
          </div>
        </div>
        <div class="form-group">
          <label for="inputGia" class="col-sm-2 control-label">Giá</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="gia" id="inputGia" placeholder="Giá">
          </div>
        </div>
        <div class="form-group">
          <label for="inputLoaivai" class="col-sm-2 control-label">Loại Vải</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="loaivai" id="inputLoaivai" placeholder="Loại vải">
          </div>
        </div>
        <div class="form-group">
          <label for="inputThuonghieu" class="col-sm-2 control-label">Thương Hiệu</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="thuonghieu" id="inputThuonghieu" placeholder="Giá">
          </div>
        </div>
        <div class="form-group">
          <label for="inputSoluong" class="col-sm-2 control-label">Số lượng / Ri</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="soluong" id="inputSoluong" placeholder="Số cái / ri">
          </div>
        </div>
        <div class="form-group">
          <label for="Size" class="col-sm-2 control-label">Size</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="size" id="inputSize" placeholder="Size">
          </div>
        </div>
        <div class="form-group">
          <label for="inputTonkho" class="col-sm-2 control-label">Tồn Kho</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tonkho" id="inputTonkho" placeholder="Tồn kho">
          </div>
        </div>
        <div class="form-group">
          <label for="inputNoidung" class="col-sm-2 control-label">Nội Dung</label>
          <div class="col-sm-10">
            <textarea name="noidung" id="inputNoidung" class="form-control textarea" required="required" rows="15"></textarea>
          </div>
        </div>                                              
        <div class="form-group">
          <label for="inputKeyword" class="col-sm-2 control-label">Keyword</label>
          <div class="col-sm-10">
            <textarea name="keyword" id="inputKeyword" class="form-control" required="required" rows="2"></textarea>
          </div>
        </div>     
        <div class="form-group">
          <label for="inputMetadescription" class="col-sm-2 control-label">Meta Description</label>
          <div class="col-sm-10">
            <textarea name="metadescription" id="inputMetadescription" class="form-control" required="required" rows="3"></textarea>
          </div>
        </div>                                            
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">Reset</button>
        <button type="submit" class="btn btn-info pull-right">Thêm Sản Phẩm</button>
      </div>
      <!-- /.box-footer -->
    </form>
    <!-- END form -->
  </div>
  </div>
</div>
@endsection