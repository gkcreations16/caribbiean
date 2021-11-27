<!-----------------------------Dashboard--user--------------------------->
<div class="Dashboard bottom-space">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3 col-sm-2 col-2">
                <div class="dasboard-leftside">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="{{ route('user.dashboard') }}" class="nav-link "><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-1281.png') }}"
                                    class="img-fluid"></span>Dashboard</a>
                        <a href="{{ route('user.profile') }}" class="nav-link"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-953.png') }}"
                                    class="img-fluid"></span>Profile Setting</a>
                        <a href="{{ route('user.addpost.index') }}" class="nav-link"><span
                                class="oval"><img src="{{ asset('assets/img/Layer-1301.png') }}"
                                    class="img-fluid"></span>Post
                            An
                            Ad</a>

                        <button class="nav-link" id="v-pills-my-listing-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-my-listing" type="button" role="tab"
                            aria-controls="v-pills-my-listing" aria-selected="false"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-1315.png') }}" class="img-fluid"></span>My
                            Listing</button>
                        <button class="nav-link" id="v-pills-offers-tab" data-bs-toggle="pill"
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
                            aria-controls="v-pills-my-review" aria-selected="false"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-1411.png') }}" class="img-fluid"></span>My
                            Reviews</button>
                        <button class="nav-link" id="v-pills-Favourites-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Favourites" type="button" role="tab"
                            aria-controls="v-pills-Favourites" aria-selected="false"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-1341.png') }}" class="img-fluid"></span>My
                            Favourites</button>
                        <button class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-privacy" type="button" role="tab" aria-controls="v-pills-privacy"
                            aria-selected="false"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-918.png') }}"
                                    class="img-fluid"></span>Privacy
                            Setting</button>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="nav-link" id="v-pills-logout-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-logout" type="button" role="tab" aria-controls="v-pills-logout"
                            aria-selected="false"><span class="oval"><img
                                    src="{{ asset('assets/img/Layer-919.png') }}"
                                    class="img-fluid"></span>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
        <!------------------------------Dashboard-end------------------------>
