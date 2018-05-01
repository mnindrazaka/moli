<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/vendors/mylogin/') }}bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/vendors/mylogin/') }}css/my-login.css">
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="{{ base_url('assets/vendors/mylogin/') }}img/logo.jpg">
                </div>
                @yield('content')
                <div class="footer">
                    Copyright &copy; 2018 &mdash; Moli
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ base_url('assets/vendors/mylogin/') }}js/jquery.min.js"></script>
<script src="{{ base_url('assets/vendors/mylogin/') }}bootstrap/js/bootstrap.min.js"></script>
<script src="{{ base_url('assets/vendors/mylogin/') }}js/my-login.js"></script>
</body>
</html>