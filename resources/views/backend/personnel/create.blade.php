@extends('layouts.master')

@section('content')
    <div class="container-fluid py-4">
        <h4>Thêm mới nhân sự</h4>
        <form action="{{route('storePsn')}}" method="POST" class="form-group">
            @csrf
            @method('post')
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên nhân sự:</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control">
                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label pt-0">Giới tính</legend>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="rdo1" value="male" checked>
                        <label class="form-check-label" for="rdo1">
                            Nam
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="rdo2" value="female">
                        <label class="form-check-label" for="rdo2">
                           Nữ
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Số điện thoại:</label>
                <div class="col-sm-10">
                    <input type="text" name="phonenum" class="form-control">
                </div>
            </div>

            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Địa chỉ:</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Thuộc công ty:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="company" aria-label="Default select example">
                        <option value="0">-- Chọn công ty --</option>
                    </select>
                </div>
            </div>

            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Tiền lương:</label>
                <div class="col-sm-10">
                    <input type="text" name="salary" class="form-control">
                </div>
            </div>
            <div class="row mb-1">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Chọn quyền nhân sự:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="role" aria-label="Default select example">
                        <option value="0">-- Chọn phân quyền --</option>
                        <option value="admin">Admin hệ thống</option>
                        <option value="manager">Quản lý công ty</option>
                        <option value="user">Nhân viên</option>
                    </select>
                </div>
            </div>
{{--            <div class="header bg-cyan" style="border-radius: 10px 10px 0px 0px">--}}
{{--                <h5>--}}
{{--                    Ảnh đại diện--}}
{{--                </h5>--}}
{{--            </div>--}}
{{--            <div class="body" style="height:fit-content">--}}
{{--                <div style="">--}}
{{--                    <input type="text" name="image" id="image">--}}
{{--                    <br>--}}
{{--                    <img src="" alt="" id="show_image" style="height:100px; width:100px; margin-bottom: 10px">--}}
{{--                    <br>--}}
{{--                    <span>--}}
{{--                          <a href="#modal-file" data-toggle="modal" class="btn btn-primary">Chọn ảnh</a>--}}
{{--                    </span>--}}
{{--                </div>--}}
{{--                <br> <br><br>--}}
{{--            </div>--}}
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
