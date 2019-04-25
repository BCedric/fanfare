<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<?php include '../include/head.php'; ?>
<body>
	<?php include '../include/header.php'; ?>

	<div id="main" role="main" class="line pam">
		<form class="" action="connexion.php" method="post">
			<label for="username">Username</label>
			<input type="text" name="username"/>
			<label for="password">Password</label>
			<input type="password" name="password"/>
			<input type="submit" value="connexion">
		</form>
	</div>
	<div class="clear"></div>
	<?php include '../include/footer.php'; ?>

</body>
</html>
