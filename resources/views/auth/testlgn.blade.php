<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="shortcut icon" href="../dist/assets/compiled/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../dist/assets/compiled/css/app.css" />
    <link rel="stylesheet" href="../dist/assets/compiled/css/auth.css" />
</head>

<body style="background-color: #f2f7ff;">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row p-5" style="border: 5px solid #16537e; border-radius: 20px; background-color: #f2f7ff;">
            <div class="col">
                <div class="auth-logo d-flex justify-content-center">
                    <a href="/"><img src="../dist/assets/compiled/img/AE.png" style="width: 100px; height: 100px"
                            alt="Logo" /></a>
                </div>
                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Log in with your data provided.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email" class="col-md col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <!-- <input type="text" class="form-control form-control-xl" placeholder="Username"
                            name="input-username" id="input-username" /> -->

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            class="form-control form-control-xl" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <p id="help-id-login" class="text-danger mt-2"></p>
                    </div>
                    <!-- <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> -->

                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="form-group position-relative has-icon-left mb-2">

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" class="form-control form-control-xl" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <p id="help-password-login" class="text-danger mt-2"></p>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" onclick="login()">
                        Log in
                    </button>

                    <!-- <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> -->
                    <!-- 
                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div> -->
                </form>


                <!-- <div class="form-group position-relative has-icon-left mb-4">
          <input type="text" class="form-control form-control-xl" placeholder="Username" name="input-username"
            id="input-username" />
          <div class="form-control-icon">
            <i class="bi bi-person"></i>
          </div>
          <p id="help-id-login" class="text-danger mt-2"></p>
        </div>
        <div class="form-group position-relative has-icon-left mb-2">
          <input type="password" class="form-control form-control-xl" placeholder="Password" name="input-password"
            id="input-password" />
          <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
          </div>
          <p id="help-password-login" class="text-danger mt-2"></p>

        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" onclick="login()">
          Log in
        </button> -->
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="../dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="../dist/assets/compiled/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function login() {
            let username = $("#input-username").val();
            let password = $("#input-password").val();

            if (username === "") {
                $("#help-id-login").text("Please input your username.");
                $("#input-username").focus();
                return;
            }

            if (password === "") {
                $("#help-password-login").text("Please input your password.");
                $("#input-password").focus();
                return;
            }
            $.ajax({
                type: "POST",
                url: "/sign_in",
                data: {
                    username_give: username,
                    password_give: password,
                },
                success: function (response) {
                    if (response["result"] === "success") {
                        $.cookie("mytoken", response["token"], { path: "/" });
                        window.location.replace("/");
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: response["msg"],
                        });
                    }
                }
            });
        }
    </script>


</body>

</html>