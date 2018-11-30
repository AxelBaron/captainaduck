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
  <nav class="menu">
    <div class="menu__bg"></div>
    <a class="menu__item" href="#news">News</a>
    <a class="menu__item" href="#dates">Tour dates</a>
    <a class="menu__item" href="#about">Bio</a>
    <a class="menu__item" href="#contact">Contact</a>
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
<article class="wrapper">
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
                width="400" height="280"
                frameborder="0" allowtransparency="true"
                allow="encrypted-media">

        </iframe>
    </div>
</article><!--/.wrapper-->

<article class="wrapper">
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
                        11 novembre 2018
                    </div>
                    <div class="tour__place">
                        Le Barde Atomique (78)
                    </div>
                </div>
            </div><!--/.tour__item-->
            <div class="tour__item">
                <div class="tour__img">
                    <img src="img/picto-boat.png" alt="picto boat">
                </div>
                <div class="tour__content">
                    <div class="tour__date">
                        11 novembre 2018
                    </div>
                    <div class="tour__place">
                        Le Barde Atomique (78)
                    </div>
                </div>
            </div><!--/.tour__item-->
        </div><!--/.tour__wrapper-->
    </div><!--/.tour-->
</article><!--/.wrapper-->

<article class="wrapper">
    <h2 class="title">Bio</h2>
    <div class="bio">
        <div class="bio__headline">
            Captain A.Duck est un groupe de <br>
            rock parisien composé de 4 membres
        </div>
    </div><!--/.bio-->
</article><!--/.wrapper-->
<script src="js/bundle.js"></script>
</body>
</html>
