<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <div class="image-container">
        <img class='bandeau' src="{{ asset('Img/imgbandeau.jpg')}}" alt="Bandeau">
        <h1 class="salle-name">Mountain Melody Gym</h1>
    </div>
</header>

<div class="menubarre">
    <img class="img-logo-menu" src="Img/logo-removebg.png" alt="LogoMenu">
    <span class="logo-text">Mountain Melody Gym</span>
    <a href="home" class="menu">Accueil</a>         
    <a href="cours" class="menu">Cours</a>        
    <a href="tarifs" class="menu">Tarifs</a>        
    <a href="contact" class="menu">Contact</a>
</div>


    @section('content')
    @show

<footer>
        <div class="footer-content">
            <ul class="social-links">
                <li><a class="links" href="#">Facebook</a></li>
                <li><a class="links" href="#">Instagram</a></li>
                <li><a class="links" href="#">TikTok</a></li>
            </ul>
            <a href="mentionslegales" class="mentions">Mentions légales</a>
        </div>
 </footer>


</body>
</html>