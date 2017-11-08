<?php

// connexion à la base

$db = mysql_connect('127.0.0.1', 'root') or die('Erreur de connexion '.mysql_error());

// sélection de la base

mysql_select_db('GameBD',$db) or die('Erreur de selection '.mysql_error());

// on écrit la requête sql

//$sql = "INSERT INTO infos_tbl(id, nom, prenom,email, icq, titre, url) VALUES('','$nom','$prenom','$email','$icq','$titre','$url')";

// on insère les informations du formulaire dans la table

//mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

// on affiche le résultat pour le visiteur

//echo 'Vos infos on été ajoutées.';

mysql_close(); // on ferme la connexion


?>