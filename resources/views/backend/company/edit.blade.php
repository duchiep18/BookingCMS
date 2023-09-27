@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới công ty</h4>
        <form action="{{route('updateCompany',$company->id)}}" method="POST" class="form-group">
            @csrf
            @method('put')
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên công ty:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{$company->name}}" class="form-control" id="inputEmail3">
                </div>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email công ty:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{$company->email}}" class="form-control">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa chỉ:</label>
                <div class="col-sm-10">
                    <input type="text" name="address" value="{{$company->address}}" class="form-control">
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tổng số nhân viên:</label>
                <div class="col-sm-10">
                    <input type="text" name="totalstaff" value="{{$company->total_staff}}" class="form-control">
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
                        <option>-- Chọn trạng thái công ty --</option>
                        <option value="active" {{ $company->status == 'active' ? 'selected' : '' }}> Hoạt động</option>
                        <option value="inactive" {{ $company->status == 'inactive' ? 'selected' : '' }}> Không hoạt động</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem;font-family: 'Font Awesome 5 Pro'">Cập nhật</button>
        </form>
    </div>

@endsection
