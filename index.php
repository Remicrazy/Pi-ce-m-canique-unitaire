<?php

  session_start();

  require_once "src/php/main.php";

?>
<!DOCTYPE HTML>
<html class="has-navbar-fixed-top">

  <!--Head-->
  <head>
      <meta charset="utf-8">
      <title>Pièce Mécano à l'Unité</title>
      <link rel="icon" href="src/img/favicon.ico" />

      <!--CSS-->
      <link rel="stylesheet" href="src/css/bulma.css">
      <link rel="stylesheet" href="src/css/bulma-carousel.min.css">
      <link rel="stylesheet" href="src/css/main.css" >
      <!--CSS-->

      <!--Font-->
      <link href="src/css/Montserrat-Bold.ttf" rel="stylesheet">
      <link href="src/css/RobotoCondensed-Regular.ttf" rel="stylesheet">
      <script defer src="src/css/fontawesome-all.min.js"></script>
      <!--Font-->

  </head>
  <!--Head-->

  <!--Body-->
  <body>
    <!--Header V2-->
    <?php
    if(isset($_SESSION['ID'])  && isset($_SESSION['Mail']))
    {
      include('src/php/user/user_header.php');
    }
    else
    {
      include('src/php/other/other_header.php');
    }
    ?>
    <!--Header V2-->
    <!--Banner-->
    <div class="block banner">
      <div class="container is-fluid">
        <img src="src/img/banner.jpg" class="banner-image">
          <div class="banner-content">
            <h1 class="title is-1">PMU</h1>
            <h2 class="subtitle is-2">Pièce Mécano à l'Unité</h2>
            <h3 class="subtitle is-4">La référence de la pièce</h3>
            <?php
            if(isset($_SESSION['ID'])  && isset($_SESSION['Mail']))
            {
              echo "<h3 class=\"subtitle is-4\"> Bonjour à vous, ".$_SESSION['Prenom']."</h3>";
            }
             ?>
          </div>
        </div>
      </div>
    <!--Banner-->
    <!--Promotion-->
    <?php include ('src/php/promo.php'); ?>
    <!--Promotion-->
    <!--Conseil-->
    <?php include ('src/php/conseil.php'); ?>
    <!--Conseil-->
    <!--Catalogue-->
    <?php include ('src/php/catalogue.php') ?>
    <!--Catalogue-->
    <!--Footer-->
    <footer class="footer">
      <div class="container is-fluid">
        <div class="content has-text-centered">
          <p>
            TOUS DROITS RÉSERVÉS <i class="far fa-copyright"></i> 2018 | <strong>Remicrazy</strong>,    Remi BIZET
          </p>
          <p>
            <i class="fas fa-map-marker-alt"></i>
            118bis rue de Voves | 28630 LE COUDRAY
          </p>
          <p>
            <i class="fas fa-phone"></i>
            06 59 76 96 70
          </p>
          <p>
            <i class="fas fa-at"></i>
            remi.bizet@gmail.com
          </p>
        </div>
      </div>
    </footer>
    <!--Footer-->

    <!--Script-->
    <script src="src/js/jquery-3.3.1.min.js"></script>
    <script src="src/js/bulma-carousel.js"></script>
    <script src="src/js/main.js"></script>

    </body>
    <!--Body-->

    </html>
