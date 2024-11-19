@vite(['resources/css/cours.css', 'resources/js/foo.js'])
@extends('base')
@section('content')

<div class="background-image" style="background-image: url('{{ asset('Img/women-doing-gym.jpg') }}');">
    <div class="background-image-secondary" style="background-image: url('{{ asset('Img/fitness-back2.png') }}');"></div>
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

    <section class="prenatal-info">
        <h2>Nos cours prénatals : Un accompagnement bien-être</h2>
        <p>Chez Mountain Melody Gym, chaque cours est pensé pour accompagner les futures mamans tout en douceur. Nos exercices prénatals sont conçus pour renforcer le corps, favoriser le bien-être et vous préparer sereinement à l'arrivée de bébé. Profitez d'un espace chaleureux et accueillant où nous prenons soin de vous et de votre futur petit bout de chou !</p>
    </section>

</div>



@endsection

