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
    include('./other_header.php');
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
          </div>
        </div>
      </div>
    <!--Banner-->

    <!--Formulaire-->
    <form method="post" id="signin">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Informations</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input id="name" class="input" type="text" placeholder="Nom" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input id="firstname" class="input" type="text" placeholder="Prénom" required>
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Contact</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input id="phone" class="input" type="tel" placeholder="Numéro de téléphone" required>
              <span class="icon is-small is-left">
                <i class="fas fa-phone"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input id="mail" class="input" type="email" placeholder="Email" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
            <p class="help">L'email servira d'Identifiant</p>
          </div>
        </div>
      </div>
      <div class="field is-horizontal">
        <div class="field-label"></div>
        <div class="field-body">
          <div class="field is-expanded">
            <p class="control is-expanded has-icons-left">
              <input id="adress" class="input" type="text" placeholder="Adresse postale" required>
              <span class="icon is-small is-left">
                <i class="fas fa-map-marker-alt"></i>
              </span>
            <p class="help">Sous la forme de :  1 impasse de l'Eglise, 01090 FRANCHELEINS </p>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label">
          <label class="label">Sexe</label>
        </div>
        <div class="field-body">
          <div class="field is-narrow">
            <div class="control">
              <label class="radio">
                <input type="radio" name="gender" value="Femme" required>
                Femme
              </label>
              <label class="radio">
                <input type="radio" name="gender" value="Homme">
                Homme
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Mot de passe</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control is-expanded has-icons-left">
              <input id="password" class="input" type="password" placeholder="Mot de passe" required>
              <span class="icon is-small is-left">
                <i class="fas fa-unlock-alt"></i>
              </span>
            </p>
          </div>
          <!-- <div class="field">
            <p class="control is-expanded has-icons-left">
              <input class="input" type="password" placeholder="Confirmation" required>
              <span class="icon is-small is-left">
                <i class="fas fa-unlock-alt"></i>
              </span>
            </p>
          </div> -->
        </div>
      </div>

      <div class="field is-horizontal">
        <div class="field-label">
          <!-- Left empty for spacing -->
        </div>
        <div class="field-body">
          <div class="field">
            <div class="control">
              <button class="button is-primary" type="submit">Inscription</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="notification is-success notif" id="sign_success">
      Inscription enregistrer !
    </div>
    <div class="notification is-warning notif" id="sign_warning">
      Echec d'Inscription !
    </div>
    <!--Formulaire-->

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
