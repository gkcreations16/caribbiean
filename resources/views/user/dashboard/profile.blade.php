@extends('layouts.backend.appuser')
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
            <div class="profile-settings-users-pic-wrap">
                <div class="tab">
                    <button class="tablinks btn btn-primery" onclick="openCity(event, 'Info')"
                        id="defaultOpen">Profile</button>
                    <button class="tablinks  btn btn-primery" onclick="openCity(event, 'credentials')">Credentials</button>
                </div>
                <div id="Info" class="tabcontent">
                    <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="circle" class="file-uploderss"
                            onclick="document.getElementById('user-pictureee').click()">
                            <!-- User Profile Image -->
                            @if (isset($user->image))
                                <img class="profile-pic" src="{{ asset('storage/user/' . $user->image) }}"
                                    alert="user-pic">
                            @else
                                <img class="profile-pic"
                                    src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                            @endif
                            <!-- Default Image -->
                            {{-- <i class="fa fa-user fa-5x"></i> --}}
                        </div>
                        <div class="p-image">
                            <i class="fa fa-camera upload-button" class="file-uploderss"
                                onclick="document.getElementById('user-pictureee').click()"></i>
                            <input class="file-upload d-none" type="file" name="image" id="user-pictureee"
                                accept="image/*" />
                        </div>
                        <div class="profile-settings-users-information">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" value="{{ $user->name }}" name="name" class="form-control"
                                        readonly>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname"
                                        value="{{ isset($user->lastname) ? $user->lastname : old('lastname') }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Email</label>
                                    <input type="text" value="{{ $user->email }}" name="email" class="form-control"
                                        readonly>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Phone</label>
                                    <input type="text" class="form-control"
                                        value="{{ isset($user->phone) ? $user->phone : old('phone') }}" name="phone">
                                </div>
                                <div class="col-12">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address"
                                        value="{{ isset($user->address) ? $user->address : old('address') }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country"
                                        value="{{ isset($user->country) ? $user->country : old('country') }}">
                                    {{-- <select class="form-select" aria-label="Default select example" name="country">
                                    <option selected=""></option>
                                    <option value="India">India</option>
                                    <option value="Pakisatan">Pakisatan</option>
                                    <option value="Nepal">Nepal</option>

                                </select> --}}
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state"
                                        value="{{ isset($user->state) ? $user->state : old('state') }}">
                                    {{-- <select class="form-select" aria-label="Default select example" name="state">
                                    <option selected=""></option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Delhi">Delhi</option>
                                </select> --}}
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city"
                                        value="{{ isset($user->city) ? $user->city : old('city') }}">
                                    {{-- <select class="form-select" aria-label="Default select example" name="city">
                                    <option selected=""></option>
                                    <option value="Ludiana">Ludiana</option>
                                    <option value="Khanna">Khanna</option>
                                </select> --}}
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Zip-Code</label>
                                    <input type="text" class="form-control" name="zipcode"
                                        value="{{ isset($user->zipcode) ? $user->zipcode : old('zipcode') }}">
                                </div>
                                <div class="headings-listing-page">
                                    <h5>Social Network</h5>
                                    <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                        class="img-fluid">
                                    <input type="hidden" class="form-control" name="role_id"
                                        value="{{ $user->role_id }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Facebook <i class="fab fa-facebook-f fb ms-2"></i>
                                    </label>
                                    <input type="text" class="form-control" name="fb_link"
                                        value="{{ isset($user->fb_link) ? $user->fb_link : old('fb_link') }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Linked In <i class="fab fa-linkedin-in limkinn  ms-2"></i>
                                    </label>
                                    <input type="text" class="form-control" name="linkind_link"
                                        value="{{ isset($user->linkind_link) ? $user->linkind_link : old('linkind_link') }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Twitter <i class="fab fa-twitter twte ms-2"></i>
                                    </label>
                                    <input type="text" class="form-control" name="twitter_link"
                                        value="{{ isset($user->twitter_link) ? $user->twitter_link : old('twitter_link') }}">
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Whats App <i class="fab fa-whatsapp whatpp ms-2"></i>
                                    </label>
                                    <input type="text" class="form-control" name="whatsapp_link"
                                        value="{{ isset($user->whatsapp_link) ? $user->whatsapp_link : old('whatsapp_link') }}">
                                </div>

                                <input type="hidden" class="form-control" name="userid" value="{{ $user->userid }}">

                                <input type="hidden" class="form-control" name="password"
                                    value="{{ isset($user->password) ? $user->password : old('password') }}">
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-primary">
                                        SAVE CHANGES
                                    </button>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form action="{{ route('admin.profile.password') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div id="credentials" class="tabcontent">
                            <div class="profile-settings-users-information">
                                <div class="row">
                                    <div class="headings-listing-page">
                                        <h5>Password & Security</h5>
                                        <img src="{{ asset('assets/img/Rounded-Rectangle-3-copy-7.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-sm-12 col-12">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" name="old_password">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>New Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Repeat New Password</label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="btn btn-primary">
                                        SAVE CHANGES
                                    </button>
                                </div>
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
