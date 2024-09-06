<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- nav --}}
{{-- nav --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("welcome")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('indiceArticoli')}}">Indice Articoli</a>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>
{{-- nav end --}}
    {{-- nav end --}}
    {{-- card article --}}
    <div class="container mt-4">
        <div class="row">
            @foreach($articoli as $articolo)
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 15rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="foto articolo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                            <p class="card-text">{{ Str::limit($articolo['contenuto'], 100) }}</p>
                            <a href="{{ route('Dettagli', ['article' => $articolo['id']]) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- card article end --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
