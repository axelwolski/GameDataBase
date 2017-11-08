<?php

print "INSERT INTO `awolski`.`Publisher` (`idPublisher`, `PublisherName`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    $comp = $json_object['game']['companies'];
    $i = 0;
    $a = 0;
    if($comp==NULL){
        print "('0', ";
        print "'unknown'),\n";
    }
    else{
        foreach ($comp as $v) {
            $dev = $json_object['game']['companies'][$i]['publisher'];
            if($dev==1){
                if($a!=0){
                    print ",\n";
                }
                print "('" . $json_object['game']['companies'][$i]['id'] . "', ";
                print "'" . $json_object['game']['companies'][$i]['name'] . "')";
                $a++;
            }
            $i++;
        }
        print ",\n";
    }
}
}

?>