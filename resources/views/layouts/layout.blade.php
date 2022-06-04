<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <script src=" {{ asset('js/app.js') }} "></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics:@yield('title')</title>
</head>

<body>
    <ul class="nav nav-pills m-3 justify-content-center">
        <li class="nav-item">
            <a class="nav-link bg-primary text-white " aria-current="page" href="{{ route('comics.create') }}"><i class="fa-solid fa-circle-plus mx-1"></i>ADD NEW COMIC</a>
        </li>
    </ul>
    
    @yield('content')
</body>

</html>