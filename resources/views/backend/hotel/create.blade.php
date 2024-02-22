@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới khách sạn</h4>
        <form action="{{route('hotel.store')}}" method="POST" class="form-group">
            @csrf
            <div class="row mb-1">
                <label for="" class="col-sm-2 col-form-label">Tên khách sạn:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="" class="col-sm-2 col-form-label">Tóm tắt:</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  name="summary">{{old('summary')}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="" class="col-sm-2 col-form-label">Thông tin khách sạn:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa điểm:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="location_id" aria-label="Default select example">
                        <option value="0">-- Chọn địa điểm --</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="inputPhoto" class="col-form-label">Ảnh đại diện: <span--}}
{{--                        class="text-danger">*</span></label>--}}
{{--                <div class="body" style="height:fit-content">--}}
{{--                    <div>--}}
{{--                        <input type="text" class="col-lg-10" name="image" id="image">--}}
{{--                        <br>--}}
{{--                        <img src="{{ asset('backend/img/thumbnail-default.jpg') }}" alt="" id="show_image"--}}
{{--                             style="height: 150px; width: 150px">--}}
{{--                        <br>--}}
{{--                        <div style="margin-top:1rem">--}}
{{--                                <span>--}}
{{--                                    <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('image')--}}
{{--                <span class="text-danger">{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="inputPhoto" class="col-form-label">List ảnh : <span--}}
{{--                        class="text-danger">*</span></label>--}}
{{--                <div class="body" style="height:fit-content">--}}
{{--                    <div>--}}
{{--                        <input type="text" class="col-lg-10" name="image_list" id="image_list">--}}
{{--                        <br>--}}
{{--                        <div class="row" id="show_image_list">--}}

{{--                        </div>--}}
{{--                        <div style="margin-top: 10px">--}}
{{--                                <span>--}}
{{--                                    <a href="#modal-list-image" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>--}}
{{--                                </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @error('image_list')--}}
{{--                <span class="text-danger">{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option >-- Chọn trạng thái --</option>
                        <option value="active" selected> Hoạt động </option>
                        <option value="inactive" > Không hoạt động </option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Thêm mới</button>
        </form>
    </div>

@endsection
@stack('js')
<script type="javascript">
    $('.status').select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    });
    $('.location_id').select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    });
</script>
