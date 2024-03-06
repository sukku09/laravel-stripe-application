<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Stripe Payment
    </footer>
</body>
</html>

<style>
    footer {
        position: fixed;
        bottom: 0;
        right: 0;
        left: auto;
        width: 100%;
        background-color: #f8f9fa;
        padding: 10px;
        text-align: right;
    }
</style>
