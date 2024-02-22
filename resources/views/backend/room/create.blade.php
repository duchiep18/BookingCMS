@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới phòng</h4>
        <form action="{{route('room.store')}}" method="POST" class="form-group">
            @csrf
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mô tả ngắn phòng:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="summary">{{old('summary')}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin phòng:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description">{{old('description')}}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thuộc khách sạn:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="hotel_id" aria-label="Default select example">
                        <option value="">-- Chọn địa điểm --</option>
                        @foreach($hotels as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('hotel_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thuộc hạng phòng:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="room_level_id" aria-label="Default select example">
                        <option value="">-- Chọn hạng phòng --</option>
                        @foreach($room_levels as $room_level)
                            <option value="{{$room_level->id}}">{{$room_level->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('room_level_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Hotline:</label>
                <div class="col-sm-10">
                    <input type="text" name="hotline" class="form-control">
                    @error('hotline')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giá thuê phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control">
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
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
