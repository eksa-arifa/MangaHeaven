<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangaHeaven | {{$title}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav>
        <div class="title">
            MangaHeaven
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="bacodan">Dibuat oleh</div> <a href="https://github.com/eksa-arifa">EksaDev</a> <span>Thanks for visiting</span>
    </footer>
</body>
</html>