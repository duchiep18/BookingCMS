@extends('layouts.master')
@section('title','E-SHOP || Banner Edit')
@section('content')

<div class="card">
    <h5 class="card-header">Cập nhật Banner</h5>
    <div class="card-body">
      <form method="post" action="{{route('banner.update',$banner->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tên banner: <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Nhập tên banner"  value="{{$banner->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
`
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Mô tả banner:</label>
          <textarea class="form-control" id="ckeditor" name="description">{{$banner->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Ảnh</label>
            <div class="body">
                <div>
                    <input type="text" class="form-control" name="image" id="image" value="{{$banner->photo}}">
                    <br>
                    @if($banner->photo)
                    <img src="{{$banner->photo}}" alt="" style="width: 150px; height: 150px"
                         id="show_image">
                    @else
                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="" style="width:auto; height: 200%" id="show_image">
                    @endif
                    <div style="margin-top: 1rem">
                        <span>
                            <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Trạng thái <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($banner->status=='active') ? 'selected' : '')}}>Hoạt động</option>
            <option value="inactive" {{(($banner->status=='inactive') ? 'selected' : '')}}>Không hoạt động</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Cập nhật</button>
        </div>
      </form>
    </div>
</div>
@endsection

