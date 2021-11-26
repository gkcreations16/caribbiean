<!-----------------------------Dashboard-----------------ee------------>
<div class="Dashboard bottom-space">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="dasboard-leftside">
                    <!-- <div class="login-user-img-wraper">
                            <div class="card mx-auto border-0">
                                <div class="row g-0 align-items-center">
                                  <div class="col-md-4">
                                      <div class="login-user-img">
                                       <img src="img/Layer-109.png" class="img-fluid" class="img-fluid rounded-start" alt="...">
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Alex John</h5>
                                      <p class="card-text">Premium Member</p>
                                    </div>
                                  </div> 
                                </div>
                            </div>
                        </div> -->
                    <button class="navbar-toggler d-lg-none d-block" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                    <div class="collapse" id="navbarTogglerDemo03">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1281.png') }}"
                                        class="img-fluid"></span>Dashboard</a>
                            {{-- <a href="{{ route('admin.dashboard') }}" class="nav-link"><span
                                class="oval"><img src="{{ asset('assets/img/Layer-1281.png') }}"
                                    class="img-fluid"></span>Dashboard</a> --}}
                            <a href="{{ route('admin.profile') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-953.png') }}"
                                        class="img-fluid"></span>Profile
                                Setting</a>
                            <a href="{{ route('admin.page.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1301.png') }}"
                                        class="img-fluid"></span>Home Page</a>

                            <a href="{{ route('admin.addpost.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1301.png') }}"
                                        class="img-fluid"></span>Post
                                An
                                Ad</a>
                            <a href="{{ route('admin.user.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-953.png') }}"
                                        class="img-fluid"></span>Users</a>
                            <a href="{{ route('admin.category.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1301.png') }}"
                                        class="img-fluid"></span>Add Category</a>
                            <a href="{{ route('admin.subcategory.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1301.png') }}"
                                        class="img-fluid"></span>Add SubCategory</a>
                            <a href="{{ route('admin.addpost.index') }}" class="nav-link"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1315.png') }}"
                                        class="img-fluid"></span>My
                                Listing</a>
                            {{-- <button class="nav-link" id="v-pills-offers-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-offers" type="button" role="tab" aria-controls="v-pills-offers"
                                aria-selected="false"><span class="oval"><img
                                        src="{{ asset('assets/img/Layer-1351.png') }}"
                                        class="img-fluid"></span>Offers
                                / Message</button>
                            <button class="nav-link" id="v-pills-visting-review-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-visting-review" type="button" role="tab"
                                aria-controls="v-pills-visting-review" aria-selected="false"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1410.png') }}"
                                        class="img-fluid"></span>Visitor Reviews</button>
                            <button class="nav-link" id="v-pills-my-review-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-my-review" type="button" role="tab"
                                aria-controls="v-pills-my-review" aria-selected="false"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1411.png') }}"
                                        class="img-fluid"></span>My
                                Reviews</button>
                            <button class="nav-link" id="v-pills-Favourites-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-Favourites" type="button" role="tab"
                                aria-controls="v-pills-Favourites" aria-selected="false"><span
                                    class="oval"><img src="{{ asset('assets/img/Layer-1341.png') }}"
                                        class="img-fluid"></span>My
                                Favourites</button>
                            <button class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-privacy" type="button" role="tab"
                                aria-controls="v-pills-privacy" aria-selected="false"><span class="oval"><img
                                        src="{{ asset('assets/img/Layer-918.png') }}"
                                        class="img-fluid"></span>Privacy
                                Setting</button> --}}
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout"
                                aria-selected="false"><span class="oval"><img
                                        src="{{ asset('assets/img/Layer-919.png') }}"
                                        class="img-fluid"></span>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>


        <!------------------------------Dashboard-end------------------------>
