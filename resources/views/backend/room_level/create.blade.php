    @extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới hạng phòng</h4>
        <form action="{{route('room_level.store')}}" method="POST" class="form-group">
            @csrf
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên loại phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin hạng phòng:</label>
                <div class="col-sm-10">
                            <textarea class="form-control" name="description">{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                </div>
            </div>

            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option >-- Chọn trạng thái --</option>
                        <option value="active"> Hoạt động </option>
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

    </script>
