 <!------------------------header-start------------------------>
 <section class="header">
     <div class="container-fluid">
         <div class="navbar-menus">
             <nav class="navbar navbar-expand-lg">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="{{ route('home') }}">
                         {{-- {{ asset('assets/img/newlogo.png') }} --}}

                         <div class="header-logo"> <img src="{{ asset('assets/img/newlogo.png') }}"
                                 class="img-fluid"></div>
                     </a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0  mx-auto">
                             <li class="nav-item active">
                                 <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('category') }}">Categories</a>
                             </li>
                             <li class="    nav-item">
                                 <a class="nav-link" href="{{ route('listing') }}">Featured Listing</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Business Listing</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#">Contact Us</a>
                             </li>
                         </ul>
                         <div class="signin">
                             @if (Route::has('login'))
                                 @auth
                                     <span>
                                         @if (Auth::user()->role->id == 1)
                                             <a href="{{ route('admin.dashboard') }}"><i class="fas fa-user pe-2"></i>
                                                 Dashboard</a>
                                         @elseif(Auth::user()->role->id == 2)
                                             <a href="{{ route('user.dashboard') }}">Dashboard</a>
                                         @else
                                             null
                                         @endif
                                     </span>
                                 @else
                                     <span>
                                         <a href="{{ route('login') }}"><i class="fas fa-user pe-2"></i>
                                             Sign in</a>
                                         <span>
                                             {{-- @if (Route::has('register'))
                                         <a href="{{ route('register') }}">Register</a>
                                     @endif --}}
                                         @endauth
                             @endif
                             <a href="dashboard.html" class="btn  rounded-pill" type="submit">PLACE AN AD</a>
                         </div>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </section>
 <!------------------------header-end------------------------>
