<?php
//connect to mysql db
$con = mysqli_connect("dbserver", 'awolski@localhost', 'Axel-facBD92', 'awolski') or die('Erreur de connexion '.mysql_error());
//connect to the employee database
//mysqli_select_db('awolski', $con) or die('Erreur de selection '.mysql_error());

//read the json file contents
$jsondata = file_get_contents('jeuxtest.json');
    
//convert json object to php associative array
$data = json_decode($jsondata, true);
    
//get the employee details
$id = $data['game']['id'];
$name = $data['game']['name'];
$genre = $data['game']['genres'][0]['name'];
$theme = $data['game']['themes'][0]['name'];
$rating = $data['game']['rating'];
$plateformName = $data['game']['Platform'][0]['name'];
$plateformDate = $data['game']['Platform'][0]['release_date'];
$developerID = $data['game']['developer'][0]['id'];
$developerName = $data['game']['developer'][0]['name'];
$publisherID = $data['game']['publisher'][0]['id'];
$publisherName = $data['game']['publisher'][0]['name'];
    
//insert into mysql table
$sql = "INSERT INTO Game(idGame, GameName, Rating) VALUES('$id', '$name', '$rating')";
if(!mysqli_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }

$sql2 = "INSERT INTO Genre(GenreName) VALUES('$genre')";
if(!mysqli_query($sql2,$con))
    {
        die('Error : ' . mysql_error());
    }

$sql3 = "INSERT INTO Theme(ThemeName) VALUES('$theme')";
if(!mysqli_query($sql3,$con))
    {
        die('Error : ' . mysql_error());
    }

$sql4 = "INSERT INTO Plateform(PlateformName, PlateformReleaseDate) VALUES('$plateformName', '$plateformDate')";
if(!mysqli_query($sql4,$con))
    {
        die('Error : ' . mysql_error());
    }

$sql5 = "INSERT INTO Developer(idDeveloper, DeveloperName) VALUES('$developerID', '$developerName')";
if(!mysqli_query($sql5,$con))
    {
        die('Error : ' . mysql_error());
    }

$sql6 = "INSERT INTO Publisher(idPublisher, PublisherName) VALUES('$publisherID', '$publisherName')";
if(!mysqli_query($sql6,$con))
    {
        die('Error : ' . mysql_error());
    }

mysqli_close($con);

?>