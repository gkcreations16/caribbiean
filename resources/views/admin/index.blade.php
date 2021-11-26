@extends('layouts.backend.app')

@section('content')
    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pe-0">
        <div class="dasboard-content-side">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="Dashboard-in-dashboard">
                        <div class="row">
                            <div class="col-12 col-md-4 col-sm-6">
                                <div class="dasboard-apperense-wrap redo">
                                    <div class="card mx-auto">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4">
                                                <div class="dasboard-apperense">
                                                    <img src="{{ asset('assets/img/Layer-124-copy.png') }}"
                                                        class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">562</h5>
                                                    <p class="card-text">Total Posted Ads</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-sm-6">
                                <div class="dasboard-apperense-wrap greeno">
                                    <div class="card mx-auto">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4">
                                                <div class="dasboard-apperense">
                                                    <img src="{{ asset('assets/img/Layer-124-copy-2.png') }}"
                                                        class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">56</h5>
                                                    <p class="card-text">Active Listing</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-sm-6">
                                <div class="dasboard-apperense-wrap yellowo">
                                    <div class="card mx-auto">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-md-4">
                                                <div class="dasboard-apperense">
                                                    <img src="{{ asset('assets/img/Layer-124-copy-3.png') }}"
                                                        class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">201</h5>
                                                    <p class="card-text">Message</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="recent-aprovel-wrap">
                            <div class="row">
                                <div class=" col-md-7 col-sm-6 col-12">
                                    <div class="recent-aprovel-wrap-cole">
                                        <div class="headings-listing-page">
                                            <h5>Recenet Aproved Ads</h5>
                                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="recent-approvel-scrool-wrap">
                                            <div class="recent-approvel-scrool">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="recent-approvel-img">
                                                                <img src="{{ asset('assets/img/Layer-132.png') }}"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Favorite Place Food</h5>
                                                                <div><span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                </div>
                                                                <div><span><i class="fa fa-map-marker pe-2"
                                                                            aria-hidden="true"></i>New York Avenue, New
                                                                        York</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-approvel-scrool">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="recent-approvel-img">
                                                                <img src="{{ asset('assets/img/Layer-132.png') }}"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Favorite Place Food</h5>
                                                                <div><span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                </div>
                                                                <div><span><i class="fa fa-map-marker pe-2"
                                                                            aria-hidden="true"></i>New York Avenue, New
                                                                        York</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-approvel-scrool">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="recent-approvel-img">
                                                                <img src="{{ asset('assets/img/Layer-132.png') }}"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Favorite Place Food</h5>
                                                                <div><span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                </div>
                                                                <div><span><i class="fa fa-map-marker pe-2"
                                                                            aria-hidden="true"></i>New York Avenue, New
                                                                        York</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-approvel-scrool">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="recent-approvel-img">
                                                                <img src="{{ asset('assets/img/Layer-132.png') }}"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Favorite Place Food</h5>
                                                                <div><span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                </div>
                                                                <div><span><i class="fa fa-map-marker pe-2"
                                                                            aria-hidden="true"></i>New York Avenue, New
                                                                        York</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="recent-approvel-scrool">
                                                <div class="card border-0">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-4">
                                                            <div class="recent-approvel-img">
                                                                <img src="{{ asset('assets/img/Layer-132.png') }}"
                                                                    class="img-fluid rounded-start" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Favorite Place Food</h5>
                                                                <div><span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                </div>
                                                                <div><span><i class="fa fa-map-marker pe-2"
                                                                            aria-hidden="true"></i>New York Avenue, New
                                                                        York</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6 col-12">
                                    <div class="recent-activities-wrap-cole">
                                        <div class="headings-listing-page">
                                            <h5>Recent Activities</h5>
                                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="recent-approvel-scrool-wrap">
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="some-bookmark">
                                                <div class="card" style="max-width: 540px;">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-md-2">
                                                            <div class="bookmark-icon">
                                                                <span><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <div class="card-body">
                                                                <p>Someone bookmarked your listings!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="message-scroller-wrap">
                                        <div class="headings-listing-page">
                                            <h5>Messages</h5>
                                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="message-scroller">
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-spacer">
                                                <div class="card">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-1 col-sm-2 col-2">
                                                            <div class="message-comment-picture">
                                                                <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                                    class="img-fluid" alt="...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 col-sm-10 col-10">
                                                            <div class="card-body">
                                                                <h5>John, Write a review</h5>
                                                                <p class="card-title">Lorem ipsum, or lipsum as it is
                                                                    sometimes known, is dummy text used in laying out print,
                                                                    graphic or
                                                                    web designs. The passage is attributed to an unknown ...
                                                                </p>
                                                                <div class="message-comment-share-side">
                                                                    <span><i class="fa fa-calendar pe-2"
                                                                            aria-hidden="true"></i>2 Days Ago Posted</span>
                                                                    <span><i class="fa fa-reply pe-2"
                                                                            aria-hidden="true"></i>Reply</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="profile-settings-users-wrap">
                        <div class="profile-settings-users-pic-wrap">
                            <form>
                                <div class="circle" class="file-uploderss"
                                    onclick="document.getElementById('user-pictureee').click()">
                                    <!-- User Profile Image -->
                                    <img class="profile-pic"
                                        src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                                    <!-- Default Image -->
                                    <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button" class="file-uploderss"
                                        onclick="document.getElementById('user-pictureee').click()"></i>
                                    <input class="file-upload d-none" type="file" id="user-pictureee" accept="image/*" />
                                </div>
                                <div class="profile-settings-users-information">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label>Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Country</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected=""></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>State</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected=""></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>City</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected=""></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>Zip-Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="headings-listing-page">
                                            <h5>Social Network</h5>
                                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="col-6">
                                            <label>Facebook <i class="fa fa-facebook fb ms-2" aria-hidden="true"></i>
                                            </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Linked In <i class="fa fa-linkedin limkinn ms-2" aria-hidden="true"></i>
                                            </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Twitter <i class="fa fa-twitter twte ms-2" aria-hidden="true"></i>
                                            </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Whats App <i class="fa fa-whatsapp whatpp ms-2" aria-hidden="true"></i>
                                            </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="headings-listing-page">
                                            <h5>Password & Security</h5>
                                            <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="col-6">
                                            <label>Verification Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Current Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>New Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label>Repeat New Password</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-submit">
                                            <a href="#" class="btn btn-primary">SAVE CHANGES</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-post-ad" role="tabpanel" aria-labelledby="v-pillspost-ad-tab">
                    <div class="post-ad-user-form">
                        <form>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Basic Information</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Listing Title</label>
                                        <input type="text" class="form-control" placeholder="First name"
                                            aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <label>Type / Category</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Sub Category</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Location</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>City</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label>Address</label>
                                        <input type="text" class="form-control" aria-label="address name">
                                    </div>
                                    <div class="col-6">
                                        <label>State</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label>Zip-Code</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Gallery</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="field" align="center">
                                    <h4>Please Add Images of Your</h4>
                                    <input type="file" id="files" class="d-none" onchange="image_select()"
                                        multiple="">
                                    <button class="btn btn-sm btn-primary" type="button"
                                        onclick="document.getElementById('files').click()">SELECT FILES</button>
                                    <p>Maximum upload file size: 500 KB</p>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Detail</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Deccription</label>
                                        <textarea class="form-control" id="validationDefault05" required=""></textarea>
                                    </div>
                                    <div class="col-4">
                                        <label>Email Address: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-4">
                                        <label>Website: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-4">
                                        <label>Phone: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-4">
                                        <label>Facebook: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-4">
                                        <label>Twitter: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-4">
                                        <label>Linkedin: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Features</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="all-features">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1"> <label for="one">Air conditioning</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2"> <label for="two">Home Theater</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        value="option4"> <label for="three">Home Delivery
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                                        value="option5"> <label for="four">Room service</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                                        value="option6"> <label for="five">Electric</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                                        value="option7"> <label for="six">Security</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                                        value="option8"> <label for="seven">Balcony
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9"
                                                        value="option9"> <label for="eight">Parking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10"
                                                        value="option10"> <label for="nine">Net Banking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11"
                                                        value="option11"> <label for="ten">Home Theater
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12"
                                                        value="option12"> <label for="eleven">Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13"
                                                        value="option13"> <label for="twelve">Electric</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1"> <label for="thirteen">Telephone
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Opening Hours</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="opening-time-form">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Monday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="m-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="m-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Tuesday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="t-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="t-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Wednesday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="w-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="w-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Thursday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="th-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="th-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Friday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="f-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="f-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-2">
                                            <label for="text" class="col-form-label">Saturday</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="s-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-5">
                                            <input type="text" name="s-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Pricing:</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="col-12">
                                    <label>Pricing:</label>
                                    <input type="text" class="form-control" placeholder="First name" aria-label="Title">
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#" class="btn btn-primary">SUBMIT LISTING</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-my-listing" role="tabpanel"
                    aria-labelledby="v-pills-my-listing-tab">
                    <div class="row">
                        <div class="my-listing-Dashboard">
                            <table id="addManageTable"
                                class="table table-striped table-bordered add-manage-table table demo footable-loaded footable"
                                data-filter="#filter" data-filter-text-only="true">
                                <thead>
                                    <tr>
                                        <th class="photo"><i class="fa fa-camera pe-2"
                                                aria-hidden="true"></i>Photos</th>
                                        <th data-sort-ignore="true"><i class="fa fa-address-card-o pe-2"
                                                aria-hidden="true"></i>Ads Details</th>
                                        <th data-type="numeric"><i class="fa fa-usd pe-2" aria-hidden="true"></i>Price</th>
                                        <th><i class="fa fa-spinner pe-2" aria-hidden="true"></i>Ad Status</th>
                                        <th><i class="fa fa-cog pe-2" aria-hidden="true"></i>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-pencil pe-1"
                                                            aria-hidden="true"></i> Edit </a> </p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-pencil pe-1"
                                                            aria-hidden="true"></i> Edit </a> </p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-pencil pe-1"
                                                            aria-hidden="true"></i> Edit </a> </p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-pencil pe-1"
                                                            aria-hidden="true"></i> Edit </a> </p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="major-button mx-auto text-center">
                                <div class="pagination-list">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li><a class="# d-flex" href="#" aria-label="Previous"><span><i
                                                            class="fa fa-angle-left" aria-hidden="true"></i></span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                            class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-offers" role="tabpanel" aria-labelledby="v-pills-offers-tab">5
                </div>
                <div class="tab-pane fade" id="v-pills-visting-review" role="tabpanel"
                    aria-labelledby="v-pills-visting-review-tab">
                    <div class="vistory-review">
                        <div class="comment-wrap">
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-711.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-reply"
                                                                aria-hidden="true"></i>Reply</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-731.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-reply"
                                                                aria-hidden="true"></i>Reply</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-741.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-reply"
                                                                aria-hidden="true"></i>Reply</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="major-button mx-auto text-center">
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
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                        class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-my-review" role="tabpanel" aria-labelledby="v-pills-my-review-tab">
                    <div class="vistory-review">
                        <div class="comment-wrap">
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-711.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-pencil"
                                                                aria-hidden="true"></i>Edit</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-731.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-pencil"
                                                                aria-hidden="true"></i>Edit</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card  border-0">
                                <div class="row no-gutters">
                                    <div class="col-md-1 col-sm-2 col-2">
                                        <div class="comment-picture">
                                            <img src="{{ asset('assets/img/Layer-741.jpg') }}" class="img-fluid"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-11 col-sm-10 col-10">
                                        <div class="card-body">
                                            <p class="card-title">There are cracks in the foundation. Nothing
                                                structural. Nothing that’s going to threaten the stability of the home, but
                                                they’re there. Nooks, crannies and holes through which seeps an invisible
                                                threat. Colorless,</p>
                                            <p class="card-text"><b>Emilly Blunt</b> <small>December 4, 2019 at 3:12
                                                    pm</small></p>
                                            <div class="comment-share-side d-sm-flex justify-content-between">
                                                <div>
                                                    <span>
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </span>
                                                </div>
                                                <div class="review-editer">
                                                    <a href="#"><span><i class="fa fa-pencil"
                                                                aria-hidden="true"></i>Edit</span></a>
                                                    <a href="#"><span><i class="fa fa-times"
                                                                aria-hidden="true"></i>DELETE</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-img-review-wrapers">
                                        <ul>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>

                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="client-img-review">
                                                    <img src="{{ asset('assets/img/Layer-54-copy-2.jpg') }}"
                                                        class="img-fluid">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sell-all-view-client">
                                        <p><a href="#">See all photos from Emily Bunt</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="major-button mx-auto text-center">
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
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                        class="fa fa-angle-right" aria-hidden="true"></i></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Favourites" role="tabpanel"
                    aria-labelledby="v-pills-Favourites-tab">
                    <div class="row">
                        <div class="my-listing-Dashboard">
                            <table id="addManageTable"
                                class="table table-striped table-bordered add-manage-table table demo footable-loaded footable"
                                data-filter="#filter" data-filter-text-only="true">
                                <thead>
                                    <tr>
                                        <th class="photo"><i class="fa fa-camera pe-2"
                                                aria-hidden="true"></i>Photos</th>
                                        <th data-sort-ignore="true"><i class="fa fa-address-card-o pe-2"
                                                aria-hidden="true"></i>Ads Details</th>
                                        <th data-type="numeric"><i class="fa fa-usd pe-2" aria-hidden="true"></i>Price</th>
                                        <th><i class="fa fa-spinner pe-2" aria-hidden="true"></i>Ad Status</th>
                                        <th><i class="fa fa-cog pe-2" aria-hidden="true"></i>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%" class="add-img-td">
                                            <div class="sub-prper"><img class="thumbnail  img-fluid"
                                                    src="{{ asset('assets/img/Layer-112.jpg') }}" alt="img"></div>
                                        </td>
                                        <td style="width:40%" class="ads-details-td">
                                            <div class="ads-detail">
                                                <h4 title="Sony Xperia TX ">Favorite Place Food</h4>
                                                <p><span><i class="fa fa-calendar pe-2" aria-hidden="true"></i>
                                                    </span>02-Oct-2019, 04:38 PM </p>
                                                <p><span><i class="fa fa-map-marker pe-2" aria-hidden="true"></i>
                                                    </span>New York Avenue, New York</p>
                                            </div>
                                        </td>
                                        <td style="width:10%" class="price-td">
                                            <div>
                                                <p>$260
                                            </div>
                                        </td>
                                        <td style="width:14%;" class="active-status">
                                            <div><a href="#" class="btn btn-primary">Active</a></div>
                                        </td>
                                        <td style="width: 16%;" class="action-td">
                                            <div class="editser-optins">
                                                <p><a href="" class="edits-in"> <i class="fa fa-eye pe-1"
                                                            aria-hidden="true"></i> View </a></p>
                                                <p><a href="" class="edits-in"> <i class="fa fa-times pe-1"
                                                            aria-hidden="true"></i> Delete </a></p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="major-button mx-auto text-center">
                                <div class="pagination-list">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li><a class="# d-flex" href="#" aria-label="Previous"><span><i
                                                            class="fa fa-angle-left" aria-hidden="true"></i></span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li><a class="# d-flex" href="#" aria-label="Next"><span><i
                                                            class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                    <div class="privacy-form">
                        <form>
                            <div class="privacy-form-inner">
                                <div class="headings-user-form-page">
                                    <h5>Setting</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label for="one">I Want To Receive Monthly Newsletter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label for="option-2">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label for="three">I Want To Receive Monthly Newsletter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                    <label for="four">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                    <label for="five">I Want To Receive Monthly Newsletter</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                    <label for="five">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                                </div>
                                <div class="check-update">
                                    <a href="#" class="btn btn-primary">UPDATE</a>
                                </div>
                            </div>

                            <div class="privacy-form-inner">
                                <div class="headings-user-form-page">
                                    <h5>Password & Security</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label>Verification Email</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label>Current Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label>New Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label>Repeat New Password</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-submit">
                                        <a href="#" class="btn btn-primary">SAVE CHANGES</a>
                                    </div>
                                </div>
                            </div>

                            <div class="privacy-form-inner">
                                <div class="headings-user-form-page">
                                    <h5>Delete Account</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="col-12">
                                    <label>Select Reason</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected=""></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label>Description</label>
                                    <textarea class="form-control" id="validationDefault05" required=""></textarea>
                                </div>
                                <div class="form-submit">
                                    <a href="#" class="btn btn-primary">DELETE ACCOUNT</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">9
                </div>
                <div class="dasboard-copy-right d-flex justify-content-between">
                    <div>
                        <p>Copyright © 2021 All Rights Reserved</p>
                    </div>
                    <div>
                        <p>Privacy Policy|Terms and conditions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
