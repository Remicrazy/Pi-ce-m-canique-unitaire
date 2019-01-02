<?php
  session_start();
  require_once "./../connect.php";
?>
<!DOCTYPE HTML>
<html class="has-navbar-fixed-top">

  <!--Head-->
  <head>
      <meta charset="utf-8">
      <title>Pièce Mécano à l'Unité</title>
      <link rel="icon" href="./../../img/favicon.ico" />

      <!--CSS-->
      <link rel="stylesheet" href="./../../css/bulma.css">
      <link rel="stylesheet" href="./../../css/main.css" >
      <!--CSS-->

      <!--Font-->
      <link href="./../../css/Montserrat-Bold.ttf" rel="stylesheet">
      <link href="./../../css/RobotoCondensed-Regular.ttf" rel="stylesheet">
      <script defer src="./../../css/fontawesome-all.min.js"></script>
      <!--Font-->

  </head>
  <!--Head-->

  <!--Body-->
  <body>
    <!--Header V2-->
    <?php
    if(isset($_SESSION['ID'])  && isset($_SESSION['Mail']))
    {
      include('./../user/user_header.php');
    }
    else
    {
      include('./../other/other_header.php');
    }
    ?>
    <!--Header V2-->
    <!--Banner-->
    <div class="block banner">
      <div class="container is-fluid">
        <img src="./../../img/banner.jpg" class="banner-image">
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
    <!--Catalogue Equerre-->
    <div class="block catal">
      <?php global $bdd;
        $repon = $bdd->query('SELECT * FROM produit WHERE Categorie = 2 ');
        while ($donn = $repon->fetch()) {
      ?>
      <div class="columns ">
        <div class="column">
          <h6 class="subtitle is-5 heading-site"><?php echo $donn['Nom'];?></h6>
        </div>
        <div class="column">
          <img src="./../..<?php echo $donn['Image'] ?>"/>
        </div>
        <div class="column">
          <h6 class="subtitle is-5 heading-site"> Prix HT: <?php echo $donn['Ht'];?>€</h6>
          <p class="para"> Avec une TVA de <?php echo $donn['Tva'];?>%</p>
        </div>
        <div class="column">
          <h6 class="subtitle is-5 heading-site">En Stock: <?php echo $donn['Stock'];?></h6>
        </div>
        <?php
        if(isset($_SESSION['ID'])  && isset($_SESSION['Mail']))
        { ?>
          <div class="column">
            <button class="button is-link is-rounded" id="add_basket">Acheter</button>
          </div>
        <?php }
        else
        { ?>
          <div class="column">
            <button class="button is-link is-rounded" id="add_basket" disabled title="Connectez-Vous avant l'achats!">Acheter</button>
          </div>
        <?php }
        ?>
      </div>
      <?php
        }
      ?>
    </div>
    <!--Catalogue Equerre-->
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
    <script src="./../../js/jquery-3.3.1.min.js"></script>
    <script src="./../../js/main.js"></script>

  </body>
  <!--Body-->
</html>
