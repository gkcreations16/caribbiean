@extends('layouts.frontend.partials.app')
@section('content')
    <!----------------------banner-content-end------------------------>
    {{-- {{ asset('assets/img/Layer-7.jpg') }} --}}
    <div class="banner-content" style="background-image:url('{{ asset('assets/img/Layer-7.jpg') }}');">
        <div class="container">
            <div class="col-lg-9 mx-auto text-center">
                <div class="banner-all-content-cover">
                    <div class="search-bar-heading">
                        <div class="search-million">
                            <div class="text-white">
                                <h1> <b>Search Millions Of Directories</b>
                                    And More Here
                                </h1>
                                <p>Over 2000+ Active Ads in 29+ Categories </p>
                            </div>
                        </div>
                    </div>
                    <div class="serach-cover">
                        <div class="s003">
                            <form>
                                <div class="inner-form  d-flex justify-content-between align-items-center">
                                    <div class="input-field first-wrap">
                                        <div class="input-select">
                                            <div class="select-category text-start">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select Category</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field second-wrap">
                                        <input id="search" type="text" placeholder="Enter Keywords" />
                                        <button class="search-button btn btn-primary"> <span class="d-sm-block d-none">
                                                Search</span> <span class="d-sm-none d-block"><i
                                                    class="fas fa-search"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------banner-content-end------------------------>

    <!--------------------------Styles-start--------------------------->
    <div class="all-styles-wrap top-space">
        <div class="container">
            <div class="all-styles">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-12 pe-0">
                        <div class="home-list text-center border-0">
                            <div class="home-list-icon-img">
                                <img src="{{ asset('assets/img/Layer-81.png') }}" class="img-fluid">
                            </div>
                            <h4>Latest Listing</h4>
                            <p>Reference site about Lorem Ipsum, giving
                                information on its origins, aserato..</p>
                            <a href="listing.html">View Listing<span class="fa fa-long-arrow-right ps-3" aria-hidden="true">
                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 p-0">
                        <div class="home-list text-center bod">
                            <div class="home-list-icon-img">
                                <img src="{{ asset('assets/img/Layer-79.png') }}" class="img-fluid">
                            </div>
                            <h4>Post An Ad Here</h4>
                            <p>Reference site about Lorem Ipsum, giving
                                information on its origins, aserato.. </p>
                            <a href="dashboard.html">Post An Ad<span class="fa fa-long-arrow-right ps-3" aria-hidden="true">
                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 ps-0 mx-auto">
                        <div class="home-list text-center border-0">
                            <div class="home-list-icon-img">
                                <img src="{{ asset('assets/img/Layer-822.png') }}" class="img-fluid">
                            </div>
                            <h4>Business Directory</h4>
                            <p>Reference site about Lorem Ipsum, giving
                                information on its origins, aserato..</p>
                            <a href="busniness-directiory.html">View Directory<span class="fa fa-long-arrow-right ps-3"
                                    aria-hidden="true">
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------styles-end----------------------------->

    <!------------------------sec1-start------------------------>
    <!-- <section class="sec-1 top-space bottom-space">
                                                        <div class="small-head-wrap">
                                                            <div class="text-center mx-auto">
                                                                <h5>Discover</h5>
                                                                <h3>Most Popular Categories</h3>
                                                                <img src="img/Rounded-Rectangle-3-copy-3.png" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-21.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-28.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">School</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-18-copy-3.png" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-19-copy-3.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">GYM</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-22.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-29.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">CLOTHES</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-23.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-30.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">JOB</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-24.png" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-31.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">FOOD</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-25.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-32.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">MOBILE</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-26.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-33.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">RESTAURANT</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                                    <div class="popular-categories">
                                                                        <div class="card border-0 text-white">
                                                                            <div class="shades">
                                                                                <div class="categores-img-fill">
                                                                                    <img src="img/Layer-27.jpg" class="img-fluid" class="card-img" alt="...">
                                                                                </div>
                                                                                <div class="card-img-overlay">
                                                                                    <div class="inner">
                                                                                        <div class="item-imges">
                                                                                            <img src="img/Layer-34.png" class="img-fluid">
                                                                                        </div>
                                                                                        <h5 class="card-title">PROPERTY</h5>
                                                                                        <div class="hidelist">
                                                                                            <p class="card-text">45 Listing</p>
                                                                                            <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="major-button mx-auto text-center">
                                                                        <a href="#" class="btn btn-primary">VIEW ALL</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section> -->
    <!------------------------sec1-end------------------------>

    <!------------------------sec1-new-start------------------------>
    <section class="sec-1 top-space bottom-space">
        <div class="small-head-wrap">
            <div class="text-center mx-auto">
                <h5>Discover</h5>
                <h3>Most Popular Categories</h3>
                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="new-style-categories-slide-wrap">
                <div id="new-style-categories-slide">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-651.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-29-copy-31.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">CLOTHES</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-746.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-77.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">CYCLE</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-18-copy-3.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-19-copy-5.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">GYM</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-74.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-75.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">TOYS</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-68.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-69.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">CARS</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-72.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-73.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">SHOPPING</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-66.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-67.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">BIKES</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-746.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-77.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">CYCLE</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-18-copy-3.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-19-copy-5.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">GYM</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-74.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-75.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">TOYS</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-68.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-69.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">CARS</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="{{ asset('assets/img/Layer-72.png') }}" class="img-fluid"
                                        class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="{{ asset('assets/img/Layer-73.png') }}" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">SHOPPING</h5>
                                    <div class="many-listing  d-flex justify-content-between">
                                        <div class="many-inner">
                                            <p>14 Listing</p>
                                        </div>
                                        <div class="effective-button"><a href="#"><span><i
                                                        class="fas fa-chevron-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="major-button mx-auto text-center top-space">
                        <a href="listing.html" class="btn btn-primary">VIEW ALL</a>
                    </div>
                </div>
            </div>
    </section>
    <!------------------------sec1-new-end------------------------>

    <!------------------------sec2-start------------------------>
    <section class="sec-2  bottom-space">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 p-0">
                    <div class="top-listing-wrap">
                        <div class="top-listing">
                            <h2>FEATURED LISTING</h2>
                        </div>
                        <div class="left-side-bar d-flex justify-content-center">

                            <div class="scroll-function">
                                <div class="under-category">
                                    <h6>Catgory <span><i class="fas fa-chevron-down"></i></span></h6>
                                </div>
                                <div class=" nav nav-pills nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                        aria-selected="true">

                                        Education
                                    </button>
                                    <button class="nav-link" id="v-pills-fitness-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-fitness" type="button" role="tab"
                                        aria-controls="v-pills-fitness" aria-selected="false">

                                        Fitness
                                    </button>
                                    <button class="nav-link" id="v-pills-school-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-school" type="button" role="tab"
                                        aria-controls="v-pills-school" aria-selected="false">

                                        School
                                    </button>
                                    <button class="nav-link" id="v-pills-college-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-college" type="button" role="tab"
                                        aria-controls="v-pills-college" aria-selected="false">

                                        College
                                    </button>
                                    <button class="nav-link" id="v-pills-hospital-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-hospital" type="button" role="tab"
                                        aria-controls="v-pills-hospital" aria-selected="false">

                                        Hospital
                                    </button>
                                    <button class="nav-link" id="v-pills-mobile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-mobile" type="button" role="tab"
                                        aria-controls="v-pills-mobile" aria-selected="false">

                                        Mobile
                                    </button>
                                    <button class="nav-link" id="v-pills-job-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job" type="button" role="tab" aria-controls="v-pills-job"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">
                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                    <button class="nav-link" id="v-pills-job2-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-job2" type="button" role="tab" aria-controls="v-pills-job2"
                                        aria-selected="false">

                                        Job
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 p-0">
                    <div class="right-side-slide">
                        <div class="catergories-in-scrool">
                            <div class="small-head-wrap">
                                <div class="mx-auto">
                                    <h5>Listing</h5>
                                    <h3>Popular Featued Ads</h3>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="listing-slide-wrap">
                                    <div class="listing-slider">
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-46.png') }}" class="img-fluid"
                                                    class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                                <div class="item-price">
                                                    <p>
                                                        $99.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-46.png') }}" class="img-fluid"
                                                    class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                                <div class="item-price">
                                                    <p>
                                                        $99.00
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel"
                                aria-labelledby="v-pills-fitness-tab">
                                <div class="listing-slide-wrap">
                                    <div class="listing-slider">
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-school" role="tabpanel"
                                aria-labelledby="v-pills-school-tab">
                                <div class="listing-slide-wrap">
                                    <div class="listing-slider">
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="img/Layer-38-copy-3.png" class="img-fluid"
                                                    class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-college" role="tabpanel"
                                aria-labelledby="v-pills-college-tab">
                                <div class="listing-slide-wrap">
                                    <div class="listing-slider">
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border-0 ">
                                            <div class="listinslide-img">
                                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}"
                                                    class="img-fluid" class="card-img-top" alt="...">
                                                <div class="which-name">
                                                    <h5><span><i class="fas fa-utensils"></i></span>
                                                        Restaurant
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Favorite Place Food </h5>
                                                <div class="listing-inner-info">
                                                    <ul class="info-list mt-3">
                                                        <li><span class="fas fa-map-marker-alt"></span> New York
                                                            Avenue, New York</li>
                                                        <li><span class="fas fa-phone"></span><a
                                                                href="tel:0000000000">000-000-0000</a></li>
                                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago
                                                            Posted</li>
                                                    </ul>
                                                </div>
                                                <div class="rating d-flex justify-content-between">
                                                    <div>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="save">
                                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel"
                                aria-labelledby="v-pills-hospital-tab">
                                5
                            </div>
                            <div class="tab-pane fade" id="v-pills-mobile" role="tabpanel"
                                aria-labelledby="v-pills-mobile-tab">
                                6
                            </div>
                            <div class="tab-pane fade" id="v-pills-job" role="tabpanel" aria-labelledby="v-pills-job-tab">
                                7
                            </div>
                            <div class="tab-pane fade" id="v-pills-job2" role="tabpanel"
                                aria-labelledby="v-pills-job2-tab">
                                8
                            </div>
                            <div class="col-12">
                                <div class="major-button mx-auto text-center">
                                    <a href="listing.html" class="btn btn-primary">VIEW ALL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------sec2-end---------------------- -->

    <!-- ----------------------mobile-respose popular-ads-start---------------------- -->
    <section class="mobile-respose top-space  bottom-space d-md-none">
        <div class="container-fluid">
            <div class="row">
                <div class="catergories-in-scrool">
                    <div class="small-head-wrap">
                        <div class="mx-auto text-center">
                            <h5>Listing</h5>
                            <h3>Popular Featued Ads</h3>
                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-slide-wrap">
                <div class="mobile-slider">
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 ">
                        <div class="listinslide-img">
                            <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                class="card-img-top" alt="...">
                            <div class="which-name">
                                <h5><span><i class="fas fa-utensils"></i></span>
                                    Restaurant
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Favorite Place Food </h5>
                            <div class="listing-inner-info">
                                <ul class="info-list mt-3">
                                    <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                    <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                    </li>
                                    <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                </ul>
                            </div>
                            <div class="rating d-flex justify-content-between">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="save">
                                    <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------mobile-respose popular-ads-end---------------------- -->

    <!------------------------sec3-start------------------------>
    <section class="sec-3  bottom-space">
        <div class="small-head-wrap">
            <div class="text-center mx-auto">
                <h5>Why We</h5>
                <h3>Why We Are Most Popular</h3>
                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="see-work">
                        <a href="category.html">
                            <div class="card text-center">
                                <div class="see-work-img">
                                    <img src="{{ asset('assets/img/Layer-43.png') }}" class="img-fluid"
                                        class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Top Category</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur adipisicing elit,
                                        sed do eiusmod tempor quam voluptatem.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="see-work">
                        <a href="listing.html">
                            <div class="card text-center">
                                <div class="see-work-img">
                                    <img src="{{ asset('assets/img/Layer-895.png') }}" class="img-fluid"
                                        class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Trust & Quality Ads</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur adipisicing elit,
                                        sed do eiusmod tempor quam voluptatem.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 mx-auto">
                    <div class="see-work">
                        <a href="busniness-directiory.html">
                            <div class="card text-center">
                                <div class="see-work-img">
                                    <img src="{{ asset('assets/img/Layer-42.png') }}" class="img-fluid"
                                        class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Top Best Location</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur adipisicing elit,
                                        sed do eiusmod tempor quam voluptatem.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------sec3-start------------------------>

    <!------------------------sec4-start------------------------>
    <section class="sec-4 top-space bottom-space">
        <div class="small-head-wrap">
            <div class="text-center mx-auto">
                <h5>New Directory</h5>
                <h3>New Business Listing</h3>
                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-38-copy-3.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-46.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                                <div class="item-price">
                                    <p>
                                        $99.00
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-48.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                                <div class="item-price">
                                    <p>
                                        $99.00
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-49.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-51.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-52.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                                <div class="item-price">
                                    <p>
                                        $99.00
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-53.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="  col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="listing-slide-wrap">
                        <div class="card border-0 ">
                            <div class="listinslide-img">
                                <img src="{{ asset('assets/img/Layer-50.png') }}" class="img-fluid"
                                    class="card-img-top" alt="...">
                                <div class="which-name">
                                    <h5><span><i class="fas fa-utensils"></i></span>
                                        Restaurant
                                    </h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Favorite Place Food </h5>
                                <div class="listing-inner-info">
                                    <ul class="info-list mt-3">
                                        <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York</li>
                                        <li><span class="fas fa-phone"></span><a href="tel:0000000000">000-000-0000</a>
                                        </li>
                                        <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                    </ul>
                                </div>
                                <div class="rating d-flex justify-content-between">
                                    <div>
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="save">
                                        <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="major-button mx-auto text-center">
                        <a href="busniess-listing.html" class="btn btn-primary">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!------------------------sec4-start------------------------>

    <!------------------------sec5-start------------------------>
    <section class="sec-5 bottom-space">
        <div class="container-fluid pl-0 pr-0">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 p-0">
                    <div class="find-what-you-want">
                        <div class="card  text-white mx-auto text-center">
                            <div class="find-what-img">
                                <img src="{{ asset('assets/img/Layer-54.jpg') }}" class="img-fluid"
                                    class="card-img" alt="...">
                            </div>
                            <div class="card-img-overlay">
                                <img src="{{ asset('assets/img/Layer-56.png') }}" class="img-fluid"
                                    class="card-img" alt="...">
                                <h3 class="card-title">Find What You Want</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consetetur adipisicing elit, sed
                                    do eiusmod tempor quam voluptatem.</p>
                                <a href="category.html" class="btn btn-primary">SEARCH</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12 p-0">
                    <div class="find-what-you-want">
                        <div class="card  text-white mx-auto text-center">
                            <div class="find-what-img">
                                <img src="{{ asset('assets/img/Layer-55.jpg') }}" class="img-fluid"
                                    class="card-img" alt="...">
                            </div>
                            <div class="card-img-overlay">
                                <img src="{{ asset('assets/img/Layer-57.png') }}" class="img-fluid"
                                    class="card-img" alt="...">
                                <h3 class="card-title">Explore Amzing Ads</h3>
                                <p class="card-text">Lorem ipsum dolor sit amet, consetetur adipisicing elit, sed
                                    do eiusmod tempor quam voluptatem.</p>
                                <a href="busniess-listing.html" class="btn btn-primary-2">EXPLORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------sec5-end------------------------>

@endsection
