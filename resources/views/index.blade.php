@extends('layouts.frontend.partials.app')
@section('content')
    <!----------------------banner-content-end------------------------>
    {{-- {{ asset('assets/img/Layer-7.jpg') }} --}}
    @foreach ($Homepagedata as $pagedata)
        <div class="banner-content" style="background-image:url('{{ asset('assets/img/Layer-7.jpg') }}');">
            <div class="container">
                <div class="col-lg-9 mx-auto text-center">
                    <div class="banner-all-content-cover">
                        <div class="search-bar-heading">
                            <div class="search-million">
                                <div class="text-white">
                                    <h1> <b>{{ $pagedata->banner_heading }}</b>
                                    </h1>
                                    <p>{{ $pagedata->banner_content }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="serach-cover">
                            <div class="s003">
                                <form method="post" action="{{ url('/product/search') }}">
                                    @csrf
                                    <div class="inner-form  d-flex justify-content-between align-items-center">
                                        <div class="input-field first-wrap">
                                            <div class="input-select">
                                                <div class="select-category text-start">
                                                    <select class="form-select" name="select_cat"
                                                        aria-label="Default select example">
                                                        <option selected>Select Category</option>
                                                        @foreach ($categorys as $category)
                                                            <option value="{{ $category->name }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field second-wrap">
                                            <input id="search" name="searchonproduct" type="text"
                                                placeholder="Enter Keywords" />
                                            <button type="submit" class="search-button btn btn-primary"> <span
                                                    class="d-sm-block d-none">
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
                                <h4>{{ $pagedata->latest_listingheading }}</h4>
                                <p>{{ $pagedata->latest_listingdescription }}</p>
                                <a href="listing.html">View Listing<span class="fa fa-long-arrow-right ps-3"
                                        aria-hidden="true">
                                    </span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12 p-0">
                            <div class="home-list text-center bod">
                                <div class="home-list-icon-img">
                                    <img src="{{ asset('assets/img/Layer-79.png') }}" class="img-fluid">
                                </div>
                                <h4>{{ $pagedata->post_addheading }}</h4>
                                <p>{{ $pagedata->post_adddescription }}</p>
                                <a href="dashboard.html">Post An Ad<span class="fa fa-long-arrow-right ps-3"
                                        aria-hidden="true">
                                    </span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12 ps-0 mx-auto">
                            <div class="home-list text-center border-0">
                                <div class="home-list-icon-img">
                                    <img src="{{ asset('assets/img/Layer-822.png') }}" class="img-fluid">
                                </div>
                                <h4>{{ $pagedata->bussiness_direc_heading }}</h4>
                                <p>{{ $pagedata->bussiness_direc_description }}</p>
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
                                                                                                                                                                                                                                                                                                                           <!-hhh-----------------------sec1-end------------------------>

        <!------------------------sec1-new-start------------------------>
        <section class="sec-1 top-space bottom-space">
            <div class="small-head-wrap">
                <div class="text-center mx-auto">
                    <h5>{{ $pagedata->descover_heading }}</h5>
                    <h3>{{ $pagedata->mostpopulr_category }}</h3>
                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
                </div>
            </div>
            <div class="container">
                <div class="new-style-categories-slide-wrap">
                    <div id="new-style-categories-slide">
                        @foreach ($categorys as $category)
                            <div class="new-style-categories">
                                <a href="{{ route('categorydetail', $category->id) }}">
                                    <div class="card border-0 text-white">
                                        <div class="new-style-img">
                                            <img src="{{ asset('storage/category/' . $category->image) }}"
                                                alt="{{ $category->image }}" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">
                                            <div class="type-icon">
                                                <img src="{{ asset('storage/cat_icon/' . $category->iconimage) }}"
                                                    class="img-fluid">
                                            </div>
                                            <h5 class="card-title">{{ $category->name }}</h5>
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
                        @endforeach
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
                                        @foreach ($categorys as $category)
                                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-home" type="button" role="tab"
                                                aria-controls="v-pills-home" aria-selected="true">
                                                {{ $category->name }}
                                            </button>
                                        @endforeach
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
                                        <h5>{{ $pagedata->listing_heading }}</h5>
                                        <h3>{{ $pagedata->populor_feuted_add }}</h3>
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
                                            @foreach ($posts as $post)
                                                <div class="card border-0 ">
                                                    <a href="{{ route('details', $post->id) }}">
                                                        <div class="listinslide-img">
                                                            <?php foreach (json_decode($post->image)  as $postimage) {?>
                                                            <img src=" {{ asset('/image/' . $postimage) }}"
                                                                class="img-fluid" class="card-img-top" alt="...">
                                                            <?php } ?>
                                                            <div class="which-name">
                                                                <h5><span><i class="fas fa-utensils"></i></span>
                                                                    {{ $post->category }}
                                                                </h5>
                                                            </div>
                                                            <div class="item-price">
                                                                <p>
                                                                    ${{ $post->price }}.00
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $post->title }}</h5>
                                                        <div class="listing-inner-info">
                                                            <ul class="info-list mt-3">
                                                                <li><span class="fas fa-map-marker-alt"></span>
                                                                    {{ $post->address }}</li>
                                                                <li><span class="fas fa-phone"></span><a
                                                                        href="tel:0000000000">{{ $post->telephone }}</a>
                                                                </li>
                                                                <li><span class="fas fa-calendar-minus"></span>
                                                                    {{ date('d M Y - H:i:s', $post->created_at->timestamp) }}
                                                                </li>
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
                                            @endforeach
                                        </div>
                                    </div>
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
                                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}"
                                    class="img-fluid">
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
                    <h5>{{ $pagedata->why_we }}</h5>
                    <h3>{{ $pagedata->we_are_mstpopular }}</h3>
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
                                        <h5 class="card-title">{{ $pagedata->top_categry_head }}</h5>
                                        <p class="card-text">{{ $pagedata->top_categry_description }}</p>
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
                                        <h5 class="card-title">{{ $pagedata->qlity_adds_headings }}</h5>
                                        <p class="card-text">{{ $pagedata->qlity_adds_description }}</p>
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
                                        <h5 class="card-title">{{ $pagedata->top_bestlocation_headings }}</h5>
                                        <p class="card-text">{{ $pagedata->top_bestlocation_description }}</p>
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
                    <h5>{{ $pagedata->new_directory_head }}</h5>
                    <h3>{{ $pagedata->new_bussinesslisting }}</h3>
                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class=" col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="listing-slide-wrap">
                                <div class="card border-0 ">
                                    <div class="listinslide-img">
                                        <?php foreach (json_decode($post->image)  as $postimage) {?>
                                        <img src=" {{ asset('/image/' . $postimage) }}" class="img-fluid"
                                            class="card-img-top" alt="...">
                                        <?php } ?>
                                        <div class="which-name">
                                            <h5><span><i class="fas fa-utensils"></i></span>
                                                {{ $post->category }}
                                            </h5>
                                        </div>
                                        <div class="item-price">
                                            <p>
                                                ${{ $post->price }}.00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <div class="listing-inner-info">
                                            <ul class="info-list mt-3">
                                                <li><span class="fas fa-map-marker-alt"></span> {{ $post->address }}
                                                </li>
                                                <li><span class="fas fa-phone"></span><a
                                                        href="tel:0000000000">{{ $post->telephone }}</a>
                                                </li>
                                                <li><span class="fas fa-calendar-minus"></span>
                                                    {{ date('d M Y - H:i:s', $post->created_at->timestamp) }}</li>
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
                    @endforeach
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
                                    <h3 class="card-title">{{ $pagedata->find_whatyouwant_heading }}</h3>
                                    <p class="card-text">{{ $pagedata->find_whatyouwant_description }}</p>
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
                                    <h3 class="card-title">{{ $pagedata->explore_amezing_head }}</h3>
                                    <p class="card-text">{{ $pagedata->explore_amezing_description }}</p>
                                    <a href="busniess-listing.html" class="btn btn-primary-2">EXPLORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <!------------------------sec5-end------------------------>
@endsection
