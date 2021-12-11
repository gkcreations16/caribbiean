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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>CARIBBEANS-CONNECTOCAR</title>
</head>

<body>
    <div class="login-sign-up-wrap">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-md-block d-none ps-0">
                    <div class="wordbest-market card border-0 text-white">
                        <div class="card-img-overlay">
                            <div class="login-logon">
                                <a href="index.html"><img src="{{ asset('assets/img/Layer-14-yycopy.png') }}"
                                        class="img-fluid"></a>
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
                                <p>Sign In To Caribbean Connector</p>
                            </div>
                            <div class="login-other-ways d-flex justify-content-between">
                                <a href="{{ url('/login/google') }}" class="btn btn-primary"><span
                                        class="pe-2"><img src="{{ asset('assets/img/Layer-4.png') }}"
                                            class="img-fluid"></span>Continue With
                                    Google</span></a>
                                <a href="#" class="btn btn-primary"><span class="pe-2"><img
                                            src="{{ asset('assets/img/Layer-5.png') }}"
                                            class="img-fluid"></span>Continue With
                                    Facebook</span></a>
                            </div>
                            <div class="orBlock">OR</div>
                            <div class="login-inputer">
                                <form class="row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="passworderr">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Enter Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="passworder-icon"><span><i class="fas fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="passworderr">
                                            <input id="passworder" placeholder="Password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="passworder-icon"><span><i class="fa fa-lock"
                                                        aria-hidden="true"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="remain-forgeter d-flex justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <div class="forget-password">
                                                @if (Route::has('password.request'))
                                                    <a class="btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Password ?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary d-block w-100">
                                            {{ __('SIGN IN') }}
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <div class="sign-up-stage">
                                            <p>Don't have an account? click on the<br>
                                                <a href="{{ route('register') }}">(Sign Up )</a> button above.
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- <fieldset class="login-separator hr-line">
                                <legend align="center">OR</legend>
                            </fieldset> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('assets/js/custome.js') }}"></script>
</body>

</html>
