## Mentions Légales Photos
Les images utilisées dans ce projet ont été entièrement générées par une intelligence artificielle.

Propriété des images : Les photos et illustrations présentes dans ce projet sont générées par des algorithmes d'IA et ne sont pas soumises aux droits d'auteur traditionnels.
Cependant, l'utilisation de ces images doit respecter les règles et conditions d'utilisation de la technologie ou de l'outil d'IA utilisé.

Licences et utilisation : Les images générées peuvent être soumises à des conditions d'utilisation spécifiques. Veuillez consulter les termes de la plateforme d'IA utilisée pour vous assurer d'une utilisation conforme.

Images générées par [ 'freepik.com' , 'fotor.com' ,  ].

Contact : Pour toute demande d'information complémentaire, veuillez contacter [adresse e-mail ou autre moyen de contact].

Merci de respecter ces règles et d'utiliser ces images de manière responsable.

## Processus création SalledeSport
Projet salle de Sport 

Création d'une base dans base.blade.php et son app.css
Création des pages dans dossier Views : x.blade.php 
Liens dans web.php pour chaque page views.

Mise en page rapide des pages Views pour differenciation par navigation (lorem)

Créa 'base.php' et 'app.css' 
recherche et ajout image / créa dossier img et mise en place direct des mentions (sinon oubli)

Cours : 
box -> 6 box (1:jour) -> texte -> Barre -> texte -> Img 
// Mise en place comportement adaptatif : 6/3/1 

--Creation Git --

tarifs :
box - large box 'adhesion' - en dessous 2 x2 box 'seance' 'seance 10' /sous 'abo' 'abo cours'

mentions légales:
generation mentions via IA 
mise en place css 
ajout box images / liens 

--Retour Css global 'app.css'--
mise en place couleurs, boutons etc
galére pour mettre les menu barre et footer en positions sticky mais OK 

--Git push--

--creation readme--

// reprise créa css  + créa des routes et controlleurs  ok 

créa redirection http://127.0.0.1:8000/home vers http://127.0.0.1:8000/(NO-HOME) ok 

Relecture du documents technique pour validation étapes et vritéres véaluation : 
etape 13  ajoutez le code console.log('Hello Laravel');   -> test et OK

npm run dev / php artisan serve -> OK ! 

Git push 

Modification Home Page pour media-queris OK 

Ajout d'une carte google Map 
creation d'une API google Et utilisation via script JS

Mise a Jour CSS totale : Identité du site revue pour coller a l'identité du club 
'Pregnant Healthy Gym' 'sunshine light' 

# [Doc Technique]

## Prérequis

- PHP 7.x
- MariaDB 15.x
- Apache 2.x
- Npm x.x / Vite 5.4.8
- Laravel 11.27.2

## Installation

```
git clone https://github.com/KydossK/SalledeSport
cd main

# adaptez les paramètres
echo "DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name" > .env.local
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Pour charger les données nécessaires au bon fonctionnement :

```
php bin/console doctrine:fixtures:load --group=prod
```

## Utilisation

Depuis la racine du projet, lancez un serveur web :

```
En utilisant la console : Npm run dev 
php Artisan serve
```

Puis ouvrez le lien [http://localhost:8000](http://localhost:8000).

- Accueil 
- Cours 
- Tarifs 
- Contact 

- Liens réseaux Sociaux 
- Mentions Légales


## Bugs

Bugs connus :

- Pas de bugs connus actuellement 


## Recommandations

Fonctionnalités qui devraient être implémentées :

- Ajout des liens vers les réseaux-sociaux de la salle de sport
- Mise en place d'un systéme de reservation en ligne de créneau horaires cours

- Possibilité d'acheter via le site les abonnements et séances.

## Mentions légales

Tout le code de ce repository est sous licence [GPL v3.0](https://www.gnu.org/licenses/gpl-3.0.html).

## Contact

Pour toute demande d'information, contactez pierre_ple@hotmail.com



# [Doc Technique Dev]
