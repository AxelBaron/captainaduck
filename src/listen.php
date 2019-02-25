<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captain A. Duck - Listen</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="header">
    <div class="header__bg"></div>
    <div class="header__sticky">
        <a class="header__logo">
            <img src="img/logo--white.png" alt="logo">
        </a><!--/.header__logo-->
    </div>
    <nav class="menu">
        <div class="menu__bg"></div>
        <div class="menu__trigger">
            <div class="burger"></div>
            <div class="menu__trigger__text">Menu</div>
        </div>
        <div class="menu__content">
            <a id="news" class="menu__item" href="http://local.captainaduck.fr/">Discographie</a>
            <a id="dates" class="menu__item" href="http://local.captainaduck.fr/">Tour dates</a>
            <a id="about" class="menu__item" href="http://local.captainaduck.fr/">Bio</a>
            <a id="contact" class="menu__item" href="http://local.captainaduck.fr/">Contact</a>
            <div class="menu__item menu__item--mobile">
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
            </div>
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
    <h2 class="title title--first">Listen</h2>
    <p class="text text--center">
        All streaming platform available bellow.
    </p>
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
                src="https://open.spotify.com/embed/album/1L7dT8lArHo1eOb270eZau"
                frameborder="0" allowtransparency="true"
                allow="encrypted-media">
        </iframe>
    </div><!--/.player-->
    <div class="streaming-list">
        <div class="container">
            <a class="streaming-list__item" target="_blank" href="https://spoti.fi/2AZ7U6i">
                <img src="img/spotify.svg" alt="spotify" alt="spotify">
            </a>
            <a class="streaming-list__item" target="_blank" href="https://bit.ly/2HsJM1t">
                <img src="img/deezer-logo.svg" alt="deezer" alt="deezer">
            </a>
            <a class="streaming-list__item" target="_blank" href="https://bit.ly/2S3NUsD">
                <img src="img/youtube.svg" alt="youtube" alt="youtube">
            </a>
            <a class="streaming-list__item" target="_blank" href="https://apple.co/2G04ROj">
                <img src="img/itunes.svg" alt="itunes">
            </a>
            <a class="streaming-list__item" target="_blank" href="https://amzn.to/2T9ar4L">
                <img src="img/amazon-music.svg" alt="amazon music">
            </a>
        </div>
    </div>
</article><!--/.wrapper-->
<script src="js/bundle.js"></script>
</body>
</html>
