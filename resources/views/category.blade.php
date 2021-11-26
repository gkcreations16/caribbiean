@extends('layouts.frontend.partials.appp2')
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
                <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-3.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($categorys as $category)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
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
                    </div>
                @endforeach
                <div class="col-12">
                    <div class="major-button top-space mx-auto text-center">
                        <div class="pagination-list">
                            <div class="pagination-list">
                                {!! $categorys->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------all-categorie-end------------------>

@endsection
