<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{route('dashboard')}}"
           target="_blank">
            <img src="../frontend/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Quản lý nhân viên</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="{{route('dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Trang chủ</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#companyCollapse" aria-expanded="false"
                   aria-controls="companyCollapse">
                    <i class="material-icons opacity-10">business</i>
                    <span class="nav-link-text ms-1">Quản lý công ty</span>
                </a>
                <div id="companyCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('listCompany')}}"> Quản lý danh sách công ty</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('createCompany')}}"> Thêm công ty</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#userCollapse" aria-expanded="false"
                   aria-controls="companyCollapse">
                    <i class="material-icons opacity-10">people</i>
                    <span class="nav-link-text ms-1">Quản lý nhân sự</span>
                </a>
                <div id="userCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('listPsn')}}"> Quản lý danh sách nhân viên</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('createPsn')}}"> Thêm nhân viên mới</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#salaryCollapse" aria-expanded="false"
                   aria-controls="companyCollapse">
                    <i class="material-icons opacity-10">calendar</i>
                    <span class="nav-link-text ms-1">Quản lý chấm công</span>
                </a>
                <div id="salaryCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href=""> Quản lý danh sách chấm công</a></li>
                        <li class="nav-item"><a class="mr text-white" href=""> Chấm công</a></li>
                        <li class="nav-item"><a class="mr text-white" href=""> Sửa thông tin chấm công</a></li>
                        <li class="nav-item"><a class="mr text-white" href=""> Xuất file báo cáo</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/notifications.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Notifications</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Quản lý hệ
                    thống</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

        </ul>
    </div>

</aside>
