<?php

  session_start();
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
  $_SESSION['civiliteMme'] = $_POST['civiliteMme'];
  $_SESSION['civiliteMr'] = $_POST['civiliteMr'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        echo $_POST['voyage-excursion'];

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

  </body>
</html>
