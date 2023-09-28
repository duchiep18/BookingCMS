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
                                        <th scope="col">Tên công ty</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Quản lý</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tác vụ</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        <tr style="text-align: center">
                                            <th colspan="1">{{$company->id}}</th>
                                            <td>{{$company->name}}
                                            </td>
                                            <td>
                                                {{$company->address}}
                                            </td>

                                            <td>
                                                {{$company->user_id}}
                                            </td>
                                            <td>
                                                {{$company->status}}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('editCompany', $company->id)}}"
                                                   class="btn btn-warning btn-lg float-left mr-1"><i class="fas fa-edit"></i></a>
                                                <form method="POST" action="{{ route('destroyCompany', $company->id)}}"
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
