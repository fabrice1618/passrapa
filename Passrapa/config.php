<?php

// Pepper hash
$pepper = 'c1isvFdxMDdmjOlvxpecFw';

// On se connecte à la base de données
$user = 'root';
$pass = 'root_pwd';

try
{
    // On se connecte à MySQL
	$dbh = new PDO('mysql:host=mysql;dbname=passrapa', $user, $pass);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        exit('Erreur : '.$e->getMessage());
}

?>