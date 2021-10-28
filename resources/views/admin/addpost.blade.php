@extends('layouts.backend.app')
@push('header')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')

    <div class="col-md-9 col-sm-10 col-10 pe-0">
        <div class="col-md-12">
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
            <div></div>
            <div class="dasboard-content-side">
                <div class="tab-pane fade" id="v-pills-post-ad" role="tabpanel" aria-labelledby="v-pillspost-ad-tab">
                    <div class="post-ad-user-form">
                        <form>
                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Basic Information</h5>
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Listing Title</label>
                                        <input type="text" class="form-control" placeholder="First name"
                                            aria-label="First name">
                                    </div>
                                    <div class=" col-sm-6 col-12">
                                        <label>Type / Category</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
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
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <label>City</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Address</label>
                                        <input type="text" class="form-control" aria-label="address name">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>State</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
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
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
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
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Deccription</label>
                                        <textarea class="form-control" id="validationDefault05" required=""></textarea>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Email Address: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Website: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Phone: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Facebook: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Twitter: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>Linkedin: (optional)</label>
                                        <input type="text" class="form-control" aria-label="First name">
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Features</h5>
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="all-features">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1"> <label for="one">Air conditioning</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2"> <label for="two">Home Theater</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        value="option4"> <label for="three">Home Delivery
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                                        value="option5"> <label for="four">Room service</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                                        value="option6"> <label for="five">Electric</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                                        value="option7"> <label for="six">Security</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                                        value="option8"> <label for="seven">Balcony
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9"
                                                        value="option9"> <label for="eight">Parking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10"
                                                        value="option10"> <label for="nine">Net Banking
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11"
                                                        value="option11"> <label for="ten">Home Theater
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12"
                                                        value="option12"> <label for="eleven">Wifi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13"
                                                        value="option13"> <label for="twelve">Electric</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
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
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                                </div>
                                <div class="opening-time-form">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Monday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="m-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="m-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Tuesday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="t-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="t-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Wednesday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="w-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="w-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Thursday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="th-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="th-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Friday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="f-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="f-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-2 col-12">
                                            <label for="text" class="col-form-label">Saturday</label>
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="s-open" class="form-control"
                                                aria-describedby="text-open" placeholder="Opening Hours">
                                        </div>
                                        <div class="col-sm-5 col-12">
                                            <input type="text" name="s-close" class="form-control"
                                                aria-describedby="text-close" placeholder="Closing Time">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-ad-user-form-iner">
                                <div class="headings-user-form-page">
                                    <h5>Pricing:</h5>
                                    <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
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
            </div>
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
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    @push('footer')
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

        {!! Toastr::message() !!}
    @endpush
@endsection
