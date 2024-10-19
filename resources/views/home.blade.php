@vite(['resources/css/home.css', 'resources/js/foo.js'])
@extends('base')
@section('content')


<div class="background-image-container" style="background-image: url('{{ asset('img/pexels-lili.jpg') }}');">
    <div>
        <div class="right-text">
            <h2>Mountain Melody Gym :</h2> <h3> Votre Espace Bien-être pour la Grossesse et l'Après-accouchement</h3>
            <p>Chez [Mountain Melody Gym], nous comprenons les besoins spécifiques des futures mamans. Notre salle de sport est spécialement conçue pour accompagner les femmes enceintes dans chaque étape de leur parcours, avant et après l'accouchement.</p>
        </div>
        <div class="left-white-box">
           <h2> Avant l'accouchement :</h2>
            <p>  <br>Préparez votre corps et votre esprit
               <br> Nos instructeurs spécialisés vous accompagnent avec des exercices sécurisés, adaptés à chaque trimestre de votre grossesse.</p>
        </div>
    </div>
</div>

<div class="background-image-container" style="background-image: url('{{ asset('img/imggnr.jpg') }}');">
    <div class="long-white-box">
        <h2>Aprés l'accouchement :</h2> <br>
        <p> Nous comprenons les besoins spécifiques des futures mamans. Notre salle de sport est spécialement conçue pour accompagner les femmes enceintes dans chaque étape de leur parcours, avant et après l'accouchement. Nos cours et programmes sont pensés pour vous aider à rester en forme, à améliorer votre bien-être mental et physique, et à vous préparer en douceur pour le jour de l'accouchement.</p><br>
    </div>
</div>

<!-- Ajoute la long-white-box ici, en dehors des sections -->


@endsection