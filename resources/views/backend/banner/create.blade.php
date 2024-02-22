@extends('layouts.master')

@section('title','E-SHOP || Banner Create')

@section('content')
<div class="card">
    <h5 class="card-header">Thêm Banner</h5>
    <div class="card-body">
      <form method="post" action="{{route('banner.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tên Banner: <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Nhập tên banner"  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Mô tả banner:</label>
          <textarea class="form-control" id="ckeditor" name="description">{{old('description')}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Ảnh </label>
            <div class="body" style="height:fit-content">
                <div>
                    <input type="text" class="form-control" name="image" id="image">
                    <br>

                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="" id="show_image" style="height: 200%; width: auto">
                    <br>
                    <div style="margin-top:1rem">
                        <span>
                            <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
                        </span>
                    </div>
                </div>
                <br>
            </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Trạng thái <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Hoạt động</option>
              <option value="inactive">Không hoạt động</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Lưu</button>
        </div>
      </form>
    </div>
</div>
@endsection
