<?php

print "INSERT INTO `awolski`.`Genre` (`GenreName`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){

    $gen = $json_object['game']['genres'];
    if($gen==NULL){
        print "('unknown'),\n";
    }
    else{
        $i = 0;
        foreach ($gen as $v) {
            if($i!=0){
                print ",\n";
            }
            print "('" . $json_object['game']['genres'][$i]['name'] . "')";
            $i++;
        }
    }
    print ",\n";
    
}
}

?>