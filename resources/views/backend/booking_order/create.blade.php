@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới công ty</h4>
        <form action="{{route('storeCompany')}}" method="POST" class="form-group">
            @csrf
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên công ty:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email công ty:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa chỉ:</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Quản trị viên công ty:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="manager" aria-label="Default select example">
                        <option value="0">-- Chọn quản trị viên cho công ty --</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                        <option >-- Chọn trạng thái công ty --</option>
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
