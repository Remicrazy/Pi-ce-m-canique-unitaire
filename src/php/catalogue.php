<div class="block catal">
  <h2 id="catalogue" class="subtitle heading-site">Catalogue</h2>
  <hr class="separator">
  <div class="container">
    <p class="para">
      Vous trouverez si-dessous nos différents articles disponible.
    </p>
    <div class="columns ">
      <?php
        $repcata = $bdd->query('SELECT * FROM categorie ORDER BY ID ASC');
        while ($doncata = $repcata->fetch())
        {
          ?>
          <div class="column">
            <h6 class="subtitle is-5 heading-site"><a href="src/php/cata/<?php echo $doncata['Nom'];?>.php"><?php echo $doncata['Nom'];?></a></h6>
          </div>
  <?php } ?>
    </div>
  </div>
</div>
