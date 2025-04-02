<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">
    <style>
        .top-bar {
            background-color: #343a40;
            height: 50px;
        }
        .nav-bar {
            background-color: white;
            padding: 20px 0;
        }
        .logo img {
            height: 80px;
            margin-left:150px;
            margin-right: 120px;
        }
        .nav-container {
            display: flex;
            align-items: center;
            gap: 100px; 
        }
        .logo {
            flex-shrink: 0;
        }
        nav {
            flex-grow: 1;
        }
        .nav ul {
            font-size: 40px;
            display: flex;
            gap: 15px;
            justify-content: flex-start;
        }
        .nav-link {
            color: #000;
            font-weight: 500;
        }
        .nav-link:hover {
            color: rgb(119, 0, 0);
        }
        .wave-section {
            position: relative;
            background-color: rgb(119, 0, 0);
            color: white;
            padding: 100px 0;
        }
        .wave-section::after {
            content: "";
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('https://www.svgrepo.com/show/208086/wave.svg') repeat-x;
            background-size: cover;
        }
        .content-section {
            background-color: white;
            padding: 100px 0;
        }
        .carousel-container {
            max-width: 1000px; 
            margin: 0 auto; 
        }
        .carousel-inner img {
            height: 450px; 
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="top-bar"></div>
<header class="nav-bar">
    <div class="container nav-container">
        <a href="={{ route('home') }}" class="logo">
            <img src="{{ asset('img/etec_zona_leste.png') }}">
        </a>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cursos') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('departamento') }}">Departamento</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="9000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/carrossel1.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/carrossel2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<br><br><br>

<section class="wave-section">
    <div class="container text-center">
        <h2>Seção Vermelha</h2>
        <p>Infos</p>
    </div>
</section>

<section class="content-section">
    <div class="container text-center">
        <h2>Seção Branca</h2>
        <p>Infos.</p>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
