<?php
  include ('../connect.php');

  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $phone= $_POST['phone'];
  $mail= $_POST['mail'];
  $adress= $_POST['adress'];
  $gender = $_POST['gender'];

  $password = $_POST['password'];
  $pass_hash = password_hash($password,PASSWORD_DEFAULT);

  $bdd->exec("INSERT INTO client VALUES (NULL,'". $name ."','". $firstname ."','". $gender ."','". $adress ."','". $phone ."','". $mail ."','". $pass_hash ."')");
 ?>
