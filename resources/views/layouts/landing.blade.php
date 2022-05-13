<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="../css/landing.css" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Misiones Rurales</title>
</head>
<body>
    <header>
        <nav class="container-fluid  fixed-top navbar-expand-lg navbar-light bg-light">
		
            <div class="row">
          
              <div class="col-6 col-align-self-start">
              <img class="m-2" id="logo" src="wp-content\themes\misiones\imgs\logo_sabor.png" alt="Misiones Rurales logo">
              </div>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                  </button>		 	
    <div class="col-6 collapse navbar-collapse" id="navbarNav">
    
    <ul class="navbar-nav mx-auto">
    
    <li class="nav-item">
    <a class="nav-link mynavlink" href="#">Nosotros</a>
    </li>
    <li class="nav-item">
    <a class="nav-link mynavlink" href="#">¿Por que lo hacemos?</a>
    </li>
    <li class="nav-item">
    <a class="nav-link mynavlink" href="#">Programa</a>
    </li>
    <li class="nav-item">
    <a class="nav-link mynavlink" href="#">Tu entrada</a>
    </li>
    <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
    </ul>   
    </div>
    </div>
    </div>
    </nav>
    </header> 
    @yield('content')   
</body>
</html>