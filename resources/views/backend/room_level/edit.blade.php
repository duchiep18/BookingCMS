@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Cập nhật hạng phòng</h4>
        <form action="{{route('room_level.update', $roomLevel->id)}}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên loại phòng:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$roomLevel->name}}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin hạng phòng:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description">{{$roomLevel->description}}</textarea>
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
                        <option value="active" {{$roomLevel->status == 'active' ? 'selected': ''}}> Hoạt động </option>
                        <option value="inactive" {{$roomLevel->status == 'inactive' ? 'selected': ''}}> Không hoạt động </option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Cập nhật</button>
            <div>
            <a class="btn btn-primary" href="{{route('room_level.index')}}">Quay lại</a>
            </div>
        </form>
    </div>
@endsection
