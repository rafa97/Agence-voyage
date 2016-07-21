<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- formulaire saise -->

  <form action="agence.php" method="post">

    Civilité
    <select>
      <option value="civilite">Mme</option>
      <option value="civilite">Mr</option>
    </select>
    <br>
      Nom: <input type="text" name="nom"/><br>
      Prénom: <input type="text" name="prenom"/><br>
      Voyage <input type="radio" name="voyage"/><br>
      Excursion <input type="radio" name="excursion"/><br>
      <input type="submit" value="Suite"/>
  </form>


  </body>
</html>
