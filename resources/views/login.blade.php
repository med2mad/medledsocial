<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medled social, login</title>
    <link rel="icon" href="/assets/compiled/png/favicon.png" type="image/png">
    <link rel="stylesheet" href="/assets/compiled/css/app.css">
    <link rel="stylesheet" href="/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="/assets/compiled/css/auth.css">
    <style>
        .auth-left{
            padding-top: 0 !important;
        }
        .auth-logo{
            margin-bottom: 1rem !important;
            text-align: center;
        }
        .auth-logo img{
            height: 3rem !important;
        }
    </style>
</head>

<body>
    <script src="/assets/static/js/initTheme.js"></script>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"><img src="/assets/static/images/logo/logo.png" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>

            <form action="/login" method="post">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="profilname" type="text" class="form-control form-control-xl" placeholder="username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input name="profilpass" type="password" class="form-control form-control-xl" placeholder="password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Don't have an account? <a href="/page/create_user" class="font-bold">Sign up</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>