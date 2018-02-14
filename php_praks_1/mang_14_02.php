<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 14.02.2018
 * Time: 12:30
 */

require_once 'functsions.php';

loeVormFailist('vorm2.html');


$arv = $_POST['arv'];
$juhuslikArv = rand(1,50);

//kas arv on edastatuv
if(!isset($_POST['arv'])){
    print('Sisesta täisarv.');
}
if ($arv > $juhuslikArv){
    printf("<br>%s on suurem, kui meie arv.", $arv);
}
if ($arv < $juhuslikArv){
    printf("<br>%s on väiksem, kui meie arv.", $arv);
}
if (abs($arv-$juhuslikArv) <=5){
    printf("<br>%s on lähedal", $arv);
}
if ($arv == $juhuslikArv){
    printf("<br>%s on arvasid ära!", $arv);
}




/*
if(isset($_POST['arv'])){
    $juhuslikArv = rand(1,50);
} elseif ($_POST['arv'] > $juhuslikArv){
    $msg = $_POST['arv'];
    printf('<br>%s on suurem', $msg);
} elseif ($_POST['arv'] < $juhuslikArv){
    $msg = $_POST['arv'];
    printf('<br>%s on väiksem', $msg);
}
*/







?>