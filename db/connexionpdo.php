<?php
function connexpdo() {
  include_once("params.inc.php");
  $dsn = "mysql:host=" . MYHOST . ";dbname=" . MYBASE;
  $user = MYUSER;
  $pass = MYPASS;
  try {
    $idcom = new PDO($dsn,$user,$pass);
    return $idcom;
  }
  catch(PDOException $except) {
    echo "Echec de la connexion", $except->getMessage();
    return FALSE;
    exit();
  }
}

 ?>
