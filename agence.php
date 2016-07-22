<?php
  session_start();
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['civilite'] = $_POST['civilite'];
  $_SESSION['voyageExcursion'] = $_POST['voyageExcursion'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title></title>
  </head>
  <body>
<<<<<<< HEAD
=======
    <?php
>>>>>>> 354837596569e2253ab0222f4c7bc4976fd3627a

      <!-- choix voyage ou excursion -->

<<<<<<< HEAD
    <?php

      if ($_POST['voyageExcursion'] == "voyage") {
        echo '<form class="form2" action="recapitulatif.php" method="post">';
          echo 'Choix voyage ';
          echo '<select name="lesVoyages">';
            echo '<option value="1">Les Caraïbes - super - 2500 € par pers</option>';
            echo '<option value="2">L\'Asie du sud-est - génial - 3000 € par pers</option>';
            echo '<option value="3">Les Etats-Unis - trop fort - 3500 € par pers</option>';
          echo '</select><br>';
          echo 'Nombres de personnes :<input type="text" name="nombrePers"/><br>';
          echo '<input class="inpEstim" type="submit" value="Estimation"/>';
        echo '</form>';
      } else {
      echo '<form class="form2" action="recapitulatif.php" method="post">';
        echo 'Choix excursion ';
        echo'<select name="lesExcursions">';
          echo '<option value="4">Visite Acropole - 250 € par pers</option>';
          echo '<option value="5">Visite Vallée du Nil - 300 € par pers</option>';
          echo '<option value="6">Découverte Capadoce - 350 € par pers</option>';
        echo '</select><br>';
        echo 'Nombres de personnes :<input type="text" name="nombrePers"/><br>';
        echo '<input class="inpEstim" type="submit" value="Estimation"/>';
      echo '</form>';
      }
    ?>

      <!-- end choix voyage ou excursion -->
=======
     ?>

      <!-- case voyage -->
    <form action="recapitulatif.php" method="get">
      Choix voyage
      <select>
        <option value="voyageCaraibes">Les Caraïbes - super - 3500 € par pers</option>
        <option value="voyageAsieSud">L'Asie du sud-est - génial - 4000 € par pers</option>
        <option value="voyageEtatsUnis">Les Etats-Unis - trop fort - 4500 € par pers</option>
      </select><br>
      Nombres de personnes :<input type="text" name="nombrePers"/><br>
      <input type="submit" value="Estimation"/>
    </form>

      <!-- case excursion -->

    <form action="recapitulatif.php" method="post">
      Choix excursion
      <select>
        <option value="escursionAcropole">Visite Acropole - 250 € par pers</option>
        <option value="excursionValleNil">Visite Vallée du Nil - 300 € par pers</option>
        <option value="excursionCapadoce">Découverte Capadoce - 350 € par pers</option>
      </select><br>
      Nombres de personnes :<input type="text" name="nombrePers"/><br>
      <input type="submit" value="Estimation"/>
    </form>
>>>>>>> 354837596569e2253ab0222f4c7bc4976fd3627a

  </body>
</html>
