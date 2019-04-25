<?php
require('../entities/article.php');
use fanfare\entities\Article as Article;
session_start();

if(isset($_SESSION['username'])){
  $article = new Article($_GET['id']);
  unlink(__DIR__ .'/../img/presse/'.$article->getFichier());
  $article->supprimer();
}

header('Location: admin.php');
 ?>
