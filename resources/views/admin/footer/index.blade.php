@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush

@section('content')
    <div class="col-lg-9 col-md-12 col-sm-12 col-12 pe-0">
        <div class="dasboard-content-side">
            @if (isset($Footerdata))
                @foreach ($Footerdata as $data)
                    <form action="{{ route('admin.footer.update', $data->id) }}" method="post"
                        id="editcategory-{{ $data->id }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="profile-settings-users-information">
                            <div class="row">
                                <div class="col-12">
                                    <div calss="recent-aprovel-wrap-cole">
                                        <div class="headings-listing-page">
                                            <h5>Footer Section</h5>
                                            <img src=" {{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <img src=" {{ asset('/home_imag/' . $data->footer_bgimage) }}" height="20px"
                                        width="10%">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <img src=" {{ asset('/home_imag/' . $data->logoimage) }}" height="20px" width="10%">
                                </div>
                                <div class="col-sm-6 col-12">

                                    <label>Footer Banner image</label>
                                    <input type="file" name="footer_bgimage" class="form-control">
                                </div>
                                <div class="col-sm-6 col-12">

                                    <label>Logo image</label>
                                    <input type="file" name="logoimage" class="form-control">
                                </div>


                                <div class="col-sm-12 col-12">
                                    <label>Short Note</label>
                                    <input type="text" class="form-control" name="short_note"
                                        value="{{ $data->short_note }}">
                                </div>


                                <div class="col-sm-6 col-12">
                                    <label>Address</label>
                                    <input type="text" value="{{ $data->foot_address }}" name="foot_address"
                                        class="form-control">
                                </div>


                                <div class="col-sm-6 col-12">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{ $data->phone }}" name="phone">
                                </div>

                                <div class="col-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                                </div>


                                <div class="col-sm-6 col-12">
                                    <label>Location Tittle</label>
                                    <input type="text" class="form-control" name="location_title"
                                        value="{{ $data->location_title }}">
                                </div>
                                <div class="col-sm-12 col-12">
                                    <label>Location Map</label>
                                    <input type="text" name="location_map" value="{{ $data->location_map }}"
                                        class="form-control">
                                </div>
                                <div class="col-12">
                                    <div calss="recent-aprovel-wrap-cole">
                                        <div class="headings-listing-page">
                                            <h5>Footer Right side Section</h5>
                                            <img src=" {{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-12">
                                    <label>Facebook Tittle</label>
                                    <input type="text" class="form-control" name="fb_title"
                                        value="{{ $data->fb_title }}">
                                </div>


                                <div class="col-sm-12 col-12">
                                    <label>Facebook Video</label>
                                    <input type="text" class="form-control" name="fb_videolink"
                                        value="{{ $data->fb_videolink }}">
                                </div>

                                <div class="col-sm-6 col-12">
                                    <label>Facebook Link</label>
                                    <input type="text" class="form-control" name="foot_fblink"
                                        value="{{ $data->foot_fblink }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Instagram Link</label>
                                    <input type="text" class="form-control" name="foot_insatalink"
                                        value="{{ $data->foot_insatalink }}">
                                </div>

                                <div class="col-sm-6 col-12">
                                    <label>Twitter Link
                                    </label>
                                    <input type="text" class="form-control" name="foot_twitterlink"
                                        value="{{ $data->foot_twitterlink }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Linkedin
                                    </label>
                                    <input type="text" class="form-control" name="foot_Linkinlink"
                                        value="{{ $data->foot_Linkinlink }}">
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md"
                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             document.getElementById('editcategory-{{ $data->id }}').submit();">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </form>
                @endforeach
            @else
                <form action="{{ route('admin.footer.store') }}" method="post" id="createcategory"
                    enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="profile-settings-users-information">
                        <div class="col-12">
                            <div calss="recent-aprovel-wrap-cole">
                                <div class="headings-listing-page">
                                    <h5>Footer Left side Section</h5>

                                    <img src=" {{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <label>Footer Bagroung Image</label>
                                <input type="file" name="footer_bgimage" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Footer Logo Image</label>
                                <input type="file" name="logoimage" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Short Note</label>
                                <input type="text" class="form-control" name="short_note">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Address</label>
                                <input type="text" name="foot_address" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label>Location Title</label>
                                <input type="text" class="form-control" name="location_title">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Location Map</label>
                                <input type="text" class="form-control" name="location_map">
                            </div>
                            <div class="col-12">
                                <div calss="recent-aprovel-wrap-cole">
                                    <div class="headings-listing-page">
                                        <h5>Fotter Right side Section</h5>
                                        <img src=" {{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Facebook Title</label>
                                <input type="text" name="fb_title" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Facebook Video Link</label>
                                <input type="text" class="form-control" name="fb_videolink">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Facebook Link</label>
                                <input type="text" class="form-control" name="foot_fblink">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Instagram Link</label>
                                <input type="text" name="foot_insatalink" class="form-control">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Twitter Link</label>
                                <input type="text" class="form-control" name="foot_twitterlink">
                            </div>
                            <div class="col-sm-6 col-12">
                                <label>Linkend Link</label>
                                <input type="text" class="form-control" name="foot_Linkinlink">
                            </div>
                            <button type="submit" class="btn btn-primary btn-md"
                                onclick="event.preventDefault();document.getElementById('createcategory').submit();">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                </form>
            @endif
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
