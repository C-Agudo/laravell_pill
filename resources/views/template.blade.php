<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>
    @section('header')
    <header>
        <img src="https://desarrolloweb.com/storage/tag_images/actual/7sY8a8whbcQcFvkV3nQGiCjXYITUgdLALYqlFzmM.png">
        <h1>Laravel Pill</h1>
        <img src="https://i0.wp.com/webirix.com/wp-content/uploads/2014/05/elephpant.png?fit=397%2C255&ssl=1">
    </header>
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('footer')
    <footer>
        &copy; 2020 Carlos Agudo Batista
    </footer>
    @show
</body>

</html>