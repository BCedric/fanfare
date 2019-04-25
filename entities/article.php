<?php
namespace fanfare\entities;
use PDO;
include_once(__DIR__ . "/../db/connexionpdo.php");


/**
 *
 */
class Article
{

  private $id;
  private $fichier;
  private $date;
  private $journal;

  private static $chemin = __DIR__ . '/../img/presse/';

  function __construct($id)
  {
    $idcom = connexpdo();
    var_dump($id);
    $req = "SELECT * FROM presse WHERE id='".$_GET['id']."'";
    $res = $idcom->query($req);
    $resultat = $res->fetchAll();
    $this->id = $resultat[0]['id'];
    $this->fichier = $resultat[0]['fichier'];
    $this->date = $resultat[0]['date'];
    $this->journal = $resultat[0]['journal'];

    $res->closeCursor();
  }

  public function getFichier() {
      return $this->fichier;
  }

  public function getCheminFichier() {
    return $this->fichier;
  }

  public function supprimer(){
    $idcom = connexpdo();
    $req = "DELETE FROM presse WHERE id='".$this->id."'";
    $res = $idcom->query($req);
    $res->closeCursor();
  }

  public static function all(){
    $idcom = connexpdo();
    $req = "SELECT  * FROM presse ORDER BY date DESC";
    $res = $idcom->query($req);
    $coucou = $res->fetchAll();
    $res->closeCursor();
    return $coucou;
  }

  public static function ajouter( $fichier, $date, $journal)
  {
    $idcom = connexpdo();
    $req = "INSERT INTO presse(fichier, date, journal) VALUES ('".$fichier."', '".$date."', '".$journal."')";
    $res = $idcom->query($req);
    $res->closeCursor();
  }
}

 ?>
