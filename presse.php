<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<?php 
    include 'include/head.php'; 
    require('./entities/article.php');
    use fanfare\entities\Article as Article;
?>
<body>
	<?php include 'include/header.php'; ?>
	<div id="main" role="main" class="line pam">
        <h1>Articles de Presse</h1>
        <div class="presse-articles-container">
        <?php
            foreach(Article::all() as $article)
            {
                ?>
                <div class="presse-article">
                    <a href="img/presse/<?php echo $article['fichier']?>"  target="_blank" rel="noopener noreferrer">
                            <img class="presse-article-img" src="img/presse/<?php echo $article['fichier'] ?>" />
                    </a>
                    <div>
                        <span class="presse-infos">
                            <?php echo $article['journal'];
                                if($article['journal'] != null && $article['date'] != null){
                                    echo ', ' ;
                                }
                                $date = new DateTime($article['date']);
                            echo "le ".$date->format('d/m/Y');
                        ?></span>
                    </div>
                </div>
        <?php        
            }
        ?>
            
        </div>
	</div>
	<div class="clear"></div>
	<?php include 'include/footer.php'; ?>

</body>
</html>
