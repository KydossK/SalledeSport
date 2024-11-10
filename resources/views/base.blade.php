<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUhlwthyGxIakBzOTe1H2LxTULIk0cl5w{{ config('services.google_maps.api_key') }}&callback=initMap" async defer></script>

</head>

<body>

<header>
    <div class="image-container" style="background-image: url('{{ asset('Img/Mountain Melody.png') }}');">
    </div>
</header>

<div class="menubarre">
    <img class="img-logo-menu" src="Img/logo-removebg.png" alt="LogoMenu">
    <span class="logo-text">Mountain Melody Gym</span>
    <a href="home" class="menu">Accueil</a>         
    <a href="cours" class="menu">Cours</a>        
    <a href="tarifs" class="menu">Tarifs</a>        
    <a href="contact" class="menu">Contact</a>
    <span class="joining">5 Bd Louis XIV, 59800 Lille<br>0 800 71 97 20</span>

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