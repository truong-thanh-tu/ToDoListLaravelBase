<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Truong Thanh Tu - ToDo List</title>
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/all.css') }}">
</head>
<body>
    <div class="container">
        <nav class ="navbar navbar-defaul">
            {{--Navbar Content--}}
        </nav>
        @yield('content');
    </div>
    <script src="{{ asset('js\app.js') }}"></script>
</body>
</html>
