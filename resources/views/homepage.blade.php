<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cerulean.css">
    <link rel="stylesheet" href="/css/homepage.css">
</head>
<body>
    
<!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">Cucina Dei Sogni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="/">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- hero -->

<div class="container my-5 hero">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="dysplay-1 my-2">Cucina Dei Sogni</h1>
            <p class="h3 my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia at saepe eaque.</p>

            <img class="img-fluid" src="/image/homepage.jpg" alt="">
        </div>
    </div>
</div>

<!-- Ricette -->

<div class="container my-5">
    <div class="row text-center">
        <div class="col-12 my-5">
            <h2>Le nostre Ricette</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ratione nostrum eius.</p>
        </div>
        >
        @foreach ($ricette as $ricetta)
        <div class="col-12 col-md 3">
            <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$ricetta['name']}}</h5>
                    <p class="card-text">E' un <a href="{{route('tipo.ricetta',['type'=>$ricetta['type']])}}"> {{$ricetta['type']}}</a></p>
                    <p class="card-text">{{$ricetta['min-desc']}}</p>
                    <a href="{{route('dettaglio.ricetta',['id'=>$ricetta['id']])}}" class="btn btn-primary">Vai alla ricetta</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>