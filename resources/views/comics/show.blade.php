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
    <div class="container d-flex justify-content-center my-5">   

        <div class="card w-50 " >
            <img src="{{ $comic -> thumb }}" class="card-img-bottom"  style="height: 40vw;"   alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comic -> title }}</h5>
              <p class="card-text">{{ $comic -> description }}</p>
              <p class="card-text">{{ $comic -> price }}</p>
              <p class="card-text">{{ $comic -> series }}</p>
              <p class="card-text">{{ $comic -> sale_date }}</p>
              <p class="card-text">{{ $comic -> type }}</p>

              
            </div>
            
          </div>
    </div>
</body>

</html>
