<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Furbook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="page-header">
        @yield('header')
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @yield('content')
</div>
</body>
</html>
