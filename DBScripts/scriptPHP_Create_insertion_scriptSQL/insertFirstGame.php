<?php

print "INSERT INTO `awolski`.`FirstGame` (`idGame`, `GameName`, `GameGenre`, `GameTheme`, `Rating`, `ReleaseDate`, `GamePlateform`, `GameDeveloper`, `GamePublisher`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    print "('" . $json_object['game']['id'] . "', ";
    print "'" . $json_object['game']['name'] . "', ";
    
///// LES GENRES //////

    $gen = $json_object['game']['genres'];
    if($gen==NULL){
        print "'unknown', ";
    }
    else{
        print "'" . $json_object['game']['genres'][0]['name'] . "', ";
    }

///// LES THEMES /////

    $the = $json_object['game']['themes'];
    if($the==NULL){
        print "'unknown', ";
    }
    else{
        print "'" . $json_object['game']['themes'][0]['name'] . "', ";
    }
   
    $rat = $json_object['game']['rating'];
    if($rat==NULL){
        print "'0', ";
    }
    else{
        print "'" . $json_object['game']['rating'] . "', ";
    }

    if($dat==NULL){
        print "'0000-00-00', ";
    }
    else{
        print "'" . $json_object['game']['release_date'] . "', ";
    }

////// LES DATES ET PLATEFORMES //////

    print "'" . $json_object['game']['release_dates'][0]['platform_name'] . "', ";

////// LES DEVELOPPERS //////

    $comp = $json_object['game']['companies'];
    if($comp==NULL){
        print "'unknown', ";
    }
    else{
        print "'" . $json_object['game']['companies'][0]['name'] . "', ";
    }

////// LES EDITEURS //////

    $comp = $json_object['game']['companies'];
    if($comp==NULL){
        print "'unknown'";
    }
    else{
        print "'" . $json_object['game']['companies'][0]['name'] . "'";
    }

    print "),";

    print "\n";
}
}

?>
