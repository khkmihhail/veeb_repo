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

//func for forms
//call html from vorm.html ja show
function loeVormFailist($failnimi){
    //kontrollime kas fail olemas
    if (file_exists($failnimi) and is_file($failnimi) and is_readable($failnimi)){
        //loeb fail
        $fp = fopen($failnimi, 'r');
        $sisu = fread($fp, filesize($failnimi));//loeme faili sisu
        $fp = fclose($fp); //paneme ühendus failiga kinni

    } else {
        printf('<br>Probleem on %s', $failnimi);
    };
    print ($sisu);
};




?>