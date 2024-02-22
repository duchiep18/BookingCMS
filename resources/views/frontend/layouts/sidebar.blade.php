<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    @foreach($room_levels as $room_level)
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$room_level->name}} <i class="fa fa-angle-right"></i></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            @include('frontend.layouts.menu')
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
