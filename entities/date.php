<?php
namespace fanfare\entities;
use PDO;
include_once(__DIR__ . "/../db/connexionpdo.php");


/**
 *
 */
class Date
{

  private $id;
  private $lieu;
  private $date;
  private $heure;
  private $spectacle;
  private $info;

  function __construct($id)
  {
    $idcom = connexpdo();
    $req = "SELECT * FROM concerts WHERE id='".$_GET['id']."'";
    $res = $idcom->query($req);
    $resultat = $res->fetchAll();
    $this->id = $resultat[0]['id'];
    $this->heure = $resultat[0]['heure'];
    $this->lieu = $resultat[0]['lieu'];
    $this->date = $resultat[0]['date'];
    $this->spectacle = $resultat[0]['spectacle'];
    $this->info = $resultat[0]['info'];

    $res->closeCursor();
  }



  public function supprimer(){
    $idcom = connexpdo();
    $req = "DELETE FROM concerts WHERE id='".$this->id."'";
    $res = $idcom->query($req);
    $res->closeCursor();
  }

  public static function all(){
    $idcom = connexpdo();
    $req = "SELECT  * FROM concerts ORDER BY date";
    $res = $idcom->query($req);
    return $res->fetchAll();
    $res->closeCursor();
  }

  public static function ajouter($heure, $lieu, $date, $spectacle, $info)
  {
    $idcom = connexpdo();
    $req = "INSERT INTO concerts(lieu, info, date, heure, spectacle) VALUES ('".$lieu."', '".$info."', '".$date."', '".$heure."', '".$spectacle."')";
    $res = $idcom->query($req);
    $res->closeCursor();
  }
}

 ?>
