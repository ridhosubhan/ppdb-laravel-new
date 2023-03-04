<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
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

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('LoginAssets/login.jpg') }});">
                    <span class="login100-form-title-1">
                        Register
                    </span>
                </div>

                <form class="login100-form validate-form" method="POST" action="{{ route('postRegister') }}">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-7" data-validate="Nama wajib diisi">
                        <span class="label-input100">Nama</span>
                        <input class="input100 @error('nama') is-invalid @enderror" type="text" name="nama"
                            placeholder="Nama Lengkap" id="nama" value="{{ old('nama') }}" autofocus required>
                    </div>
                    @error('nama')
                        <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                    @enderror
                    <div class="wrap-input100 validate-input m-b-7" data-validate="Email wajib diisi">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            placeholder="Email" id="email" value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <p style="color:red; font-style:italic; font-size:11px; margin-top:-5px">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            placeholder="Password" required>
                    </div>

                    <div class="container-login100-form-btn text-right">
                        <button type="submit" class="login100-form-btn"> Register </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
