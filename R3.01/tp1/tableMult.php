<?php
// taille de la table de multiplication
    $taille=13;

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tables de multiplication de 1 à 13</title>
    </head>
    <body>
        <h1>Tables de multiplication de 1 à 13 </h1></strong>
        <table>
            <thead>
                <tr>
                     <th scope="col"> </th>
                    <?php
                    for( $i =1; $i<= $taille; $i++){?>
                    <th scope="col"><?= $i?></th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                    <?php
                    for( $n =1; $n<= $taille; $n++):?>
                    <tr>
                        <th scope="row"><?= $n?></th>
                        <?php
                            for( $b =1; $b<= $taille; $b++):?>
                            <td><?= $n * $b?></td>
                        <?php
                        endfor;
                        ?>
                    </rt>
                    <?php
                    endfor;
                    ?>
                       
        <table>
    </body>
</html>
