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
        </div>
        <div class="dasboard-content-side">
            <div class="privacy-form">
                <form>
                    <div class="privacy-form-inner">
                        <div class="headings-user-form-page">
                            <h5>Setting</h5>
                            <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> <label
                                for="one">I Want To Receive Monthly Newsletter</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> <label
                                for="option-2">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"> <label
                                for="three">I Want To Receive Monthly Newsletter</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4"> <label
                                for="four">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5"> <label
                                for="five">I Want To Receive Monthly Newsletter</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6"> <label
                                for="five">I Want To Receive E-Mail Notifications of Offers/Messages</label>
                        </div>
                        <div class="check-update">
                            <a href="#" class="btn btn-primary">UPDATE</a>
                        </div>
                    </div>

                    <div class="privacy-form-inner">
                        <div class="headings-user-form-page">
                            <h5>Password & Security</h5>
                            <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
                        </div>
                        <div class="row">
                            <div class=" col-sm-6 col-12">
                                <label>Verification Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class=" col-sm-6 col-12">
                                <label>Current Password</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class=" col-sm-6 col-12">
                                <label>New Password</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class=" col-sm-6 col-12">
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
                            <img src="img/Rounded-Rectangle-3-copy-7.png" class="img-fluid">
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
        <div class="dasboard-copy-right d-flex justify-content-between">
            <div>
                <p>Copyright © 2021 All Rights Reserved</p>
            </div>
            <div>
                <p>Privacy Policy|Terms and conditions</p>
            </div>
        </div>
    </div>
    @push('footer')
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    @endpush
@endsection
