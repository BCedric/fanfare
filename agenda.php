<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!-->
<html class="no-js" lang="fr"> <!--<![endif]-->
<?php include 'include/head.php'; 
    require('./entities/date.php');
    use fanfare\entities\Date as Date;
?>
<body>

	<?php include 'include/header.php'; ?>

	<div id="main" role="main" class="line pam">

			<span class="citation">&laquo;&nbsp;Tel un arc-en-ciel qui fend le cr&eacute;puscule, la Fanfare est en concert.&nbsp;&raquo;<br /><i>- Po&eacute;sie du terroir Magazine </i></span>
			<h1>Prochains concerts</h1>
			<p class="txtcenter">
				<?php
				include_once("db/connexionpdo.php");

				$nom_jour_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
				$mois_fr = Array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
                // on extrait la date du jour
                $dates = Date::all();
                foreach($dates as $date)
                {
                ?>

                    <?php
					if($date['date']>=date("Y-m-d")){
						list($nom_jour, $jour, $mois, $annee) = explode('/', date_format(date_create($date['date']),"w/d/n/Y"));
                    ?>
                        <div class="date-details">
                            <span class="date-format">
                                <?php echo $nom_jour_fr[$nom_jour]?> 
                                <?php echo $jour?> 
                                <?php echo $mois_fr[$mois]?> 
                                <?php echo $annee?> 
                                <?php 
                                    if(date_format(date_create($date['heure']),"H") != "00"){
                                        echo date_format(date_create($date['heure']), "H")."h".date_format(date_create($date['heure']), "i");
                                    }        
                                ?> 
                            </span>
                            <span><?php echo $date['lieu']?> - <?php echo $date['spectacle']?></span>
                            <span><?php echo $date['info']?></span>
                        </div>
                            
                    <?php
					} else {
                        $idcom = connexpdo();
						$req = "DELETE FROM concerts WHERE id='".$date['id']."'";
                        $res = $idcom->query($req);
                        $res->closeCursor();
					}

                }

				if(count($dates) == 0){ ?>
					<p><a>Aucun concert n'est prévu pour le moment.</a></p>
				<?php } ?>
                <p class="txtcenter"><img src="img/dates.png" alt="Dates" /></p>
			</p>
			<h2>Elle y est pass&eacute;e</h2>
			<ul>
                <li>Festival en Bastides 2015, 2018</li>
                <li>Festival les DévéRouillé 2018</li>
                <li>Salle R2B - Vouneuil sous Biard 2017</li>
				<li>Festival international de th&eacute;âtre de rue d'Aurillac (15) en 2007, 2008, 2010, 2013 et 2014</li>
				<li>Festival des Expressifs de Poitiers (86) en 2007, 2008, 2012 et 2014</li>
				<li>Festival « Biard Dans Les Airs », tous les ans depuis 2006</li>
				<li>« Le Monde en F&ecirc;te » 2012 à Poitiers (86)</li>
				<li>R&eacute;sidence &agrave; Cadillac (33) en ao&ucirc;t 2012</li>
				<li>Festival « Fest'Art » en 2011 à Libourne (33)</li>
				<li>La F&ecirc;te du Parc 2010 (avec Bratsch)  - Lezay (79)</li>
				<li>Festival « Musiques d'ici et d'ailleurs » en 2010 à Vivonne (86)</li>
				<li>Festival « La Belle Rouge » en 2009 à Saint-Amant-Roches-Savine (63)</li>
				<li>Festival « F&ecirc;tes Escales » en 2009 à Quincay (86)</li>
				<li>Festival des Charibaudes en 2007 à Celle l'Evescault (86)</li>
				<li>F&ecirc;te de l'&eacute;t&eacute; en juin 2012 à Saint-Georges-du-Bois (17)</li>
			</ul>

			<p class="txtcenter">
				<span><b>Et aussi :</b> Châtellerault, Ligug&eacute;, Romagne, Adriers, Lussac-les-Châteaux, Quincay, Bellejouanne, Maupr&eacute;voir, Lusignan, Bonneuil-Matours, S&egrave;vres-Anxaumont, Gencay, Saint Maurice la Clou&egrave;re, Saint Macoux, Champagn&eacute; Saint-Hilaire, Celle-Levescaux, Montmorillon, Saint Pierre de Maill&eacute;, La Chapelle Montreuil</span>
			</p>



	</div>
	<div class="clear"></div>
	<?php include 'include/footer.php'; ?>

</body>
</html>
