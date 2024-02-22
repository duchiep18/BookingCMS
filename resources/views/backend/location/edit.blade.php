@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Cập nhật địa điểm</h4>
        <form action="{{route('location.update', $location->id)}}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên địa điểm:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{$location->name}}" class="form-control" id="inputEmail3">
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputDesc" class="col-form-label">Thông tin địa điểm:</label>
                <textarea class="form-control" id="ckeditor" name="description">{{$location->description}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="inputPhoto" class="col-form-label">Ảnh </label>--}}
{{--                <div class="body" style="height:fit-content">--}}
{{--                    <div>--}}
{{--                        <input type="text" class="form-control" name="image" id="image">--}}
{{--                        <br>--}}
{{--                        @if($location->image)--}}
{{--                            <img src="{{$location->image}}" alt="" id="show_image" style="height: 200%; width: auto">--}}
{{--                        @else--}}
{{--                            <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="" id="show_image"--}}
{{--                                 style="height: 200%; width: auto">--}}
{{--                        @endif--}}
{{--                        <br>--}}
{{--                        <div style="margin-top:1rem">--}}
{{--                        <span>--}}
{{--                            <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--                <div id="holder" style="margin-top:15px;max-height:100px;"></div>--}}
{{--                @error('image')--}}
{{--                <span class="text-danger">{{$message}}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="row mb-1">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option>-- Chọn trạng thái --</option>
                        <option value="active" {{ $location->status == 'active' ? 'selected' : '' }}> Hoạt động</option>
                        <option value="inactive" {{ $location->status == 'inactive' ? 'selected' : '' }}> Không hoạt
                            động
                        </option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Cập
                nhật
            </button>
            <div>
                <a class="btn btn-primary" href="{{route('location.index')}}">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
<script type="javascript">
    $('.status').select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
</script>
