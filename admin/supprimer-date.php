<?php
require('../entities/date.php');
use fanfare\entities\Date as Date;
session_start();

if(isset($_SESSION['username'])){
  $date = new Date($_GET['id']);
  $date->supprimer();
}

header('Location: admin.php');
 ?>
