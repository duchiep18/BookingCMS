@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Cập nhật phòng</h4>
        <form action="{{route('room.update', $room->id)}}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$room->name}}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mô tả ngắn phòng:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="summary">{{$room->summary}}</textarea>
                    @error('summary')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin phòng:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description">{{$room->description}}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thuộc khách sạn:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="hotel_id" aria-label="Default select example">
                        <option value="">-- Chọn khách sạn --</option>
                        @foreach($hotels as $hotel)
                            <option value="{{$hotel->id}}" {{$room->hotel_id == $hotel->id ? 'selected':''}}>{{$hotel->name}}</option>
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
                        <option value="">-- Chọn địa điểm --</option>
                        @foreach($room_levels as $room_level)
                            <option value="{{$room_level->id}}" {{$room->room_level_id == $room_level->id ? 'selected':''}}>{{$room_level->name}}</option>
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
                    <input type="text" name="hotline" class="form-control" value="{{$room->hotline}}">
                    @error('hotline')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giá thuê phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="price" class="form-control" value="{{$room->price}}">
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="status" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option>-- Chọn trạng thái --</option>
                        <option value="active" {{ $room->status == 'active' ? 'selected' : '' }}> Hoạt động</option>
                        <option value="inactive" {{ $room->status == 'inactive' ? 'selected' : '' }}> Không hoạt
                            động
                        </option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Cập nhật</button>
            <div>
            <a class="btn btn-primary" href="{{route('room.index')}}">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
