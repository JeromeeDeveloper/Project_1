<!-- layouts/header.blade.php -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="assets/images/logo.gif" alt="SnapX Photography Template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        {{-- <li class="has-sub">
                            <a href="javascript:void(0)" class="{{ request()->routeIs('contests') || request()->routeIs('contest') ? 'active' : '' }}">Photos &amp; Videos</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('contests') }}">Contests</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{ route('custom') }}" class="{{ request()->routeIs('custom') ? 'active' : '' }}">Green House</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li><a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">Gallery</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>   
                    
                    <div class="border-button" style="margin-left: 10px;">
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="shop-now"><i class="fa fa-user"></i> Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="shop-now"><i class="fa fa-sign-in-alt"></i> Sign in</a>
                        @endauth
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header> 