<?php
include ('../connect.php');

header('Content: application/json', 1);


  $user = $_POST['user'];
  $pwd = $_POST['pwd'];

  $req = $bdd->prepare("SELECT * FROM client WHERE Mail = :mail");
  $req->execute(array(
    "mail" => $user));
  $resultat = $req->fetch();

  $isPasswordCorrect = password_verify($pwd, $resultat['Pass']);

  if (!$resultat)
  {
    // echo 'Mauvais identifiant ou mot de passe!';
    $retour['valid'] = 0;
    $retour["message"] = '&lt;p class="error"&gt;Erreur lors de la connexion, veuillez vérifier votre adresse mail !&lt;/p&gt;';
  }
  else {
    if ($isPasswordCorrect){

      session_start();
      $_SESSION['ID'] = $resultat['ID'];
      $_SESSION['Prenom'] = $resultat['Prenom'];
      $_SESSION['Nom'] = $resultat['Nom'];
      $_SESSION['Mail'] = $resultat['Mail'];
      $_SESSION['Tel'] = $resultat['Tel'];
      $_SESSION['Adresse'] = $resultat['Adresse'];
      $retour['valid'] = 1;
      $retour["message"]= '&lt;p class="success"&gt;Vous avez été connecté avec succès.&lt;/p&gt;;';
    }
    else {
      // echo 'Mauvais identifiant ou mot de passe!';
      $retour['valid'] = 0;
      $retour["message"] = '&lt;p class="error"&gt;Erreur lors de la connexion, veuillez vérifier votre adresse mail !&lt;/p&gt;';
    }
  }
  echo json_encode($retour);
?>
