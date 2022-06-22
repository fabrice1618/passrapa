<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Passrapa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<header class="page-header">
  <h1>Passrapa</h1>
  <h2>Gestionnaire de mots de passe</h2>
  <h3>Connexion</h3>
</header>
<body>
  <div class="body_login">
    <div class="div_erreur">
    <?php
    if(isset($_SESSION['erreur']))
    {
      echo " " . $_SESSION['erreur'] . " ";
      $_SESSION['erreur'] = '';
    }
    ?>
  </div>
  <br/>
  <fieldset class="form_inscription">
  <legend>Connexion</legend>
    <form action="loginAction.php" method="post">
      <div class="form-inscription">
        <label for="email">Adresse mail</label>
        <br/>
        <input type="email" name="email" id="email">
      </div>
      <br/>
      <div class="form-inscription">
        <label for="password">Mot de passe</label>
        <br/>
        <input type="password" name="password" id="password">
      </div>
      <br/>
  </fieldset>
  <br/>
  <div class ="form_validation">
      <div class="form-inscription">
        <button type="submit">Me connecter</button>
        <button ><a href="inscription.php">M'inscrire</a></button>
      </div>
      <br/>
    </div>
  </form>
  </div>
</body>
<footer>
  <p class="footer">Solène CAGNOLATI - Florence EXTRAT © 2022</p>
</footer>
</html>