<?php

print "INSERT INTO `awolski`.`Game_has_Theme` (`Game_idGame`, `Theme_idTheme`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    $gen = $json_object['game']['themes'];
    if($gen==NULL){
        print "('" . $json_object['game']['id'] . "',";
        print "'4'),\n";
    }
    else{
        $i = 0;
        foreach ($gen as $v) {
            if($i!=0){
                print ",\n";
            }
            $genre = $json_object['game']['themes'][$i]['name'];
            if(strcmp($genre, "Action")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'1')";
            }
            if(strcmp($genre, "Fantasy")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'2')";
            }
            if(strcmp($genre, "Stealth")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'3')";
            }
            if(strcmp($genre, "Horror")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'5')";
            }
            if(strcmp($genre, "Thriller")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'6')";
            }
            if(strcmp($genre, "Science fiction")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'7')";
            }
            if(strcmp($genre, "Survival")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'8')";
            }
            if(strcmp($genre, "Warfare")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'9')";
            }
            if(strcmp($genre, "Comedy")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'10')";
            }
            if(strcmp($genre, "Sandbox")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'11')";
            }
            if(strcmp($genre, "Open world")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'12')";
            }
            if(strcmp($genre, "Historical")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'13')";
            }
            if(strcmp($genre, "4X (explore, expand, exploit, and exterminate)")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'14')";
            }
            if(strcmp($genre, "Kids")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'15')";
            }
            if(strcmp($genre, "Business")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'16')";
            }
            if(strcmp($genre, "Non-fiction")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'17')";
            }
            if(strcmp($genre, "Drama")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'18')";
            }
            if(strcmp($genre, "Educational")==0){
                print "('" . $json_object['game']['id'] . "',";
                print "'19')";
            }
            $i++;
        }
    }
    print ",\n";
    
}
}

?>