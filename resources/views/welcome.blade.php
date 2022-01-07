<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Curso_Mobile_Web</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastrar-se</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ajuda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Imagem com legenda -->
    <figure class="imgage">
        <img src="/img/site.jpg" alt="Banner" title="imagem" style="height: 500px; width: 100%" />
        <figcaption> Site ainda em construçao</figcaption>
    </figure>
    <!-- Rodapé:-->
    <footer> Curso de mobile e web &copy; 2022</footer>
</body>

</html>