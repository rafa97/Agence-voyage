<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>formulaire</title>
  </head>
  <body>
    <video autoplay loop poster="img/LosRoques.jpg" id="bgvid">
        <source src="video/LosRoques.webm" type="video/webm">
        <source src="video/LosRoques.mp4" type="video/mp4">
    </video>
    ​
    ​
    <header>
      <div id="global">
        <h1>Bienvenue sur Fly</h1>
            <p>
              Veuillez remplir le formulaire afin de choisir le meilleur voyage pour vous.

      <!-- formulaire saisie -->

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

</p>
</div>
</header>
​
</body>
</html>
      <!-- end formulaire saisie -->
