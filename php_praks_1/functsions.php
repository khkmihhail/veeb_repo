<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 8.02.2018
 * Time: 12:45
 */
//file for functions

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



?>