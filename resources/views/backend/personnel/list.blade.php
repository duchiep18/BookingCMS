@extends('layouts.master')
@include('layouts.head')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Danh sách công ty</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr style="text-align: center">
                                        <th scope="col">#</th>
                                        <th scope="col">Tên nhân sự</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Quyền tài khoản</th>
                                        <th scope="col">Thuộc công ty</th>
                                        <th scope="col">Ngày bắt đầu làm việc</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tác vụ</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($personnels as $personnel)
                                        <tr style="text-align: center">
                                            <th>{{$personnel->id}}</th>
                                            <td>{{$personnel->username}}
                                            </td>
                                            <td >
                                                {{$personnel->email}}
                                            </td>
                                            <td>
                                                {{$personnel->gender}}
                                            </td>
                                            <td>
                                                {{$personnel->phone_number}}
                                            </td>
                                            <td>
                                                {{$personnel->role}}
                                            </td>
                                            <td>
                                                {{$personnel->company_id}}
                                            </td>
                                            <td>
                                                {{$personnel->date_start_work}}
                                            </td>
                                            <td>
                                                {{$personnel->status}}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('editPsn', $personnel->id) }}"
                                                   class="btn btn-warning btn-lg float-left mr-1"><i
                                                        class="fas fa-edit"></i></a>
                                                <form method="POST" action="{{ route('destroyPsn', $personnel->id) }}"
                                                      role="form">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger dltBtn"
                                                            onclick="return confirm('Bạn có muốn xóa bản ghi này?')"
                                                            type="submit">Xóa
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </main>
@endsection
