<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>formulaire</title>
  </head>
  <body>

<<<<<<< HEAD
      <!-- formulaire saisie -->
  <div>
    <div class="titre">
        <h3>Préparez votre séjour</h3><br>
    </div>
      <form class="form1" action="agence.php" method="post">
        Civilité
        <select name="civilite">
          <option value="Mme">Mme</option>
          <option value="Mr">Mr</option>
        </select><br>
        Nom: <input id="inpNom" type="text" name="nom"/><br>
        Prénom: <input id="inpPrenom" type="text" name="prenom"/><br>
        Voyage <input id="inpVoyage" type="radio" name="voyageExcursion" value="voyage"/><br>
        Excursion <input id="inpExcursion" type="radio" name="voyageExcursion" value="excursion"/><br>
        <input id="inpSuite" type="submit" value="J'y vais !"/>
      </form>
  </div>
      <!-- end formulaire saisie -->
=======
    <!-- formulaire saise -->

  <form action="agence.php" method="post">

    Civilité
    <select>
      <option value="civiliteMme">Mme</option>
      <option value="civiliteMr">Mr</option>
    </select><br>
    Nom: <input type="text" name="nom"/><br>
    Prénom: <input type="text" name="prenom"/><br>
    Voyage <input type="radio" name="voyage-excursion" value="voyage"/><br>
    Excursion <input type="radio" name="voyage-excursion" value="excursion"/><br>
    <input type="submit" value="Suite"/>

  </form>

>>>>>>> 354837596569e2253ab0222f4c7bc4976fd3627a

  </body>
</html>
