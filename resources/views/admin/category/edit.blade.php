@extends('admin.shared._layout')

@section('content')
<div class="row">
	<div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('admin.category.edit.action') }}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="id" id="inputId" class="form-control" value="{{ $cat->id }}">
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
            	<label for="inputParentID">Thư Mục Cha</label>
              <select name="parent_id" id="input" class="form-control">
                <option value="0" {{ ($cat->parent_id == 0)? 'selected' : '' }}>-- Chọn Danh Sách --</option>
                @if( !empty($cats) )
                  @foreach( $cats as $item )
                    <option value="{{ $item->id }}" {{ ($item->id == $cat->parent_id)? 'selected' : '' }}>{{ $item->ten }}</option>
                  @endforeach
                @endif
              </select>
            </div>
            <div class="form-group">
              <label for="inputTen">Tên:</label>
              <input type="text" name="ten" id="inputTen" class="form-control" value="{{ $cat->ten or '' }}" required="required">
            </div>
            <div class="form-group">
              <label for="inputMota">Slug:</label>
              <input type="text" name="tenkhongdau" id="inputTenkhongdau" class="form-control" value="{{ $cat->tenkhongdau or '' }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Key:</label>
              <input type="text" name="keyword" id="inputKeyword" class="form-control" value="{{ $cat->keyword or '' }}" required="required">
            </div>
            <div class="form-group">
              <label for="inputMetadescription">Meta Description:</label>
              <textarea name="description" id="inputMetadescription" class="form-control" rows="3" required="required">{{ $cat->description or '' }}</textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">Thêm</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
	</div>
</div>
@endsection