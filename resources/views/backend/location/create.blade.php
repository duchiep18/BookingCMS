@extends('layouts.master')

@section('content')
    <div class="card">
        <h4 class="card-header">Thêm mới địa điểm</h4>
        <div class="card-body">
        <form action="{{route('location.store')}}" method="POST" class="form-group">
            @csrf
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên địa điểm:</label>
                <div class="form-control">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputDesc" class="col-form-label">Thông tin địa điểm:</label>
                <option value="0">-- Chọn địa điểm --</option>
                <textarea class="form-control" id="ckeditor" name="description">{{old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="inputPhoto" class="col-form-label">Ảnh </label>--}}
{{--                <div class="body" style="height:fit-content">--}}
{{--                    <div>--}}
{{--                        <input type="text" class="col-md-10" name="image" id="image">--}}
{{--                        <br>--}}
{{--                        <img src="" alt="" id="show_image" style="height: 100%; width: auto">--}}
{{--                        <br>--}}
{{--                        <div style="margin-top:1rem">--}}
{{--                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"--}}
{{--                                data-bs-target="#modalImage">--}}
{{--                            Chọn Ảnh--}}
{{--                        </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--                <div id="holder" style="margin-top:15px;max-height:100px;"></div>--}}
{{--                @error('image')--}}
{{--                <span class="text-danger">{{$message}}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <div class="form-group">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" id="status">
                        <option>-- Chọn trạng thái --</option>
                        <option value="active" selected> Hoạt động</option>
                        <option value="inactive"> Không hoạt động</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">
                Thêm mới
            </button>
        </form>
        </div>
    </div>

@endsection
@stack('js')
<script type="javascript">
    $('#status').select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
</script>
