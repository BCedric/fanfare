<?php

    require('../entities/date.php');
    use fanfare\entities\Date as Date;
?>
    <a href='ajouter-date.php'>
        <input type='button' value='Ajouter une date' />
    </a>
    <table>
        <tr>
            <th>lieu</th>
            <th>info</th>
            <th>date</th>
            <th>heure</th>
            <th>spectacle</th>
        </tr>
<?php
    $resultat = Date::all();
    foreach ($resultat as $date) {
?>
        <tr>
            <td><?php echo $date['lieu']?></td>
            <td><?php echo $date['info']?></td>
            <td><?php echo $date['date']?></td>
            <td><?php echo $date['heure']?></td>
            <td><?php echo $date['spectacle']?></td>
            <td><a href='supprimer-date.php?id=<?php echo $date['id']?>'>
                    <input type='button' value='Supprimer' />
                </a>
            </td>
        </tr>
<?php
    }
?>
    </table>
