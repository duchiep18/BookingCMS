@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Cập nhật khách sạn</h4>
        <form action="{{route('hotel.update', $hotel->id)}}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên khách sạn:</label>
                <div class="col-sm-10">$hotel
                    <input type="text" name="name" value="{{$hotel->name}}" class="form-control" id="inputEmail3">
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tóm tắt:</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  name="summary">{{$hotel->summary}}</textarea>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thông tin khách sạn:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description">{{$hotel->description}}</textarea>

                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa điểm:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="location_id" aria-label="Default select example">
                        <option value="0">-- Chọn địa điểm --</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}" {{$location->id == $hotel->location_id ? 'selected' : ''}}>{{$location->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option >-- Chọn trạng thái--</option>
                        <option value="active" {{$hotel->status == 'active' ? 'selected': ''}}> Hoạt động </option>
                        <option value="inactive" {{$hotel->status == 'inactive' ? 'selected': ''}}> Không hoạt động </option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Cập nhật</button>
            <div>
            <a class="btn btn-primary" href="{{route('hotel.index')}}">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
