<?php
  session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title></title>
  </head>
  <body>

    <?php
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $civ = $_SESSION['civilite'];
    $voyageExc = $_SESSION['voyageExcursion'];
    $lesVoyages = $_POST['lesVoyages'];
    $lesExcursions = $_POST['lesExcursions'];
    $nombrePers =$_POST['nombrePers'];

    if ($lesVoyages == 1) {
      $voyageExc = 'aux Caraïbes';
      $prix = '2500 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesVoyages == 2) {
      $voyageExc = 'en Asie du sud-est';
      $prix = '3000 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesVoyages == 3){
      $voyageExc = 'aux Etats-unis';
      $prix = '3500 €';
      $total = $nombrePers * $prix;
      $genre = 'un voyage';
    } else if ($lesExcursions == 4){
      $voyageExc = 'L\'Acropole';
      $prix = '250 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else if ($lesExcursions == 5) {
      $voyageExc = 'La Vallée du Nil';
      $prix = '300 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else if ($lesExcursions == 6){
      $voyageExc = 'La Capadoce';
      $prix = '350 €';
      $total = $nombrePers * $prix;
      $genre = 'une excursion';
    } else {
      $prix = 0;
    }

    echo '<div>';
    echo '<div class="titreRecap">';
    echo '<h3>Résumé de votre demande</h3>';
    echo '</div>';
    echo '<div class="recap">';
    echo '<br>Bonjour, '.$civ.' '.$prenom.' '.$nom.'<br>';
    echo 'Vous avez choisi '.$genre.' <strong>'.$voyageExc.'</strong> au prix <br>';
    echo 'de <strong>'.$prix.'</strong> par personne<br>';
    echo 'Vous nous avez indiqué '.$nombrePers.' personne(s)<br>';
    echo 'Le montant total est de <strong>'.$total.'</strong><br>';
    echo '<p><a href="formulaire.php">Retour au formulaire</a></p>';
    echo '</div>';
    echo '</div>';

    ?>


  </body>
</html>
