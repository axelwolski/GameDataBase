<?php

print "INSERT INTO `awolski`.`Game_has_Genre` (`Game_idGame`, `Genre_idGenre`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    $gen = $json_object['game']['genres'];
    if($gen==NULL){
        print "('" . $json_object['game']['id'] . "',";
        print "'11'),\n";
    }
    else{
        $i = 0;
        foreach ($gen as $v) {
            if($i!=0){
                print ",\n";
            }
            $genre = $json_object['game']['genres'][$i]['name'];
            if(strcmp($genre, "Shooter")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'1')";
            }
            if(strcmp($genre, "Role-playing (RPG)")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'2')";
            }
            if(strcmp($genre, "Strategy")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'3')";
            }
            if(strcmp($genre, "Turn-based strategy (TBS)")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'4')";
            }
            if(strcmp($genre, "Tactical")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'5')";
            }
            if(strcmp($genre, "Fighting")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'6')";
            }
            if(strcmp($genre, "Adventure")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'7')";
            }
            if(strcmp($genre, "Real Time Strategy (RTS)")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'8')";
            }
            if(strcmp($genre, "Simulator")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'9')";
            }
            if(strcmp($genre, "Point-and-click")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'10')";
            }
            if(strcmp($genre, "Hack and slash/Beat 'em up")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'12')";
            }
            if(strcmp($genre, "Puzzle")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'13')";
            }
            if(strcmp($genre, "Platform")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'14')";
            }
            if(strcmp($genre, "Racing")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'15')";
            }
            if(strcmp($genre, "Arcade")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'16')";
            }
            if(strcmp($genre, "Indie")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'17')";
            }
            if(strcmp($genre, "Sport")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'18')";
            }
            if(strcmp($genre, "Quiz/Trivia")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'19')";
            }
            if(strcmp($genre, "Pinball")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'20')";
            }
            $i++;
        }
    }
    print ",\n";
    
}
}

?>