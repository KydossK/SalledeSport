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
        <h1 class="gym-name">Mountain Melody Gym</h1>
    </div>
</header>

<div class="menubarre">
    <a href="home" class="menu">home</a>         
    <a href="cours" class="menu">cours</a>        
    <a href="tarifs" class="menu">tarifs</a>        
    <a href="contact" class="menu">contact</a>
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
            <a href="mentions" class="mentions">Mentions légales</a>
        </div>
 </footer>


</body>
</html>