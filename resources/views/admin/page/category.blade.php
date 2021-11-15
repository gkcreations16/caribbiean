@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <div class="which-page-show">
        <p><a href="#"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a> <span><i
                    class="fa fa-angle-right px-2" aria-hidden="true"></i>
            </span> <span>Category</span></p>
    </div>

    <!----------------all-categorie-start------------------>
    <div class="all-categories-wrap top-space bottom-space">
        <div class="small-head-wrap">
            <div class="text-center mx-auto">
                <h5>Discover</h5>
                <h3>Most Popular Categories</h3>
                <img src="img/Rounded-Rectangle-3-copy-3.png" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-651.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-29-copy-31.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-746.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-77.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-18-copy-3.png" class="img-fluid" class="card-img"
                                        alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-19-copy-5.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-74.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-75.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-68.png" class="img-fluid" class="card-img" alt="...">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-72.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-73.png" class="img-fluid">
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-66.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-67.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-746.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-77.png" class="img-fluid">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-55.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-54.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">JOBS</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-517.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-556.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">BUSINESS</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-599.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-568.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">COMMUNITY</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-631.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-680.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">MUSIC</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-63.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-62.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">TRAVEL</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-65.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-64.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">SPORTS</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-617.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-666.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">FARMING</h5>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mx-auto">
                    <div class="new-style-categories">
                        <a href="#">
                            <div class="card border-0 text-white">
                                <div class="new-style-img">
                                    <img src="img/Layer-668.png" class="img-fluid" class="card-img" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="type-icon">
                                        <img src="img/Layer-691.png" class="img-fluid">
                                    </div>
                                    <h5 class="card-title">HOUSEHOLD</h5>
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
                    <div class="major-button top-space mx-auto text-center">
                        <div class="pagination-list">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li><a class="# d-flex" href="#" aria-label="Previous"><span><i
                                                    class="fa fa-angle-left" aria-hidden="true"></i></span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------all-categorie-end------------------>

    <div class="footer-or-sec-6">
        <!------------------------sec6-start------------------------>
        <section class="sec-6">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-10 col-md-12 col-sm-12 mx-auto">
                        <div class="best-place-to-post text-center text-white">
                            <h3>Add New Listing <span>And Build Your Business</span> With Us</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur adipisicing elit, sed do eiusmod tempor quam
                                voluptatem.</p>
                            <a href="dashboard.html" class="btn btn-primary">PLACE AN AD</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------sec6-end------------------------>

        <!------------------------footer-start------------------------>
        <footer>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="footer-mains">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/footernewlog.png" class="img-fluid"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet,
                                consetetur adipisicing elit, sed do eiusmod tempor quam voluptatem.
                            </p>
                            <div class="foot-contact">
                                <div class="card border-0 ">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-1 col-sm-1 col-1">
                                            <div class="contact-icons">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-11 col-sm-11 col-11">
                                            <div class="card-body">
                                                <p class="card-title">Dummy Avenue, 3rd Floor dummy 10011 212.913.9058
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 ">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-1 col-sm-1 col-1">
                                            <div class="contact-icons">
                                                <span class="fas fa-phone"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-11 col-sm-11 col-11">
                                            <div class="card-body">
                                                <p><a href="tel:0000000000">000-000-0000</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 ">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-1 col-sm-1 col-1">
                                            <div class="contact-icons">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-11 col-sm-11 col-11">
                                            <div class="card-body">
                                                <p><a href="mailto:Dummy@gmail.com">Dummy@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-headers">
                                    <h4>Our Location</h4>
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="footer-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41313634.68886379!2d-130.19978933221205!3d50.801814945126814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1629197558130!5m2!1sen!2sin"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="side-spacer">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-headers">
                                        <h4>Quick Links</h4>
                                        <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                    </div>
                                    <div class="menus-list">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="category.html">Category</a></li>
                                            <li><a href="listing-.html">Listing</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="dashboard.html">Post Add</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>

                                    <div class="footer-headers">
                                        <h4>More Links</h4>
                                        <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                    </div>
                                    <div class="menus-list">
                                        <ul>
                                            <li><a href="sign-up.html">Login / Register</a></li>
                                            <li><a href="#">Live Chat</a></li>
                                            <li><a href="#">My Ads</a></li>
                                            <li><a href="#">My Profile</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-headers">
                                        <h4>Top Ads</h4>
                                        <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                    </div>
                                    <div class="menus-list">
                                        <ul>
                                            <li><a href="#">Cars & Vehicles</a></li>
                                            <li><a href="#">Farming</a></li>
                                            <li><a href="#">Animals</a></li>
                                            <li><a href="#">Household</a></li>
                                            <li><a href="#">Baby and Kids</a></li>
                                            <li><a href="#">Fashion & Lifestyle</a></li>
                                            <li><a href="#">Garden & DIY</a></li>
                                            <li><a href="#">Sports & Leisure</a></li>
                                            <li><a href="#">Music</a></li>
                                            <li><a href="#">Boats</a></li>
                                            <li><a href="#">Tech & Fun Stuff</a></li>
                                            <li><a href="#">Trades & Services</a></li>
                                            <li><a href="#">Property</a></li>
                                            <li><a href="#">Business</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-headers">
                                        <h4>Newsletter</h4>
                                        <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                    </div>
                                    <div class="menus-list">
                                        <p>To get the latest news and
                                            latest updates from us.
                                        </p>
                                    </div>
                                    <div class="sub-mail d-flex justify-content-start">
                                        <span>
                                            <form>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" class="form-control" placeholder="You E-mail">
                                                    </div>
                                                    <div class="col-6">
                                                        <span><img src="img/Layer-59.png" class="img-fluid"></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </span>
                                    </div>
                                    <div class="footer-headers">
                                        <h4>Facebook Updates</h4>
                                        <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                    </div>
                                    <div class="facebok-frame">
                                        <iframe
                                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                            width="100%" height="300" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowfullscreen="true"
                                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                    </div>
                                    <div class="footer-social-icon">
                                        <ul>
                                            <li><a href=""><span><i class="fab fa-facebook-f"></i></span></a></li>
                                            <li><a href=""><span><i class="fab fa-instagram"></i></span></a></li>
                                            <li><a href=""><span><i class="fab fa-twitter"></i></span></a></li>
                                            <li><a href=""><span><i class="fab fa-twitter"></i></span></a></li>
                                            <li><a href=""><span><i class="fab fa-linkedin-in"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copy-right d-flex justify-content-between">
                        <div>
                            <p>Copyright © 2021 All Rights Reserved</p>
                        </div>
                        <div>
                            <p>Privacy Policy|Terms and conditions</p>
                        </div>
                    </div>
                    <div class="all-scroller">
                        <a href="#my-btn"><span class="fas fa-long-arrow-alt-up"></span></a>
                    </div>
                </div>
            </div>
        </footer>
        <!------------------------footer-end-start------------------------>
    </div>
    @push('footer')
        <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
        <script>
            $(document).ready(function() {

                (function($) {

                    $('#filter').keyup(function() {

                        var rex = new RegExp($(this).val(), 'i');
                        $('.searchable tr').hide();
                        $('.searchable tr').filter(function() {
                            return rex.test($(this).text());
                        }).show();

                    })

                }(jQuery));

            });
        </script>
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    @endpush

@endsection
