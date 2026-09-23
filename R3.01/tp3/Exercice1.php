<?php
$a = 1;
$a .= '0';
// la concatenation tranforme la valeur en chaine
$b = 2 * 5;
print('<p>$a est de type ' . gettype($a) . ' et a pour valeur ' . $a . '</p>');
print('<p>$b est de type ' . gettype($b) . ' et a pour valeur ' . $b . '</p>');
if ($a == $b) {
    echo "<p>Avec l'opérateur == : '$a' et $b sont équivalents</p>";
}
if ($a === $b) {
    echo "<p>Avec l'opérateur === : '$a' et $b sont de type identiques</p>";
} else {
    echo "<p>Avec l'opérateur === : '$a' et $b sont de type différents</p>";
}

 function bonjour() {
          if (isset($nom)) {
            echo "Bonjour $nom</br>";
          } else {
            echo "Mais qui êtes vous ?</br>";
          }

        }
// N'affiche rien car il n'y a pas de declaration et initialisation de la variable dans le bloc de fonction
        function hello() {
          global $nom;
          if (isset($nom)) {
            echo "Hello $nom</br>";
          } else {
            echo "Mais qui êtes vous ?</br>";
          }
        }
// affiche d'abord Arthur puis Marcel car variable global donc prend toute variable global donc initialise et declarer en dehors de la fonction
        function salut() {
          static $nom;
          if (isset($nom)) {
            echo "Salut $nom</br>";
          } else {
            echo "Mais qui êtes vous ?</br>";
          }
          $nom = "Cyprien";
        }
//A u debut n'affiche rien car variable declareé a la fin et 2 eme tours affiche  car variable stockée dans le bloc de fonction 
        bonjour();
        $nom="Arthur";
        bonjour();

        hello();
        $nom="Marcel";
        hello();

        salut();
        $nom="Mohamed";
        salut();
      