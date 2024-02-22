<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{route('dashboard')}}"
           target="_blank">
            <img src="{{asset('frontend/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Booking CMS</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn nav-link text-white active bg-gradient-primary" href="{{route('dashboard')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" role="button"
                   href="{{route('file-manager')}}" >
                    <i class="material-icons opacity-10">image</i>
                    Media
                </a>
            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse" role="button"
                   href="#bannerCollapse" aria-expanded="false"
                   aria-controls="bannerCollapse">
                    <i class="material-icons opacity-10">image</i>
                    Banners
                </a>
                <div id="bannerCollapse" class="collapse" >
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('banner.index')}}"> Banners list</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('banner.create')}}"> Add banner</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse" role="button"
                   href="#hotelsCollapse" aria-expanded="false"
                   aria-controls="hotelsCollapse">
                    <i class="material-icons opacity-10">business</i>
                    Manage Hotels
                </a>
                <div id="hotelsCollapse" class="collapse" >
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('hotel.index')}}"> Hotels list</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('hotel.create')}}"> Add hotell</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#roomlevelsCollapse" aria-expanded="false"
                   aria-controls="roomlevelsCollapse">
                    <i class="material-icons opacity-10">folder</i>
                    <span class="nav-link-text ms-1">Manage Room Levels</span>
                </a>
                <div id="roomlevelsCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('room_level.index')}}"> Room levels list</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('room_level.create')}}"> Add room level</a></li>
                    </ul>
                </div>

            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#roomsCollapse" aria-expanded="false"
                   aria-controls="roomsCollapse">
                    <i class="material-icons opacity-10">business</i>
                    <span class="nav-link-text ms-1">Manage Rooms </span>
                </a>
                <div id="roomsCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('room.index')}}"> Rooms list</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('room.create')}}"> Add room </a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#locationsCollapse" aria-expanded="false"
                   aria-controls="locationsCollapse">
                    <i class="material-icons opacity-10">location_on</i>
                    <span class="nav-link-text ms-1">Manage Locations </span>
                </a>
                <div id="locationsCollapse" class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href="{{route('location.index')}}"> Locations list</a></li>
                        <li class="nav-item"><a class="mr text-white" href="{{route('location.create')}}"> Add location </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" style="margin-top:1rem">
                <a class="btn nav-link text-white active bg-gradient-primary" data-bs-toggle="collapse"
                   href="#servicesCollapse" aria-expanded="false"
                   aria-controls="servicesCollapse">
                    <i class="material-icons opacity-10">people</i>
                    <span class="nav-link-text ms-1">Manage Users </span>
                </a>
                <div id="servicesCollapse   " class="collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="mr text-white" href=""> Users list</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white " href="../pages/notifications.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">notifications</i>
                    </div>
                    <span class="nav-link-text ms-1">Booking Orders</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Manage User</h6>
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

