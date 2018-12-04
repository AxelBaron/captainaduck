<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captain A. Duck</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="header">
    <div class="header__bg"></div>
    <div class="header__sticky">
        <a class="header__logo">
            <img src="img/logo.png" alt="logo">
        </a><!--/.header__logo-->
    </div>
    <nav class="menu">
        <div class="menu__bg"></div>
        <div class="menu__trigger">
            <div class="burger"></div>
            <div class="menu__trigger__text">Menu</div>
        </div>
        <div class="menu__content">
            <a id="news" class="menu__item" href="#target-news">News</a>
            <a id="dates" class="menu__item" href="#target-dates">Tour dates</a>
            <a id="about" class="menu__item" href="#target-about">Bio</a>
            <a id="contact" class="menu__item" href="#target-contact">Contact</a>
            <a class="menu__item menu__item--mobile" href="https://www.facebook.com/CaptainADuck/" target="_blank">Facebook</a>
            <a class="menu__item menu__item--mobile" href="https://www.instagram.com/captainaduck/" target="_blank">Instagram</a>
            <a class="menu__item menu__item--mobile" href="https://www.youtube.com/channel/UCE09YOLuTg-M57AJn0yKCng" target="_blank">Youtube</a>
            <a class="menu__item menu__item--mobile" href="https://twitter.com/captainaduck" target="_blank">Twitter</a>
            <a class="menu__item menu__item--mobile" href="https://www.snapchat.com/add/captainaduck" target="_blank">Snapchat</a>
        </div>
    </nav><!--/.menu-->

    <div class="social-media">
        <a class="social-media__item social-media__item--facebook" href="https://www.facebook.com/CaptainADuck/" target="_blank">
            <i class="icon icon-facebook"></i>
        </a>
        <a class="social-media__item social-media__item--instagram" href="https://www.instagram.com/captainaduck/" target="_blank">
            <i class="icon icon-instagram-logo"></i>
        </a>
        <a class="social-media__item social-media__item--youtube" href="https://www.youtube.com/channel/UCE09YOLuTg-M57AJn0yKCng" target="_blank">
            <i class="icon icon-youtube"></i>
        </a>
        <a class="social-media__item social-media__item--twitter" href="https://twitter.com/captainaduck" target="_blank">
            <i class="icon icon-twitter"></i>
        </a>
        <a class="social-media__item social-media__item--snapchat" href="https://www.snapchat.com/add/captainaduck" target="_blank">
            <i class="icon icon-snapchat"></i>
        </a>
    </div><!--/.social-media-->
</div><!--/.header-->
<div class="banner">
    <div class="logo">
        <img src="img/logo.png" alt="logo captain a. duck">
    </div>
    <div class="banner__boat">
        <img src="img/boat.png" alt="bateau">
    </div>
</div><!--/.banner-->
<article class="wrapper" id="target-news">
    <h2 class="title title--first">Nouvel Album</h2>
    <div class="player">
        <div class="player__visual">
            <div class="player__cover">
                <img src="img/cover.jpg" alt="cover">
            </div>
            <div class="player__record">
                <img src="img/record.png" alt="record">
            </div>
        </div><!--/.player-->
        <iframe
                src="https://open.spotify.com/embed/album/0azwYbDZAyqaP0yaekHGbD"
                frameborder="0" allowtransparency="true"
                allow="encrypted-media">

        </iframe>
    </div>
</article><!--/.wrapper-->

<article class="wrapper" id="target-dates">
    <h2 class="title">Tour dates</h2>
    <div class="tour">
        <img src="img/band.png" alt="band">
        <div class="tour__wrapper">
            <div class="tour__item">
                <div class="tour__img">
                    <img src="img/picto-boat.png" alt="picto boat">
                </div>
                <div class="tour__content">
                    <div class="tour__date">
                        26 janvier 2018
                    </div>
                    <div class="tour__place">
                        Paris (75) - L'improvibar
                    </div>
                </div>
            </div><!--/.tour__item-->
            <div class="tour__item">
                <div class="tour__img">
                    <img src="img/picto-boat.png" alt="picto boat">
                </div>
                <div class="tour__content">
                    <div class="tour__date">
                        7 Fevrier 2018
                    </div>
                    <div class="tour__place">
                        Lille (59) - Le Biplan
                    </div>
                </div>
            </div><!--/.tour__item-->
        </div><!--/.tour__wrapper-->
    </div><!--/.tour-->
</article><!--/.wrapper-->

<article class="wrapper" id="target-about">
    <h2 class="title">Bio</h2>
    <div class="bio">
        <div class="bio__headline">
            Captain A.Duck est un groupe de <br>
            rock parisien composé de 4 membres
        </div>
        <div class="bio__profil__wrapper">
            <div class="bio__profil">
                <img class="bio__profil__img" src="img/ced.jpg" alt="ced">
                <div class="bio__profil__content">
                    <div class="bio__name">Cedric</div>
                    <div class="bio__aka">( a.k.a Ced )</div>
                    <div class="bio__role">
                        Chant <br>
                        Guitare
                    </div>
                </div>
            </div><!--/.bio__profil-->

            <div class="bio__profil">
                <img class="bio__profil__img" src="img/charly.jpg" alt="charly">
                <div class="bio__profil__content">
                    <div class="bio__name">Charles</div>
                    <div class="bio__aka">( a.k.a Carlito )</div>
                    <div class="bio__role">
                        Guitare <br>
                        Coeurs
                    </div>
                </div>
            </div><!--/.bio__profil-->

            <div class="bio__profil">
                <img class="bio__profil__img" src="img/aquouel.jpg" alt="aquouel">
                <div class="bio__profil__content">
                    <div class="bio__name">Axel</div>
                    <div class="bio__aka">( a.k.a Captain eGroove )</div>
                    <div class="bio__role">
                        Basse <br>
                        Coeurs
                    </div>
                </div>
            </div><!--/.bio__profil-->

            <div class="bio__profil">
                <img class="bio__profil__img" src="img/raimon.jpg" alt="raimon">
                <div class="bio__profil__content">
                    <div class="bio__name">Romain</div>
                    <div class="bio__aka">( a.k.a Raimon )</div>
                    <div class="bio__role">
                        Batterie <br>
                        Coeurs
                    </div>
                </div>
            </div><!--/.bio__profil-->
        </div><!--/.bio__profil__wrapper-->

        <div class="bio__content">
            <div class="bio__text">
                <p>
                    Tout commence en Août 2014 quand Cédric Draignau et Charles
                    Caisso se rencontrent par le biais d'une annonce postée
                    sur internet. Chacun voulant monter un projet rock.
                    Au fil des mois et des castings, le groupe commence à se
                    former pour finalement obtenir l’osmose tant désirée.
                    La formation s’appellera BLIS.
                </p>
                <p>
                    Après des mois de répètes à peaufiner leurs morceaux,
                    BLIS se lance en 2016 à la conquête des scènes parisiennes,
                    qu’ils enchaînent en compagnie de divers groupes.
                    Une communauté de fans commence à se créer.
                </p>
                <p>
                    En juin 2017, BLIS autoproduit sa première démo :
                    Out of Nowhere (Enregistrée et mixée par Adrien Jesupret).
                    BLIS change de nom en juin 2018. Captain A. Duck est né.
                </p>
            </div>
            <div class="bio__img">
                <img src="img/rock.jpg" alt="bio">
            </div>
        </div>
    </div><!--/.bio-->
</article><!--/.wrapper-->

<article class="wrapper" id="target-contact">
    <h2 class="title">Contact</h2>
    <div class="contact">
        <a href="mailto:captain.a.duck@gmail.com" class="contact__item">
            <img class="contact__img" src="img/badge.png" alt="badge">
            <div class="contact__content">
                <span>Contactez-nous</span>
                captain.a.duck@gmail.com
            </div>
        </a><!--/.contact__item-->

        <a href="" class="contact__item">
            <img class="contact__img" src="img/pdf.png" alt="pdf">
            <div class="contact__content">
                <span>Télécharger</span>
                notre dossier de presse
            </div>
        </a><!--/.contact__item-->
    </div><!--/.contact-->
</article><!--/.wrapper-->
<script src="js/bundle.js"></script>
</body>
</html>
