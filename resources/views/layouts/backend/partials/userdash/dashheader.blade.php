<!------------------------header-start------------------------>
<div class="dasboard-listing-map-header">
    <div class="listing-map-header">
        <section class="header">
            <div class="container-fluid">
                <div class="navbar-menus">
                    <nav class="navbar">
                        <a class="navbar-brand d-md-block d-none" href="{{ route('home') }}">

                            <div class="header-logo d-md-block d-none"> <img
                                    src=" {{ asset('assets/img/Layer-141-copy.png') }}" class="img-fluid"></div>
                        </a>
                        <a class="navbar-brand d-md-none d-block" href="{{ route('home') }}">
                            <div class="header-logo d-md-none d-block"><img
                                    src="{{ asset('assets/img/newlogo.png') }}" class="img-fluid"></div>
                        </a>
                        <div class="signin d-flex justify-content-start">
                            <span class="login-client-img-dasbord">
                                <div class="dropdown">
                                    <a class="login-dropers" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="login-client-img d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('storage/user/' . Auth::user()->image) }}">

                                            <i class="fa fa-chevron-down ps-2" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{ route('user.profile') }}"><span><img
                                                        src="{{ asset('assets/img/Layer-953.png') }}"
                                                        class="img-fluid"></span>My Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><span><img
                                                        src="{{ asset('assets/img/Layer-1315.png') }}"
                                                        class="img-fluid"></span>My Listing</a></li>
                                        <li><a class="dropdown-item" href="#"><span><img
                                                        src="{{ asset('assets/img/Layer-1411.png') }}"
                                                        class="img-fluid"></span>Reviews</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span><img
                                                        src="{{ asset('assets/img/Layer-919.png') }}"
                                                        class="img-fluid"></span>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                            <a href="#" class="btn  rounded-pill" type="submit">PLACE AN ADs</a>
                        </div>
                        <div class="header-drop">
                            <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                            <label for="openSidebarMenu" class="sidebarIconToggle">
                                <div class="spinner diagonal part-1"></div>
                                <div class="spinner horizontal"></div>
                                <div class="spinner diagonal part-2"></div>
                            </label>
                            <div id="sidebarMenu">
                                <ul class="sidebarMenuInner navbar-nav me-auto mb-2 mb-lg-0  mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('category') }}">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('listing') }}">Listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Business listing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</div>
<!------------------------header-end------------------------>
