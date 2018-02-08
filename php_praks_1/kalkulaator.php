<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 30.01.2018
 * Time: 11:30
 */
//uus funktsioon. 8.02.2018
function Hind($taishind, $sooduskart, $kasOledOpilane)
{
    $soodustusProts = 15; // %
    $soodustus = $taishind;
    $opilaseToetus = 1.80; // eur, float
    if ($sooduskart) {
        $soodustus = $taishind * ((100 - $soodustusProts) / 100);
    }
    if($kasOledOpilane){
        $soodustus = $soodustus - $opilaseToetus;
    }
    return $soodustus;
}
//func call
Hind()


$soogihind = 2.55; // ahjuliha
$i = 0;
if($soogihind > 0 and $soodustusProts > 0 and $opilaseToetus > 0) {

    $hindOpilastele = $soodustus - $opilaseToetus;
    print("<br><h1>Söögi hind õpilasele $hindOpilastele</h1>");
}

?>