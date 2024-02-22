<div id="header">
    <div class="container">
        <div class="pull-left">
            <!-- Logo -->
            <div class="header-logo">
                <a class="logo" href="#">
                    <img src="{{asset('frontendClient/img/logo.png')}}" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Search -->
            <div class="header-search">
                <form>
                    <input class="input search-input" type="text" placeholder="Enter your keyword">
                    <select class="input search-categories">
                        <option value="0">All Categories</option>
                       @foreach($room_levels as $room_level)
                            <option value="{{$room_level->id}}">{{$room_level->name}}</option>
                       @endforeach
                    </select>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- /Search -->
        </div>
        <div class="pull-right">
            <ul class="header-btns">
                <!-- Account -->
                <li class="header-account dropdown default-dropdown">
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>
                        </div>
                        <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                    </div>
                    <a href="#" class="text-uppercase">Login</a>
                    <ul class="custom-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                        <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                        <li><a href="{{route('login')}}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                        <li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                    </ul>
                </li>
                <!-- /Account -->


                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                    <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
            </ul>
        </div>
    </div>
    <!-- header -->
</div>
