<?php
  require('../entities/date.php');
  use fanfare\entities\Date as Date;
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  } else {
    if(!empty($_POST)){
        $lieu = addslashes($_POST['lieu']);
        $info = addslashes($_POST['info']);
        Date::ajouter($_POST['heure'], $lieu, $_POST['date'],  $_POST['spectacle'], $info);
        header('Location: admin.php');
    }
  }
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>

<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!-->
<html class="no-js" lang="fr"> <!--<![endif]-->


<?php include '../include/head.php'; ?>
<body>
	<?php include '../include/header.php'; ?>

	<div id="main" role="main" class="line pam">
    <?php
    if(isset($_SESSION['username']) && empty($_POST)){
    ?>
        <form  action='ajouter.php' method='post'>
          <label for='lieu'>Lieu</label>
          <input type='text' name='lieu'/>
          <label for='info'>Info</label>
          <input type='text' name='info'/>
          <label for='date'>Date</label>
          <input type='date' name='date' id='date' />
          <label for='heure'>Heure</label>
          <input type='time' name='heure' id='heure'/>
          <label for='spectacle'>Spectacle</label>
          <select name='spectacle'>
            <option value='Dans ma rue'>Dans ma rue</option>
            <option value='Fanfaronnade'>Fanfaronnade</option>
            <option value='Un grain dans les rouages'>Un grain dans les rouages</option>
          <select>
          <input type='submit' value='ajouter'/>
        </form>
<?php
    }
     ?>

	</div>
	<div class="clear"></div>
	<?php include '../include/footer.php'; ?>

</body>
</html>
