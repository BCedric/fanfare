<?php
    require('../entities/article.php');
    use fanfare\entities\Article as Article;
?>
    <a href='ajouter-article.php'>
            <input type='button' value='Ajouter un article' />
        </a>
    <table>
    <tr>
        <th>fichier</th>
        <th>date</th>
        <th>journal</th>
    </tr>
<?php
    $resultat = Article::all();
    foreach ($resultat as $article) {
?>
    <tr>
        <td><?php echo $article['fichier']?></td>
        <td><?php echo $article['date']?></td>
        <td><?php echo $article['journal']?></td>
        <td><a href='supprimer-article.php?id=<?php echo $article['id']?>'>
                <input type='button' value='Supprimer' />
            </a>
        </td>
    </tr>
<?php 
    }
?>
    
    </table>

<?php
    include_once(__DIR__ . "/../db/connexionpdo.php");
     $idcom = connexpdo();
    $req = "SELECT  * FROM presse ORDER BY date DESC";
    $res = $idcom->query($req);
    $res->fetchAll();
    $res->closeCursor();
?>
