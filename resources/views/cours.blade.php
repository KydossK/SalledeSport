@vite(['resources/css/cours.css', 'resources/js/foo.js'])
@extends('base')
@section('content')

<div class="background-image" style="background-image: url('{{ asset('Img/women-doing-gym.jpg') }}');">
<div class="semaine">
    <div class="jour">
        <h2>Lundi</h2>
        <div class="barre"></div>
        <p>19h à 21h </p>
        <h5>Zumba</h5>
        <img class='sticker' src="Img\dance.png" alt="zumba">
    </div>
    <div class="jour">
        <h2>Mardi</h2>
        <div class="barre"></div>
        <p>19h30 à 21h30</p>
        <h5> Pilate</h5>
        <img class='sticker' src="Img\pilate.png" alt="pilate">
    </div>
    <div class="jour">
        <h2>Mercredi</h2>
        <div class="barre"></div>
        <p>Pas de cours</p>
    </div>
    <div class="jour">
        <h2>Jeudi</h2>
        <div class="barre"></div>
        <p>20h à 22h</p>
        <h5>Boxe Anglaise</h5>
        <img class='sticker' src="Img\boxe.png" alt="boxe">
    </div>
    <div class="jour">
        <h2>Vendredi</h2>
        <div class="barre"></div>
        <p>20h à 22h</p>
        <h5>HIIT</h5>
        <img class='sticker' src="Img\hiit.png" alt="hiit">
    </div>
    <div class="jour">
        <h2>Samedi</h2>
        <div class="barre"></div>
        <p>9h à 11h</p>
        <h5>Yoga</h5>
        <img class='sticker' src="Img\yoga.png" alt="yoga">
    </div>
</div>
</div>

@endsection

