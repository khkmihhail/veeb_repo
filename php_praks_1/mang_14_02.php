<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 14.02.2018
 * Time: 12:30
 */

require_once 'functsions.php';
//lisame session
session_start(); //annab võimalus kasutada $_session

loeVormFailist('vorm2.html');

if (!isset($_SESSION['serveriArv'])){
    $_SESSION['serveriArv'] = rand(1,50);
} else {
    $serveriArv = $_SESSION['serveriArv'];
}


//kas arv on edastatuv
if(!isset($_POST['arv'])){
    print('Sisesta täisarv.');
}
if ($_POST['arv'] >  $_SESSION['serveriArv']){
    printf("<br>%s on suurem, kui meie arv.", $_POST['arv']);
}
if ($_POST['arv'] <  $_SESSION['serveriArv']){
    printf("<br>%s on väiksem, kui meie arv.", $_POST['arv']);
}
if (abs($_POST['arv']- $_SESSION['serveriArv']) <=5){
    printf("<br>%s on lähedal", $_POST['arv']);
}
if ($_POST['arv'] ==  $_SESSION['serveriArv']){
    printf("<br>%s on arvasid ära!", $_POST['arv']);
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