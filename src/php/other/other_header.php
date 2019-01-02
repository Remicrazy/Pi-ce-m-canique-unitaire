<!--Header V2-->
<nav class="navbar is-transparent is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item">
      <img src="./../../img/logo.jpg">
    </a>
    <div class="navbar-burger burger" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="navbar-menu" id="navMenu" >
    <div class="navbar-start ">
      <a class="navbar-item" href="./../../../index.php">
        Acceuil
      </a>
    </div>
    <div class="navbar-start ">
      <a class="navbar-item" href="./../../../index.php#sales">
        Promotions
      </a>
    </div>
    <div class="navbar-start ">
      <a class="navbar-item" href="./../../../index.php#conseil">
        Conseil
      </a>
    </div>
    <div class="navbar-start ">
      <a class="navbar-item" href="./../../../index.php#catalogue">
        Catalogue
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item has-dropdown is-hoverable ">
        <a class="navbar-item">
          Compte
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" id="connect">
            Connexion
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="src/php/other/sign_other.php#signin">
            S'inscrire
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
<!--Header V2-->
<!-- Modal Login -->
<div class="modal my-modal" id="modal_log">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <i class="fas fa-sign-in-alt"></i>
      <p class="modal-card-title">Connexion au Site</p>
      <button class="delete" aria-label="close" id="close_log"></button>
    </header>
    <section class="modal-card-body">
      <!-- Formulaire Login -->
      <form method="post" id="login">
        <div class="field">
          <label class="label">Mail</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-rounded" type="email" placeholder="Mail" name="user" id="user" required>
            <span class="icon is-small is-left">
              <i class="fas fa-at"></i>
            </span>
          </div>
        </div>
        <div class="field">
          <label class="label">Password</label>
          <div class="control has-icons-left">
            <input class="input is-rounded" type="password" placeholder="Password" name="pwd" id="pwd" required>
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </div>
        </div>
      <!-- Formulaire Login -->
    </section>
    <footer class="modal-card-foot">
      <div class="columns">
        <div class="column">
          <button class="button is-success is-rounded" type="submit">Envoyer</button>
          <button class="button is-warning is-rounded" type="reset">Reset</button>
        </form>
          <div class="notification is-success notif" id="log_success">
            Connexion réussi !
          </div>
          <div class="notification is-warning notif" id="log_warning">
            Echec de Connexion! Mauvais identifiant ou mot de passe!
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
<!-- Modal Login -->
