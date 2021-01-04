<!DOCTYPE html>
<html lang="en">

<head>
    <title>BLUU TECH</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("APOTEk2.ico")}}">

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset("fonts/fontawesome/css/fontawesome-all.min.css")}}">

    <!-- animation css -->
    <link rel="stylesheet" href="{{asset("plugins/animation/css/animate.min.css")}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset("css/style_2.css")}}">


</head>

<body>
<div class="auth-wrapper">
    <div class="auth-content">

        <div class="card">
            <div class="card-body text-center">

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>

                    <h3 class="mb-4">Login</h3>

                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required placeholder="Email" autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="input-group mb-4">
                        <input id="password" type="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                               autocomplete="current-password" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary shadow-2 mb-4">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))

                        <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}">Reset</a>
                        </p>

                    @endif

                </form>

            </div>
        </div>
    </div>
</div>

<!-- Required Js -->
{{--<script src="{{asset("js/vendor-all.min.js")}}"></script>--}}
{{--<script src="{{asset("plugins/bootstrap/js/bootstrap.min.js")}}"></script>--}}
{{--<script src="{{asset("js/pcoded.min.js")}}"></script>--}}


</body>
</html>
