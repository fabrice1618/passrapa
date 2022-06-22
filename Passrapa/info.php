<?php

// On ramène le fichier config.php
include('config.php');

if (session_status() == PHP_SESSION_NONE)
{
	// On commence la session
  session_start();
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Informations - Passrapa</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<header class="button-header">
	<div class="button-div">
		<a href="welcome.php"><button class="button-head">Accueil</button></a>
		<a href="recherche.php"><button class="button-head">Recherche</button></a>
		<a href="newPassword.php"><button class="button-head">Nouveau</button></a>
		<a href="info.php"><button class="button-head">Informations</button></a>
		<a href="logoutAction.php"><button class="button-head">Déconnexion</button></a>
	</div>
  <h1>Passrapa</h1>
  <h2>Informations du compte</h2>
</header>
<body>
	<?php
    $lastname = $_SESSION['nom'];
    $firstname = $_SESSION['prenom'];
    $birth = $_SESSION['naissance'];
		$phone = $_SESSION['telephone'];
		$mail = $_SESSION['mail'];
  ?>
 <br/>
	<div class="div_erreur">
	  <?php
	  	if(isset($_SESSION['erreur']))
	  	{
	    	echo "<div> " . $_SESSION['erreur'] . " </div>";
	    	$_SESSION['erreur'] = '';
	  	}
	  ?>
	</div>
	<div class="body_center">
	<fieldset class="form_inscription">
  <legend>Mes informations</legend>
    <form action="infoAction.php" method="post">
      <div class="form_info">
        <label for="lastname">Nom</label>
        <br/>
        <input type="text" name="lastname" id="lastname" value=<?php echo $lastname; ?> >
      </div>
      <br/>
      <div class="form_info">
        <label for="firstname">Prénom</label>
        <br/>
        <input type="text" name="firstname" id ="firstname" value= <?php echo $firstname; ?> >
      </div>
      <br/>
      <div class="form_info">
        <label for="birth">Date de naissance</label>
        <br/>
        <input type="date" name="birth" id="birth" value= <?php echo $birth; ?> >
      </div>
      <br/>
      <div class="form-inscription">
        <label for="email1">Adresse mail</label>
        <br/>
        <input type="email" name="email1" id="email1" value= <?php echo $mail; ?> >
      </div>
      <br/>
      <div class="form-inscription">
        <label for="phone">Téléphone</label>
        <br/>
        <input type="tel" name="phone" id="phone" 
        pattern="0[0-9]{9}" value= <?php echo $phone; ?> >
      </div>
      <br/>
  	</fieldset>
  	<br/>
	  <div class="form-inscription">
		  <button type="submit">Modifier les informations</button>
		</div>
	</div>
  <br/>
	</form>
  <div class="body_center">
  <fieldset class="form_inscription">
  <legend>Mot de passe</legend>
    <form action="infoActionMdp.php" method="post">
      <div class="form_info">
        <label for="password">Ancien mot de passe</label>
        <br/>
        <input type="password" name="password" id="password">
      </div>
      <br/>
      <div class="form_info">
        <label for="password1">Nouveau mot de passe</label>
        <br/>
        <input type="password" name="password1" id="password1">
      </div>
      <br/>
      <div class="form_info">
        <label for="password2">Confirmez le mot de passe</label>
        <br/>
        <input type="password" name="password2" id="password2">
      </div>
      <br/>
    </fieldset>
    <br/>
    <div class="form-inscription">
      <button type="submit">Changer le mot de passe</button>
    </div>
  </div>
  </form>
  <br/>
</body>
<footer>
  <p class="footer">Solène CAGNOLATI - Florence EXTRAT © 2022</p>
</footer>
</html>
