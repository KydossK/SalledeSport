@vite(['resources/css/contact.css', 'resources/js/foo.js'])
@extends('base')
@section('content')

<div class="background-image-container" style="background-image: url('{{ asset('img/imggnr.jpg') }}');">
<div class="contact-form-container">
    <h2>Contactez-nous</h2>

<!-- Normalement içi le : action=route(contact.submit) method=Post -->
<!--ici une " @-csrf ", mais je sais pas pk encore -->

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


@endsection

