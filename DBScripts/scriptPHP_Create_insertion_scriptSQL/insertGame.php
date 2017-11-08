<?php

print "INSERT INTO `awolski`.`Game` (`idGame`, `GameName`, `Rating`, `ReleaseDate`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    print "('" . $json_object['game']['id'] . "', ";
    print "'" . $json_object['game']['name'] . "', ";
    
    $rat = $json_object['game']['rating'];
    if($rat==NULL){
        print "'0', ";
    }
    else{
        print "'" . $json_object['game']['rating'] . "', ";
    }

    $dat = $json_object['game']['release_date'];

     if($dat==NULL){
        print "'0000-00-00'";
    }
    else{
        print "'" . $json_object['game']['release_date'] . "'";
    }

    print "),";

    print "\n";
}
}

?>