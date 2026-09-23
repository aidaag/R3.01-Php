<?php
// Récupération des valeurs
$nom = $_GET['nom'] ?? "inconnu";

// Calculs
// Année de naissance
$age = $_GET['age'] ?? "inconnu";
$year = ($age - date('Y'));

$presentation =$_GET['genre'] ?? "inconnue";
if($presentation == "femme"){
  $presentation = "Mme.";
}else{
  $presentation = "M.";
}

// Liste des signes
// En 1921 c'était l'année du Coq
$signe = array('Coq', 'Chien', 'Cochon', 'Rat', 'Buffle', 'Tigre', 'Lapin', 'Dragon', 'Serpent', 'Cheval', 'Chèvre', 'Singe');
$pos = 0;

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="styles.css">
  <title>Signe  Chinois</title>
</head>

<body>
  <header>
    <h1>Signes Astrologiques Chinois</h1>
  </header>
  <main>
    <p>
      Bonjour <?= $presentation ?> <?= $nom ?>, vous etes né en <?= $year ?>.
      Vous êtes du signe suivant :
    </p>
    <section>
      <p> <?= $signe ?></p>
    </section>
    
  </main>
  <footer>
    <p> 2024 Votre Site Astrologique</p>
  </footer>
</body>

</html>