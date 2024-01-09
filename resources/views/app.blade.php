<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETS</title>

    <link rel="icon" type="image/x-icon" href="img_pet/favicon.ico">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<header class="border-bottom-1 shadow py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <a href="{{route('home')}}" title="home" class="d-inline-block">
                        <h1>
                            <img src="/img_pets/logo.webp" alt="home" width="150">
                        </h1>
                    </a>
                </div>

                <div class="col-8">
                <nav class="d-flex gap-4 align-items-center justify-content-end">
                        <a href="{{route('home')}}">Home</a>
                        <a href="{{route('queroadotar')}}">Quero Adotar</a>
                        @auth
                        <a href="{{route('painel')}}" class="btn btn-custom">Admin</a>
                        @else
                        <a href="{{route('login.form')}}" class="btn btn-custom">Login</a>
                        @endauth
                    </nav>
                </div>
            </div>
        </div>
    </header>



        @yield('content')


    <section class="bg-custom py-3" style="background-color: #FFECCE;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-3">
                <div class="d-flex flex-column align-items-end">
                    <h2 class="bowlby-one text-uppercase h4 m-0">Alguma dúvida?</h2>

                    <a href="#" class="btn btn-custom">Entre em contato</a>
                </div>
                <img src="/img_pets/cartoon-cat-3.webp" alt="Gato" width="150">
            </div>
        </div>
    </section>

    <footer class="py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0">
                    Copyright © 2023. Todos os direitos reservados
                </p>

             
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>