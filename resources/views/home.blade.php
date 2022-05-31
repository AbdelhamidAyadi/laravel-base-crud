<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <script src=" {{ asset('js/app.js') }} "></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <ul class="nav nav-pills m-3 justify-content-center">
        <li class="nav-item">
          <a class="nav-link bg-primary text-white " aria-current="page" href="#">Add new comic</a>
        </li>
      </ul>
    <div class="container d-flex flex-wrap ">
        @forelse ($comics as $comic)

        <div class="card m-5" style="width: 18rem;">
            <img src="{{ $comic -> thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic -> title }}</h5>
                <p class="card-text">{{ $comic -> description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $comic -> price }}</li>
                <li class="list-group-item">{{ $comic -> series }}</li>
                <li class="list-group-item">{{ $comic -> sale_date }}</li>
                <li class="list-group-item">{{ $comic -> type }}</li>

            </ul>
            <div class="card-body">
                <a href="{{ route('comics.show' , $comic->id) }}" class="card-link">Show more</a>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</body>

</html>
