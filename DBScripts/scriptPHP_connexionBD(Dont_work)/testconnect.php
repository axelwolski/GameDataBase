
<?php
// on se connect à localhost au port 3307
$link = mysql_connect('127.0.0.1:3306', 'awolski', 'test');
if (!$link) {
    die('Connexion impossible : ' . mysql_error());
}
echo 'Connecté correctement';
mysql_close($link);
?>
