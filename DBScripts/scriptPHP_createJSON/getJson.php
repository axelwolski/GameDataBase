<?php

for ($z = 1; $z <= 1; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";

$result = file_get_contents($url);


$json_object=json_decode($result, true);

//var_dump($json_object); //indentation propre du json

$gam = $json_object['game'];

if($gam!=NULL){

    print "{\"game\":{";

    print "\"id\":\"" . $json_object['game']['id'] . "\",";

    print "\"name\":\"" . $json_object['game']['name'] . "\",";

    print "\"release_date\":\"" . $json_object['game']['release_date'] . "\",";

///// LES GENRES //////

    print "\"genres\":[";
    $gen = $json_object['game']['genres'];
    if($gen==NULL){
        print "{\"name\":\"unknown\"}";
    }
    else{
        $i = 0;
        foreach ($gen as $v) {
            if($i!=0){
                print ",";
            }
            print "{\"name\":\"" . $json_object['game']['genres'][$i]['name'] . "\"}";
            $i++;
        }
    }
    print "],";

///// LES THEMES /////

    print "\"themes\":[";
    $the = $json_object['game']['themes'];
    if($the==NULL){
        print "{\"name\":\"unknown\"}";
    }
    else{
        $i = 0;
        foreach ($the as $v) {
            if($i!=0){
                print ",";
            }
            print "{\"name\":\"" . $json_object['game']['themes'][$i]['name'] . "\"}";
            $i++;
        }
    }
    print "],";
    
    $rat = $json_object['game']['rating'];
    if($rat==NULL){
        print "\"rating\":0,";
    }
    else{
        print "\"rating\":" . $json_object['game']['rating'] . ",";
    }

////// LES DATES ET PLATEFORMES //////

    print "\"Platform\":[";
    $plat = $json_object['game']['release_dates'];
    $i = 0;
    foreach ($plat as $v) {
        if($i!=0){
            print ",";
        }
        print "{\"name\":\"" . $json_object['game']['release_dates'][$i]['platform_name'] . "\"}";
        $i++;
    }
    print "],";

////// LES DEVELOPPERS //////

    print "\"developer\":[";
    $comp = $json_object['game']['companies'];
    $i = 0;
    $a = 0;
    if($comp==NULL){
        print "{\"id\":\"0\",";
        print "\"name\":\"unknown\"}";
    }
    else{
        foreach ($comp as $v) {
            $dev = $json_object['game']['companies'][$i]['developer'];
            if($dev==1){
                if($a!=0){
                    print ",";
                }
                print "{\"id\":\"" . $json_object['game']['companies'][$i]['id'] . "\",";
                print "\"name\":\"" . $json_object['game']['companies'][$i]['name'] . "\"}";
                $a++;
            }
            $i++;
        }
        print "],";
    }

////// LES EDITEURS //////

    print "\"publisher\":[";
    $comp = $json_object['game']['companies'];
    $i = 0;
    $a = 0;
    if($comp==NULL){
        print "{\"id\":\"0\",";
        print "\"name\":\"unknown\"}";
    }
    else{
        foreach ($comp as $v) {
            $pub = $json_object['game']['companies'][$i]['publisher'];
            if($pub==1){
                if($a!=0){
                    print ",";
                }
                print "{\"id\":\"" . $json_object['game']['companies'][$i]['id'] . "\",";
                print "\"name\":\"" . $json_object['game']['companies'][$i]['name'] . "\"}";
                $a++;
            }
            $i++;
        }
        print "]";
    }

    print "}}";

    print "\n\n";
}
}

?> 