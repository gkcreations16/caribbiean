<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CARIBBEANS-CONNECTOCAR</title>
</head>

<body>
    <div class="login-sign-up-wrap">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-md-block d-none ps-0" Style="height: 100vh">
                    <div class="wordbest-market card border-0 text-white">
                        <div class="card-img-overlay">
                            <div class="login-logon">
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/img/Layer-14-yycopy.png') }}" class="img-fluid"></a>
                            </div>
                            <h1 class="card-title">World's Biggest
                                Marketplace</h1>
                            <p class="card-text">Reference site about Lorem Ipsum, giving information
                                on its origins,Ipsum, giving information
                                on its origins,</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 ps-0">
                    <div class="login-sig-detailer card border-0 text-white text-center">
                        <div class="card-img-overlays">
                            <div class="welcome">
                                <h2>Welcome !</h2>
                                <p>Forgot Password ?</p>
                            </div>
                            <div class="login-inputer">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form class="row g-3" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="passworderr" Style="margin-top: 50px;">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Enter Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="passworder-icon"><span><i class="fas fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary d-block "
                                            Style="margin-top: 20px; margin-left: 150px;">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <div class="sign-up-stage">
                                            <p>Want to Login again? click on the<br>
                                                <a href="{{ route('login') }}">(Log In )</a> button above.
                                            </p>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-12 ps-0">
                    <div class="login-sig-detailer card border-0 text-white text-center">
                        <div class="card-img-overlays">
                            <div class="welcome">
                                <h2>Welcome !</h2>
                                <p>Forget Password</p>
                            </div>
                         <h1>my testiii</h1>
                            <div class="orBlock">OR</div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Reset Password') }}</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Send Password Reset Link') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <fieldset class="login-separator hr-line">
                                <legend align="center">OR</legend>
                            </fieldset> -->
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

</body>

</html>
