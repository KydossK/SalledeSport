@vite(['resources/css/contact.css', 'resources/js/foo.js'])
@extends('base')
@section('content')


<div class="background-image-container" style="background-image: url('{{ asset('img/imggnr.jpg') }}');">
    <div class="form-and-contact-container">
        <!-- Formulaire à gauche -->


        <div class="left-side-container">
            <!-- Contact Box -->
            <div id="contact-box">
                <h2>Mountain Melody Gym</h2>
                <p>5 Bd Louis XIV, 59800 Lille<br>
                    <br>06 00 00 00 00</p>
            </div>

            <!-- Carte sous la contact-box -->
            <div id="map" style="height: 300px; width: 100%;"></div>
        </div>

        <div class="contact-form-container">
            <h2>Contactez-nous</h2>


                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
        </div>

    </div>
</div>



@endsection

<script>
    function initMap() {
        // Crée une nouvelle carte centrée sur l'emplacement choisi (par exemple, latitude et longitude)
        var location = { lat: 50.6286415, lng: 3.0709620 }; // Remplace par les coordonnées de ton emplacement

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,  // Niveau de zoom
            center: location,  // Position initiale
        });

        // Ajouter un marqueur à l'emplacement
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: 'Mountain melody Gym',  // Titre du marqueur
        });
    }
</script>