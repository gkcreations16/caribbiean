@extends('layouts.frontend.partials.appp2')
@section('content')
    @if (isset($postdetail))
        <!------------------------header-end------------------------>
        <div class="which-page-show">
            <p><a href="#"><span><i class="fa fa-home" aria-hidden="true"></i></span>Home</a> <span><i
                        class="fa fa-angle-right px-2" aria-hidden="true"></i>
                </span> <span></span> {{ $postdetail->category }}<span><i class="fa fa-angle-right px-2"
                        aria-hidden="true"></i>
                </span> <span>{{ $postdetail->subcategory }}</span><span><i class="fa fa-angle-right px-2"
                        aria-hidden="true"></i>
                </span> <span> {{ $postdetail->title }}
                </span></p>
        </div>
        <!----------------------listing-detail---------------------------->
        <div class="listing-detail-wrap  bottom-space">
            <div class="container">
                <div class="listing-detail-silder-wrap">
                    <div class="listing-detail-slider">

                        <div class="listing-slider-img">
                            <?php foreach (json_decode($postdetail->image)  as $postimage) {?>
                            <div><img src="{{ asset('/image/' . $postimage) }}" class="img-fluid"
                                    class="card-img" alt="..."></div>
                            <?php } ?>
                        </div>
                        <div class="listing-detail-slider-content">
                            <div class="which-name d-flex justify-content-between">
                                <div class="resto-name">
                                    <h5><span><i class="fas fa-utensils px-2"></i></span>{{ $postdetail->subcategory }}
                                    </h5>
                                </div>
                                <div class="share-button">
                                    <div class="lid"><span><i class="fa fa-share px-2"
                                                aria-hidden="true"></i></span>Share</div>
                                    <div class="share-items-wrapper">
                                        <div class="share-items">
                                            <a href="{{ $postdetail->fb_link }}" class="share-item">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                            <a href="{{ $postdetail->twitter_link }}" class="share-item">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                            <a href="{{ $postdetail->linkedind_link }}" class="share-item">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="thank-you">
                                        Thank you
                                    </div>
                                </div>
                            </div>
                            <div class="foodie-restaurant-wrap  align-items-end">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="rating-foodie">
                                            <ul>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <h3>{{ $postdetail->title }}</h3>
                                            <a href="tel:+000000000" class="btn-primary"><i class="fa fa-phone px-2"
                                                    aria-hidden="true"></i><span>{{ $postdetail->telephone }}</span></a>
                                            <a href="#" class="btn-primary-2"><i class="fa fa-map-marker px-2"
                                                    aria-hidden="true"></i><span>{{ $postdetail->address }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 align-self-end">
                                        <div class="start-frome text-end ">
                                            <p>Start From / {{ $postdetail->price }}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other-listing-slider-img-wrap">
                        <div class="other-listing-slider-img">

                            <?php foreach (json_decode($postdetail->image)  as $postimage) {?>
                            <div class="other-listing-slider-img-box">
                                <img src="{{ asset('/image/' . $postimage) }}" class="img-fluid"
                                    class="card-img" alt="...">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-------------------------listing-detail-slider-wrap-end------------------------------------>
                <div class="top-space">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="listing-inner-details">
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>Restaurant Menu</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="web-menu">
                                        <a href="{{ $postdetail->website }}"> <span><i class="fa fa-external-link pe-2"
                                                    aria-hidden="true"></i>
                                                Website
                                                Menu</span></a>
                                        <a href="#"> <span><i class="fa fa-bars pe-2" aria-hidden="true"></i>
                                                Full Menu</span></a>
                                    </div>
                                </div>
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>Description</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <p>{{ $postdetail->description }}</p>
                                </div>
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>Features</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Air
                                                    conditioning</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Home
                                                    Theater</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Telephone</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Room
                                                    service</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Double
                                                    Bed</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Security</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Balcony</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Electric</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Jacuzzi</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Pool</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Parking</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Garage</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Gym</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Wifi</span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                            <div class="property-discript-inners">
                                                <span><i class="fa fa-check" aria-hidden="true"></i>Alarm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>Video</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="listing-detail-page-video">
                                        <iframe width="100%" height="420" src="https://www.youtube.com/embed/SMKPKGW083c"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>20 Reviews</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="comment-wrap">
                                        <div class="card  border-0">
                                            <div class="row no-gutters">
                                                <div class="col-md-1 col-sm-2 col-2">
                                                    <div class="comment-picture">
                                                        <img src="{{ asset('assets/img/Layer-711.jpg') }}"
                                                            class="img-fluid" alt="...">
                                                    </div>
                                                </div>
                                                <div class="col-md-11 col-sm-10 col-10">
                                                    <div class="card-body">
                                                        <p class="card-title">There are cracks in the foundation.
                                                            Nothing
                                                            structural. Nothing that’s going to threaten the stability
                                                            of
                                                            the
                                                            home, but they’re there. Nooks, crannies and holes through
                                                            which
                                                            seeps an invisible threat. Colorless,</p>
                                                        <p class="card-text"><b>Emilly Blunt</b> <small>December
                                                                4,
                                                                2019
                                                                at 3:12 pm</small></p>
                                                        <div class="comment-share-side d-flex justify-content-between">
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
                                                        <img src="{{ asset('assets/img/Layer-731.jpg') }}"
                                                            class="img-fluid" alt="...">
                                                    </div>
                                                </div>
                                                <div class="col-md-11 col-sm-10 col-10">
                                                    <div class="card-body">
                                                        <p class="card-title">There are cracks in the foundation.
                                                            Nothing
                                                            structural. Nothing that’s going to threaten the stability
                                                            of
                                                            the
                                                            home, but they’re there. Nooks, crannies and holes through
                                                            which
                                                            seeps an invisible threat. Colorless,</p>
                                                        <p class="card-text"><b>Emilly Blunt</b> <small>December
                                                                4,
                                                                2019
                                                                at 3:12 pm</small></p>
                                                        <div class="comment-share-side d-flex justify-content-between">
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
                                                        <img src="{{ asset('assets/img/Layer-741.jpg') }}"
                                                            class="img-fluid" alt="...">
                                                    </div>
                                                </div>
                                                <div class="col-md-11 col-sm-10 col-10">
                                                    <div class="card-body">
                                                        <p class="card-title">There are cracks in the foundation.
                                                            Nothing
                                                            structural. Nothing that’s going to threaten the stability
                                                            of
                                                            the
                                                            home, but they’re there. Nooks, crannies and holes through
                                                            which
                                                            seeps an invisible threat. Colorless,</p>
                                                        <p class="card-text"><b>Emilly Blunt</b> <small>December
                                                                4,
                                                                2019
                                                                at 3:12 pm</small></p>
                                                        <div class="comment-share-side d-flex justify-content-between">
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
                                        <div class="review-more d-flex justify-content-between">
                                            <div class="preves">
                                                <a href="#" class="btn-more"><i class="fa fa-angle-left pe-2"
                                                        aria-hidden="true"></i>
                                                    Prev</a>
                                            </div>
                                            <div class="preves">
                                                <a href="#" class="btn-more">Next<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-pad">
                                    <div class="headings-listing-page">
                                        <h5>Start Your Review</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="listing-left-form">
                                        <form class="form" action="#" method="post" id="form">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class=" col-sm-6 col-12">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-12">
                                                    <label>Gallery (Optional)</label>
                                                    <div class="field" align="center">
                                                        <h4>Drag And Drop Photos Here</h4>
                                                        <input type="file" id="files" class="d-none"
                                                            onchange="image_select()" multiple />
                                                        <button class="btn btn-sm btn-primary" type="button"
                                                            onclick="document.getElementById('files').click()">Select
                                                            File</button>
                                                        <p>Maximum upload file size: 500 KB</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Comment</label>
                                                    <textarea class="form-control" id="validationDefault05"
                                                        required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label>Star Rating</label>
                                                <div class="inner">
                                                    <div class="form-rating">

                                                        <input class="rating__input" name="stars" id="e5" type="radio"
                                                            value="5">
                                                        <label class="rating__label" for="e5"><span
                                                                class="sb fas fa-star"></span></label>
                                                        <span class="rating__description">5.0</span>

                                                        <input class="rating__input" name="stars" id="e4" type="radio"
                                                            value="4">
                                                        <label class="rating__label" for="e4"><span
                                                                class="sb fas fa-star"></span></label>
                                                        <span class="rating__description">4.0</span>

                                                        <input class="rating__input" name="stars" id="e3" type="radio"
                                                            value="3">
                                                        <label class="rating__label" for="e3"><span
                                                                class="sb fas fa-star"></span></label>
                                                        <span class="rating__description">3.0</span>

                                                        <input class="rating__input" name="stars" id="e2" type="radio"
                                                            value="2">
                                                        <label class="rating__label" for="e2"><span
                                                                class="sb fas fa-star"></span></label>
                                                        <span class="rating__description">2.0</span>

                                                        <input class="rating__input" name="stars" id="e1" type="radio"
                                                            value="1">
                                                        <label class="rating__label" for="e1"><span
                                                                class="sb fas fa-star"></span></label>
                                                        <span class="rating__description">1.0</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-submit">
                                                <a href="#" class="btn btn-primary">SUBMIT</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="back-pad">
                                <div class="headings-listing-page">
                                    <h5>Contact Info</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="listing-detail-contact-info">
                                    <div class="card mb-3 border-0">
                                        <div class="row no-gutters align-items-end">
                                            <div class="col-md-2 col-sm-2 col-2 mt-2">
                                                <div class="comment-picture">
                                                    <img src="{{ asset('assets/img/Layer-12.png') }}"
                                                        class="img-fluid" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-10 ">
                                                <div class="card-body">
                                                    <h6 class="card-title">Ron Weasley</h6>
                                                    <p>Member since 1 year ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-inner-info">
                                        <ul class="info-list mt-3">
                                            <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New York
                                            </li>
                                            <li><span class="fas fa-phone"></span><a
                                                    href="tel:0000000000">000-000-0000</a>
                                            </li>
                                            <li><span class="fas fa-calendar-minus"></span> 2 Days Ago Posted</li>
                                        </ul>
                                    </div>
                                    @guest
                                        <h4>Please logIn First</h4>
                                    @else
                                        <div class="listing-detail-contact-info-formee">
                                            <form action="{{ route('massage.store') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="hidden" name="post_id" value="{{ $postdetail->id }}">
                                                        <input type="text" name="massage" class="form-control"
                                                            placeholder="Subject" aria-label="First name">
                                                    </div>
                                                    <div class="col-12">
                                                        {{-- <textarea class="form-control" id="validationDefault05" required=""
                                                        placeholder="Message"></textarea> --}}
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn-primary text-center d-block">SEND
                                                            MESSAGE</button>
                                                        {{-- <a href="#" class="btn-primary text-center d-block">SEND MESSAGE</a> --}}
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    @endguest


                                </div>
                            </div>
                            <div class="back-pad">
                                <div class="headings-listing-page">
                                    <h5>Direction</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="listing-direction-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41283717.39263079!2d-130.26729323717188!3d50.8356436663605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1628935883567!5m2!1sen!2sin"
                                        width="100%" height="100%" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                                <div class="map-direction-btn">
                                    <a href="https://goo.gl/maps/QGTjck78ePBDM7uG8" class="btn-primary"><i
                                            class="fa fa-location-arrow mx-2" aria-hidden="true"></i>GET DIRECTION</a>
                                </div>
                            </div>
                            <div class="back-pad">
                                <div class="headings-listing-page">
                                    <h5>Opening hours</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="days-hours">
                                    <ul class="d-flex justify-content-between">
                                        <li>Saturday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Sunday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Monday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Tuesday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Wednesday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Thrusday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>
                                    <ul class="d-flex justify-content-between">
                                        <li>Friday</li>
                                        <li>7:00am-9:00pm</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="back-pad">
                                <div class="headings-listing-page">
                                    <h5>Recently Listing</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                                <div class="listing-detail-page-recent-list">
                                    <div class="card border-0" style="max-width: 540px;">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-3 col-md-2 col-sm-2 col-2">
                                                <div class="listing-detail-page-recent-list-img">
                                                    <img src="{{ asset('assets/img/Layer-14.png') }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-9  col-md-10 col-sm-10 col-10 px-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">Luxury House in Greenvelle
                                                        City</h5>
                                                    <div><span><i class="fa fa-calendar" aria-hidden="true"></i>2 Days
                                                            Ago
                                                            Posted</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0" style="max-width: 540px;">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-lg-3 col-md-2 col-sm-2 col-2">
                                                <div class="listing-detail-page-recent-list-img">
                                                    <img src="{{ asset('assets/img/Layer-14.png') }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-9  col-md-10 col-sm-10 col-10 px-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">Luxury House in Greenvelle
                                                        City</h5>
                                                    <div><span><i class="fa fa-calendar" aria-hidden="true"></i>2 Days
                                                            Ago
                                                            Posted</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0" style="max-width: 540px;">
                                        <div class="row no-gutters align-items-center">
                                            <div class=" col-lg-3 col-md-2 col-sm-2 col-2">
                                                <div class="listing-detail-page-recent-list-img">
                                                    <img src="{{ asset('assets/img/Layer-14.png') }}"
                                                        class="img-fluid rounded-start" alt="...">
                                                </div>
                                            </div>
                                            <div class=" col-lg-9  col-md-10 col-sm-10 col-10 px-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">Luxury House in Greenvelle
                                                        City</h5>
                                                    <div><span><i class="fa fa-calendar" aria-hidden="true"></i>2 Days
                                                            Ago
                                                            Posted</span></div>
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
            <section class="sec-4 top-space">
                <div class="small-head-wrap">
                    <div class="text-center mx-auto">
                        <h5>Related</h5>
                        <h3>Related Listing</h3>
                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-12">
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
                                                <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New
                                                    York
                                                </li>
                                                <li><span class="fas fa-phone"></span><a
                                                        href="tel:0000000000">000-000-0000</a></li>
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
                        <div class="  col-lg-3 col-md-4 col-sm-6 col-12">
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
                                                <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New
                                                    York
                                                </li>
                                                <li><span class="fas fa-phone"></span><a
                                                        href="tel:0000000000">000-000-0000</a></li>
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
                        <div class="  col-lg-3 col-md-4 col-sm-6 col-12">
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
                                                <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New
                                                    York
                                                </li>
                                                <li><span class="fas fa-phone"></span><a
                                                        href="tel:0000000000">000-000-0000</a></li>
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
                        <div class="  col-lg-3 col-md-4  col-sm-6 col-12 mx-auto">
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
                                                <li><span class="fas fa-map-marker-alt"></span> New York Avenue, New
                                                    York
                                                </li>
                                                <li><span class="fas fa-phone"></span><a
                                                        href="tel:0000000000">000-000-0000</a></li>
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
                                <a href="listing.html" class="btn btn-primary">VIEW ALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endif

    <!----------------------.listing-detail-wrap---------------------------->


@endsection
