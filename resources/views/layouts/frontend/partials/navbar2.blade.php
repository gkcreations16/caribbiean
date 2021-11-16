 <!------------------------header-start------------------------>
 <div class="listing-map-header">
     <section class="header">
         <div class="container-fluid">
             <div class="navbar-menus">
                 <nav class="navbar">
                     <a class="navbar-brand d-md-block d-none" href="{{ route('home') }}">
                         <div class="header-logo d-md-block d-none"> <img
                                 src="{{ asset('assets/img/Layer-141-copy.png') }}" class="img-fluid"></div>
                     </a>
                     <a class="navbar-brand d-md-none d-block" href="{{ route('home') }}">
                         <div class="header-logo d-md-none d-block"><img src="{{ asset('assets/img/newlogo.png') }}"
                                 class="img-fluid">
                         </div>
                     </a>
                     <div class="serach-cover">
                         <div class="s003">
                             <form method="post" action="{{ url('/product/search') }}">
                                 @csrf

                                 <div class="inner-form  d-flex justify-content-between align-items-center">
                                     @if (isset($data))
                                         <div class="input-field first-wrap">
                                             <div class="input-select">
                                                 <div class="select-category text-start">
                                                     <select class="form-select" aria-label="Default select example"
                                                         name="select_cat">
                                                         <option selected="">Select Category</option>
                                                         @foreach ($categorys as $category)
                                                             <option value="{{ $category->name }}">
                                                                 {{ $category->name }}
                                                             </option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>

                                     @else
                                         <div class="input-field first-wrap">
                                             <div class="input-select">
                                                 <div class="select-category text-start">
                                                     <select class="form-select" aria-label="Default select example"
                                                         name="select_cat">
                                                         <option selected="">Select Category</option>
                                                         @foreach ($categorys as $category)
                                                             <option value="{{ $category->name }}">
                                                                 {{ $category->name }}
                                                             </option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                     @endif
                                     {{-- <form method="post" action="{{ url('/product/search') }}"> --}}
                                     <div class="input-field second-wrap">
                                         <input id="search" type="text" name="searchonproduct"
                                             placeholder="Enter Keywords" required="true">
                                         <button type="submit" class="search-button btn btn-primary"> <span
                                                 class="d-sm-block d-none">
                                                 Search</span> <span class="d-sm-none d-block"><i
                                                     class="fas fa-search"></i></span></button>

                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
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
                                     <a class="nav-link" href="busniess-listing.html">Business listing</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="#">Contact Us</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="header-categories">
                         <nav class="navbar navbar-expand ">
                             <div class="container-fluid ps-0">
                                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                     aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="navbar-toggler-icon"></span>
                                 </button>
                                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                         <li class="nav-item dropdown position-static show">
                                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                 All Categories<span><i class="fa fa-chevron-down px-2"
                                                         aria-hidden="true"></i>
                                                 </span>
                                             </a>
                                             <div class="dropdown-menu rounded-0 w-100 border-0 m-0 p-0 shadow-sm"
                                                 aria-labelledby="navbarDropdown">
                                                 <div class="container-fluid">
                                                     <div class="col-12">
                                                         <div class="all-in-one-categories">
                                                             <div class="row">
                                                                 @foreach ($subcategorys as $data)
                                                                     @foreach ($categorys as $category)
                                                                         @if ($data->category == $category->name)
                                                                             <div
                                                                                 class="col-12 col-lg-3 col-md-4 col-sm-6">
                                                                                 <div>
                                                                                     <p>{{ $category->name }}</p>
                                                                                     <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                                                         class="img-fluid">
                                                                                     <ul>
                                                                                         <li><a
                                                                                                 href="#">{{ $data->name }}</a>
                                                                                         </li>
                                                                                     </ul>
                                                                                 </div>
                                                                         @endif
                                                                     @endforeach
                                                             </div>
                                                             @endforeach
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                 </div>
                                 </li>
                                 </ul>
                             </div>
                     </div>
                 </nav>
             </div>
             </nav>
         </div>
 </div>
 </section>
 </div>
 <!------------------------header-end------------------------>
