<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center">MOVIES</h1>
    <div class="d-flex flex-row gap-4 flex-wrap align-items-center justify-content-center">
        @foreach ($movies as $movie)
          <div class="card" style="width: 18rem;height: 20rem;">
            <div class="card-body d-flex align-items-center flex-column justify-content-center bg-light">
            <h3 class="card-title text-center">{{ $movie['title'] }}</h3>
            <h5 class="card-text">{{ $movie['original_title'] }}</h5>
            <p class="card-text">{{ $movie['nationality']}}</p>
            <p class="card-text">{{ $movie['date']}}</p>
            <p class="card-text">{{ $movie['vote']}}</p>
            </div>
        </div>
            
        @endforeach
    </div>
</body>
</html>