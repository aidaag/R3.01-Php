
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calcul</title>
    </head>
    <body>
        <h1>Calcul</h1></strong>
        <?php
        
        $a = $_GET["a"];
        $b = $_GET["b"];
        $op = $_GET["op"];
        if (empty($a)) {
            echo 'Value a is missing';
        }else if(empty($b)){
            echo 'Value b is missing';
        }else {echo 'Operateur op is missing';
        }
        switch ($op) {
            case "-":
                echo  $a ."-" . $b ."=" .($a - $b);
                break;
            case "+":
                echo $a ."+" . $b ."=" .($a - $b);
                break;
            case "*":
                echo $a ."*" . $b ."=" .($a * $b);
                break;
        }
        ?>
        


    </body>
</html>
