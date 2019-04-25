<?php
  require('../entities/article.php');
  use fanfare\entities\Article as Article;
  session_start();
  if(!isset($_SESSION['username'])){
    header('Location: login.php');
  } else {
    if(!empty($_POST)){
        if($_FILES['fichier']['error']) {
            echo "/!\ Aucun fichier n'a été selectionné";
        } else {
            $uploaddir = '/../img/presse/';
            $uploadfile = __DIR__ . $uploaddir . basename($_FILES['fichier']['name']);
            move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadfile);
            Article::ajouter($_FILES['fichier']['name'], $_POST['date'],  $_POST['journal']);
            header('Location: admin.php');
        }
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
    if(isset($_SESSION['username'])){
    ?>
        <form  action='ajouter-article.php' method='post'enctype='multipart/form-data'>
        <input type='hidden' name='MAX_FILE_SIZE' value='30000000' />
        <label for='fichier'>Fichier</label>
        <input type='file' name='fichier'/>
        <label for='date'>Date</label>
        <input type='date' name='date' id='date' value="<?php echo $_POST['date']?>"/>
        <label for='journal'>Journal</label>
        <input type='text' name='journal' value="<?php echo $_POST['journal']?>"/>
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
