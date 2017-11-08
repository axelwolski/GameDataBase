<?php

print "INSERT INTO `awolski`.`Game_has_Plateform` (`Game_idGame`, `Plateform_idPlateform`) VALUES \n";

for ($z = 1; $z <= 1000; $z++) {

$url="https://www.igdb.com/api/v1/games/" . $z . "?token=80SBYoz9FzbZK6VSqBr1lZIMaqtdtIbTF1CyO3pinLs";
$result = file_get_contents($url);
$json_object=json_decode($result, true);

$gam = $json_object['game'];
if($gam!=NULL){
    
    $plat = $json_object['game']['release_dates'];
    $i = 0;
    foreach ($plat as $v) {
        if($i!=0){
            print ",\n";
        }
        $plateform = $json_object['game']['release_dates'][$i]['platform_name'];
        if(strcmp($plateform, "Microsoft Windows")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'1')";
        }
        if(strcmp($plateform, "Xbox")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'2')";
        }
        if(strcmp($plateform, "PlayStation 3")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'3')";
        }
        if(strcmp($plateform, "PlayStation 4")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'4')";
        }
        if(strcmp($plateform, "Xbox 360")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'5')";
        }
        if(strcmp($plateform, "Xbox One")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'6')";
        }
        if(strcmp($plateform, "Linux")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'7')";
        }
        if(strcmp($plateform, "Mac")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'8')";
        }
        if(strcmp($plateform, "PC DOS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'9')";
        }
        if(strcmp($plateform, "Nintendo DS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'10')";
        }
        if(strcmp($plateform, "Amiga")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'11')";
        }
        if(strcmp($plateform, "PlayStation 2")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'12')";
        }
        if(strcmp($plateform, "Game Boy Advance")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'13')";
        }
        if(strcmp($plateform, "iOS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'14')";
        }
        if(strcmp($plateform, "Android")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'15')";
        }
        if(strcmp($plateform, "PlayStation")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'16')";
        }
        if(strcmp($plateform, "Apple II")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'17')";
        }
        if(strcmp($plateform, "Atari ST/STE")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'18')";
        }
        if(strcmp($plateform, "PlayStation Network")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'19')";
        }
        if(strcmp($plateform, "Wii")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'20')";
        }
        if(strcmp($plateform, "Sega Mega Drive/Genesis")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'21')";
        }
        if(strcmp($plateform, "Super Nintendo Entertainment System (SNES)")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'22')";
        }
        if(strcmp($plateform, "3DO Interactive Multiplayer")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'23')";
        }
        if(strcmp($plateform, "Atari Jaguar")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'24')";
        }
        if(strcmp($plateform, "Sega CD")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'25')";
        }
        if(strcmp($plateform, "Amiga CD32")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'26')";
        }
        if(strcmp($plateform, "FM Towns")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'27')";
        }
        if(strcmp($plateform, "Xbox Live Arcade")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'28')";
        }
        if(strcmp($plateform, "Wii U")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'29')";
        }
        if(strcmp($plateform, "Nintendo GameCube")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'30')";
        }
        if(strcmp($plateform, "Acorn Archimedes")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'31')";
        }
        if(strcmp($plateform, "Sega Saturn")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'32')";
        }
        if(strcmp($plateform, "PlayStation Portable")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'33')";
        }
        if(strcmp($plateform, "Commodore C64/128")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'34')";
        }
        if(strcmp($plateform, "PlayStation Vita")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'35')";
        }
        if(strcmp($plateform, "Windows Phone")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'36')";
        }
        if(strcmp($plateform, "Nintendo 64")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'37')";
        }
        if(strcmp($plateform, "Game Boy Color")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'38')";
        }
        if(strcmp($plateform, "Dreamcast")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'39')";
        }
        if(strcmp($plateform, "Game Boy")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'40')";
        }
        if(strcmp($plateform, "Sega Game Gear")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'41')";
        }
        if(strcmp($plateform, "Amstrad CPC")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'42')";
        }
        if(strcmp($plateform, "Atari 8-bit")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'43')";
        }
        if(strcmp($plateform, "MSX")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'44')";
        }
        if(strcmp($plateform, "Nintendo Entertainment System (NES)")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'45')";
        }
        if(strcmp($plateform, "ZX Spectrum")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'46')";
        }
        if(strcmp($plateform, "Atari 5200")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'47')";
        }
        if(strcmp($plateform, "Atari 7800")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'48')";
        }
        if(strcmp($plateform, "BBC Microcomputer System")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'49')";
        }
        if(strcmp($plateform, "Arcade")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'50')";
        }
        if(strcmp($plateform, "WiiWare")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'51')";
        }
        if(strcmp($plateform, "Philips CD-i")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'52')";
        }
        if(strcmp($plateform, "Sharp X68000")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'53')";
        }
        if(strcmp($plateform, "Sega Master System")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'54')";
        }
        if(strcmp($plateform, "TurboGrafx-16/PC Engine")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'55')";
        }
        if(strcmp($plateform, "Super Famicom")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'56')";
        }
        if(strcmp($plateform, "Web browser")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'57')";
        }
        if(strcmp($plateform, "Tapwave Zodiac")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'58')";
        }
        if(strcmp($plateform, "Family Computer Disk System")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'59')";
        }
        if(strcmp($plateform, "MSX2")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'60')";
        }
        if(strcmp($plateform, "Family Computer")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'61')";
        }
        if(strcmp($plateform, "Mobile")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'62')";
        }
        if(strcmp($plateform, "Virtual Console (Nintendo)")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'63')";
        }
        if(strcmp($plateform, "WonderSwan")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'64')";
        }
        if(strcmp($plateform, "Sega 32X")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'65')";
        }
        if(strcmp($plateform, "Ouya")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'66')";
        }
        if(strcmp($plateform, "Nintendo 3DS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'67')";
        }
        if(strcmp($plateform, "N-Gage")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'68')";
        }
        if(strcmp($plateform, "Apple IIGS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'69')";
        }
        if(strcmp($plateform, "BlackBerry OS")==0){
            print "('" . $json_object['game']['id'] . "',";
            print "'70')";
        }
        $i++;
    }
    print ",\n";
    
}
}

?>