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

<body style="background-color: black;">
    <div class="container text-white d-flex justify-content-center align-items-center vh-100">
        <div class="row p-5" style="border: 5px solid red; border-radius: 20px; background-color: black;">
            <div class="col">
                <div class="auth-logo d-flex justify-content-center">
                    <a href="/"><img src="/dist/assets/img/lucas-sh-partners-logo-white-01.png" style="width: 368px"
                            alt="Logo" /></a>
                </div>
                <h1 class="auth-title text-white mt-3">Log in.</h1>
                <p class="auth-subtitle mb-3">Log in with your data provided.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email" class="">{{ __('Email Address') }}</label>
                    <div class="form-group position-relative has-icon-left mb-4">
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

                    <label for="password" class="">{{ __('Password') }}</label>
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
                    <button style="background-color:red" class="btn btn-block btn-lg text-white shadow-lg mt-3" onclick="login()">
                        Log in
                    </button>
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
    document.addEventListener('DOMContentLoaded', () => {
    const theme = localStorage.getItem('theme');
    
    if (theme === 'dark') {
        document.body.classList.add('dark-theme');
        const toggleDarkMode = document.getElementById('toggle-dark');
        if (toggleDarkMode) {
            toggleDarkMode.checked = true;
        }
    } else {
        document.body.classList.add('dark-theme');
        const toggleDarkMode = document.getElementById('toggle-dark');
        if (toggleDarkMode) {
            toggleDarkMode.checked = true;
        }
        // Simpan pengaturan tema gelap ke localStorage
        localStorage.setItem('theme', 'dark');
    }
    
    const toggleDarkMode = document.getElementById('toggle-dark');
    if (toggleDarkMode) {
        toggleDarkMode.addEventListener('change', (event) => {
            if (event.target.checked) {
                document.body.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
            } else {
                document.body.classList.remove('dark-theme');
                localStorage.setItem('theme', 'light');
            }
        });
    }
});

</script>

</body>

</html>