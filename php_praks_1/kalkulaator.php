<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 30.01.2018
 * Time: 11:30
 */
$soogihind = 2.55; // ahjuliha
$soodustusProts = 15; // %
$opilaseToetus = 1.80; // eur, float
$i = 0;
if($soogihind > 0 and $soodustusProts > 0 and $opilaseToetus > 0) {
    $soodustus = $soogihind * ((100 - $soodustusProts) / 100);
    $hindOpilastele = $soogihind - $opilaseToetus;
    print("<br><h1>Söögi hind õpilasele $hindOpilastele</h1>");
}

?>