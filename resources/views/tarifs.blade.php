@vite(['resources/css/tarifs.css', 'resources/js/foo.js'])
@extends('base')
@section('content')


<div class="tarifs">
    <div class="asso-box"> 

        <div class="assotarif"> 
            <h2>Adhésion Annuelle <br>à l'Associtation :</h2>
            <p>15 euros <br>(Obligatoire)</p>
        </div>
    </div>
    <div class="asso-box">
    <div class="seance-container">

         <div class="seances">
            <h2>Seance</h2>
            <p>10 euros</p>
       </div>
       <div class="seances">
            <h2>10 Seances</h2>
            <p>90 euros</p>
       </div>
    </div>

    <div class="abo-container">

        <div class="abo">
            <h2>abonnement mensuel <br> sans cours</h2>
            <p>30 euros</p>
       </div>
       <div class="abo">
        <h2>abonnement mensuel<br> avec cours</h2>
        <p>60 euros</p>
   </div>
    </div>
</div>

</div>

@endsection

