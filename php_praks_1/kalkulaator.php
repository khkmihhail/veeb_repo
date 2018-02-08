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
$a = Hind(2.65, true, true);
echo "Hind õpilasele on $a";


//uurin string formateerimine
$a = Hind(2.65,true,false);
printf("<br>Hind sooduskaardi omanikule %.2f", $a);

?>