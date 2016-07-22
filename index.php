<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Vidéo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
​
​
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
          <form action="agence.php" method="post">

            Civilité
            <select>
              <option value="civiliteMme">Mme</option>
              <option value="civiliteMr">Mr</option>
            </select><br>
            <label for="nom">Nom: </label><input type="text" name="nom"/><br>
            <label for="nom">Prénom: </label><input type="text" name="prenom"/><br>
            Voyage <input type="radio" name="voyage-excursion" value="voyage"/><br>
            Excursion <input type="radio" name="voyage-excursion" value="excursion"/><br>
            <input type="submit" value="Suite"/>

          </form>

        </p>
  </div>
</header>
​
</body>
</html>
