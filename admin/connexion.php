<?php
require_once('../db/connexionpdo.php');
if (loginOK($_POST['username'],$_POST['password'])) {
  session_start();
  $_SESSION['username'] = $_POST['username'];
  header('Location: admin.php');
} else {
  header('Location: ../index.php');
}




/* Vérifie la combinaison nom/mot de passe et renvoie
 true si elle est OK, false sinon
 Pour le moment on n'utilise pas de base de données.
 le évrification est codée en "dur" */

function loginOK($login, $passwd) {
  $idcom = connexpdo();
  $req = "SELECT * FROM users WHERE username ='".$login."'";
  $res = $idcom->query($req);
  $resultat = $res->fetchAll();
  if(!empty($resultat)){
    if($resultat[0]['password'] == md5($resultat[0]['salt'].$passwd)) return true;
  }
  $res->closeCursor();
  return false;
  }
 ?>
