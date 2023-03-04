<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('LoginAssets/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('LoginAssets/css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('LoginAssets/css/main.css') }}">
    <!--===============================================================================================-->

    <style>
        .alert {
            padding: 20px;
            background-color: #57b846;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('LoginAssets/login.jpg') }});">
                    <span class="login100-form-title-1">
                        LOG IN
                    </span>
                </div>
                <form class="login100-form validate-form" method="POST" action="{{ route('postLogin') }}">
                    @if ($message = Session::get('sukses'))
                        <div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <strong>Sukses!</strong> {{ $message }}
                        </div>
                    @endif

                    @csrf
                    <div class="wrap-input100 validate-input m-b-7" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            placeholder="Enter your email" id="email" value="{{ old('email') }}" autofocus
                            required>
                    </div>
                    @error('email')
                        <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            placeholder="Enter password" required>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn"> Login </button>
                    </div>

                    <p>belum punya akun?<a href="{{ url('/register') }}">Register </a> terlebih dahulu</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
