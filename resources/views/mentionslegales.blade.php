@vite(['resources/css/mentions.css', 'resources/js/foo.js'])
@extends('base')
@section('content')


<h4>Mentions légales</h4>

<div class="mentionslegales">
    <ol> 
        <li><h5>Informations légales</h5>
            Nom de la société : [Nom de la salle de sport] <br>
            Forme juridique : [Forme juridique de l'entreprise, ex : SARL, SAS, etc.] <br>
            Capital social : [Capital social en euros] <br>
            Siège social : [Adresse complète] <br>
            RCS : [Numéro d'immatriculation au Registre du Commerce et des Sociétés] <br>
            Numéro de TVA intracommunautaire : [Numéro de TVA] <br>
            Responsable de la publication : [Nom du responsable] <br>
            Contact : [Adresse e-mail et/ou téléphone] <br>
        </li>
        <li><h5>Hébergement du site</h5>
            Hébergeur : [Nom de l'hébergeur] <br>
            Adresse de l'hébergeur : [Adresse complète de l'hébergeur] <br>
            Téléphone : [Numéro de contact de l'hébergeur] <br>
            Site web : [Lien vers le site de l'hébergeur] <br>
        </li>
        <li><h5>Objet du site</h5>
            Le site internet [Nom du site] a pour objet de fournir des informations sur les activités de [Nom de la salle de sport],<br>
             notamment les horaires des cours, les tarifs, et les offres d'abonnement. <br>
            <br>
            Aucun paiement en ligne ou prise de rendez-vous de cours n'est possible via ce site. <br>
            Les cours peuvent être réservés directement au sein de la salle de sport.
        </li>
        <li><h5>Offres et tarifs</h5>
            La salle de sport propose : <br>
            <br>
            <ul>Des cours de sport tarifés à l'unité ou en packs de 10 cours. <br>
            <br>Deux types d'abonnement mensuels :
            <li>Abonnement avec cours : Incluant l'accès à la salle ainsi qu'à un certain nombre de cours de sport. </li>
            <li>Abonnement sans cours : Incluant uniquement l'accès à la salle de sport.</li> <br>
            Les tarifs et horaires des cours sont consultables directement sur le site, mais les réservations et paiements se font uniquement sur place.
        </ul>
        </li>
        <li><h5>Propriété intellectuelle</h5>
            L'ensemble des éléments présents sur ce site (textes, images, logos, vidéos, graphismes, etc.) sont protégés par le droit de la propriété intellectuelle et appartiennent à [Nom de la salle de sport] <br>
            ou à leurs auteurs respectifs. Toute reproduction, représentation, modification, publication, ou adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, <br>
            sauf autorisation écrite préalable de [Nom de la salle de sport].<br>
            <br>Les images utilisées sur le site proviennent de générateurs d'images libres de droits. Pour plus d'informations, vous pouvez consulter les mentions spécifiques relatives aux images en bas de page.
        </li>
        <li><h5>Protection des données personnelles</h5>
            Aucune donnée personnelle n'est collectée via ce site. <br>
            Si vous souhaitez nous contacter pour toute question ou réservation, merci de vous adresser directement à la salle de sport via les moyens de communication indiqués sur le site.
        </li>
        <li><h5>Liens hypertextes et cookies</h5>
            Le site [Nom du site] peut contenir des liens hypertextes vers d'autres sites. <br>
            Cependant, [Nom de la salle de sport] n'assume aucune responsabilité quant au contenu ou à la politique de confidentialité de ces sites tiers.
        </li>
        <li><h5>Limitation de responsabilité</h5>
            [Nom de la salle de sport] s'efforce de fournir des informations exactes et mises à jour. Cependant, nous ne pouvons garantir l'exactitude, l'exhaustivité ou l'actualité des informations présentées sur ce site. <br>
            [Nom de la salle de sport] ne saurait être tenu responsable des erreurs ou omissions, ni des dommages directs ou indirects résultant de l'utilisation de ce site.
        </li>
        <li><h5>Droit applicable et juridiction compétente</h5>
            Les présentes mentions légales sont soumises à la loi française. En cas de litige relatif à l'utilisation du site, les tribunaux compétents seront ceux du ressort du siège social de [Nom de la salle de sport].
        </li>
        <li><h5> Contact</h5>
            Pour toute question relative aux mentions légales, vous pouvez nous contacter à l'adresse suivante : [Adresse e-mail de contact].
        </li>
    </ol>
</div>

<!-- links -->
<div class='mentionsphotos'>
<p>Toutes les images utilisées sur ce site sont la propriété de leurs auteurs respectifs et sont utilisées avec autorisation.</p>
    <a href="https://fr.freepik.com/auteur/freepik/icones/detailed-flat-circular-flat_44">Icône de Freepik</a> <br>
    <a href="https://fotor.com/images/create">Images de Fotor</a> <br>
    <a href="https://openai.com/index/dall-e-3/">Images générées par DALL-E</a>
</div>



@endsection

