<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('logo-removebg.png') }}" type="image/png">

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
    <span class="joining">5 Bd Louis XIV, 59800 Lille<br>06 00 00 00 00</span>

</div>


    @section('content')
    @show

<footer>
    <div class="footer-content">
         <ul class="social-links">
                <li><a class="links" href="https://www.facebook.com/FormationsCnamLille/?locale=fr_FR" target="_blank">Facebook</a></li>
                <li><a class="links" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                <li><a class="links" href="https://www.tiktok.com/fr/" target="_blank">TikTok</a></li>
        </ul>
            <a href="mentionslegales" class="mentions" target="_blank">Mentions légales</a>
     </div>
 </footer>
    


</body>
</html>