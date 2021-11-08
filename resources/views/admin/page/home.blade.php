@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <style>
        button.btn.btn-secondary.btnstyle.mb-1 {
            float: right;
            margin-right: 15px;
            margin-top: 13px;
            height: 34px;
            width: 22px;
        }

    </style>
    <div class="col-md-9 col-sm-10 col-10 pe-0">
        <div class="dasboard-content-side">
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        {{-- <div class="col-md-12">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div calss="alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="badge badge-pill badge-danger">Error</span>{{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        </div> --}}
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-md-12">
                                    @foreach ($Homepagedata as $key => $data)
                                        <button type="button" class="btn btn-secondary btnstyle mb-1" data-toggle="modal"
                                            data-target="#editModal-{{ $data->id }}">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    @endforeach
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.page.store') }}" method="post" id="createcategory"
                                        enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <div class="profile-settings-users-information">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <label>Banner Heading</label>
                                                    <input type="text" value="" name="banner_heading"
                                                        class="form-control">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Banner Description</label>
                                                    <input type="text" class="form-control" name="banner_content"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Latest Listing</label>
                                                    <input type="text" value="" name="latest_listingheading"
                                                        class="form-control">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Latest Listing Description</label>
                                                    <input type="text" class="form-control" value=""
                                                        name="latest_listingdescription">
                                                </div>
                                                <div class="col-12">
                                                    <label>Post An Ad Here</label>
                                                    <input type="text" class="form-control" name="post_addheading"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Post An Ad Here Description</label>
                                                    <input type="text" class="form-control" name="post_adddescription"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Business Directory</label>
                                                    <input type="text" class="form-control" name="bussiness_direc_heading"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Business Directory Description</label>
                                                    <input type="text" class="form-control"
                                                        name="bussiness_direc_description" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Discover</label>
                                                    <input type="text" class="form-control" name="descover_heading"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Most Popular Categories</label>
                                                    <input type="text" class="form-control" name="mostpopulr_category"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Listing
                                                    </label>
                                                    <input type="text" class="form-control" name="listing_heading"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Popular Featued Ads
                                                    </label>
                                                    <input type="text" class="form-control" name="populor_feuted_add"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Why We
                                                    </label>
                                                    <input type="text" class="form-control" name="why_we" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Why We Are Most Popular
                                                    </label>
                                                    <input type="text" class="form-control" name="we_are_mstpopular"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Top Category
                                                    </label>
                                                    <input type="text" class="form-control" name="top_categry_head"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Top Category Description
                                                    </label>
                                                    <input type="text" class="form-control" name="top_categry_description"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Trust & Quality Ads
                                                    </label>
                                                    <input type="text" class="form-control" name="qlity_adds_headings"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Trust & Quality Ads Description
                                                    </label>
                                                    <input type="text" class="form-control" name="qlity_adds_description"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Top Best Location
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="top_bestlocation_headings" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Top Best Location Description
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="top_bestlocation_description" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>New Directory
                                                    </label>
                                                    <input type="text" class="form-control" name="new_directory_head"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>New Business Listing
                                                    </label>
                                                    <input type="text" class="form-control" name="new_bussinesslisting"
                                                        value="">
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>Find What You Want
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="find_whatyouwant_heading" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Find What You Want description
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="find_whatyouwant_description" value="">
                                                </div>

                                                <div class="col-sm-6 col-12">
                                                    <label>Explore Amzing Ads
                                                    </label>
                                                    <input type="text" class="form-control" name="explore_amezing_head"
                                                        value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Explore Amzing Ads description
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="explore_amezing_description" value="">
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <label>Add New Listing And Build Your Business With Us
                                                    </label>
                                                    <input type="text" class="form-control" name="bottom_content_heading"
                                                        value="">
                                                </div>
                                                <div class="col-sm-12 col-12">
                                                    <label>Add New Listing And Build Your: Desceiption
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        name="bottom_content_description" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-md"
                                            onclick="event.preventDefault();document.getElementById('createcategory').submit();">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="animated">
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="mediumModalLabel">Create Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($Homepagedata as $data)
                        <div class="modal fade" id="editModal-{{ $data->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true"
                            style="display: none;">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Update Home Page</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.page.update', $data->id) }}" method="post"
                                            id="editcategory-{{ $data->id }}" enctype="multipart/form-data"
                                            class="form-horizontal">
                                            @csrf
                                            @method('PUT')
                                            <div class="profile-settings-users-information">
                                                <div class="row">
                                                    <div class="col-sm-6 col-12">
                                                        <label>Banner Heading</label>
                                                        <input type="text" value="{{ $data->banner_heading }}"
                                                            name="banner_heading" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Banner Description</label>
                                                        <input type="text" class="form-control" name="banner_content"
                                                            value="{{ $data->banner_content }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Latest Listing</label>
                                                        <input type="text" value="{{ $data->latest_listingheading }}"
                                                            name="latest_listingheading" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Latest Listing Description</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $data->latest_listingdescription }}"
                                                            name="latest_listingdescription">
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Post An Ad Here</label>
                                                        <input type="text" class="form-control" name="post_addheading"
                                                            value="{{ $data->post_addheading }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Post An Ad Here Description</label>
                                                        <input type="text" class="form-control"
                                                            name="post_adddescription"
                                                            value="{{ $data->post_adddescription }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Business Directory</label>
                                                        <input type="text" class="form-control"
                                                            name="bussiness_direc_heading"
                                                            value="{{ $data->bussiness_direc_heading }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Business Directory Description</label>
                                                        <input type="text" class="form-control"
                                                            name="bussiness_direc_description"
                                                            value="{{ $data->bussiness_direc_description }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Discover</label>
                                                        <input type="text" class="form-control" name="descover_heading"
                                                            value="{{ $data->descover_heading }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Most Popular Categories</label>
                                                        <input type="text" class="form-control"
                                                            name="mostpopulr_category"
                                                            value="{{ $data->mostpopulr_category }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Listing
                                                        </label>
                                                        <input type="text" class="form-control" name="listing_heading"
                                                            value="{{ $data->listing_heading }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Popular Featued Ads
                                                        </label>
                                                        <input type="text" class="form-control" name="populor_feuted_add"
                                                            value="{{ $data->populor_feuted_add }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Why We
                                                        </label>
                                                        <input type="text" class="form-control" name="why_we"
                                                            value="{{ $data->why_we }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Why We Are Most Popular
                                                        </label>
                                                        <input type="text" class="form-control" name="we_are_mstpopular"
                                                            value="{{ $data->we_are_mstpopular }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Top Category
                                                        </label>
                                                        <input type="text" class="form-control" name="top_categry_head"
                                                            value="{{ $data->top_categry_head }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Top Category Description
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="top_categry_description"
                                                            value="{{ $data->top_categry_description }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Trust & Quality Ads
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="qlity_adds_headings"
                                                            value="{{ $data->qlity_adds_headings }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Trust & Quality Ads Description
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="qlity_adds_description"
                                                            value="{{ $data->qlity_adds_description }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Top Best Location
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="top_bestlocation_headings"
                                                            value="{{ $data->top_bestlocation_headings }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Top Best Location Description
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="top_bestlocation_description"
                                                            value="{{ $data->top_bestlocation_description }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>New Directory
                                                        </label>
                                                        <input type="text" class="form-control" name="new_directory_head"
                                                            value="{{ $data->new_directory_head }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>New Business Listing
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="new_bussinesslisting"
                                                            value="{{ $data->new_bussinesslisting }}">
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>Find What You Want
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="find_whatyouwant_heading"
                                                            value="{{ $data->find_whatyouwant_heading }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Find What You Want description
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="find_whatyouwant_description"
                                                            value="{{ $data->find_whatyouwant_description }}">
                                                    </div>

                                                    <div class="col-sm-6 col-12">
                                                        <label>Explore Amzing Ads
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="explore_amezing_head"
                                                            value="{{ $data->explore_amezing_head }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Explore Amzing Ads description
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="explore_amezing_description"
                                                            value="{{ $data->explore_amezing_description }}">
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <label>Add New Listing And Build Your Business With Us
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="bottom_content_heading"
                                                            value="{{ $data->bottom_content_heading }}">
                                                    </div>
                                                    <div class="col-sm-12 col-12">
                                                        <label>Add New Listing And Build Your: Desceiption
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            name="bottom_content_description"
                                                            value="{{ $data->bottom_content_description }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-md"
                                                onclick="event.preventDefault();
                                                                                                             document.getElementById('editcategory-{{ $data->id }}').submit();">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- .content -->
                </div>


            </div>
        </div>
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
