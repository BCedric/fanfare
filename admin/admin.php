<?php
  
  session_start();
    if(!isset($_SESSION['username'])){
      header('Location: login.php');
    }
 ?>

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
        <?php include './dates-table.php'; ?>
        <?php include './articles-table.php'; ?>
        
        <a href='deconnexion.php'>
            <input type='button' value='Deconnexion' />
        </a>
	</div>
	<div class="clear"></div>
	<?php include '../include/footer.php'; ?>

</body>
</html>
