<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 21.02.2018
 * Time: 9:43
 */
//_pP-$2X=_.ft
require_once 'functsions.php';

loeVormFailist('vorm_aeg_21_02.html');

//väärtused
$hostname = "localhost";
$user = "matisine_admin";
$psswd = "_pP-$2X=_.ft";
$dbname = "matisine_php_tst";

//seotame andmebaas ja php
$cnnct = new mysqli($hostname,$user,$psswd, $dbname);

//kontrollime kas toimib või mitte
if ($cnnct ->connect_error){
    die("Failed: ". $cnnct->connect_error);
}
print("Connected");

//väärtused html vormist
$eesnimi = $cnnct->real_escape_string($_POST['eesNimi']);
$perenimi = $cnnct->real_escape_string($_POST['pereNimi']);
$aasta = $cnnct->real_escape_string($_POST['aasta']);
$kuu = $cnnct->real_escape_string($_POST['Kuud']);
$paev = $cnnct->real_escape_string($_POST['Paev']);

//loome tabel

$tab = "CREATE TABLE Reegestrerinud(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
eesnimi VARCHAR (30) not NULL ,
perenimi VARCHAR (30) NOT NULL ,
aasta INT NOT NULL ,
kuu VARCHAR (10) NOT NULL,
paev INT (3) NOT NULL
)";

if ($cnnct->query($tab) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $cnnct->error;
}


//
$query = "INSERT INTO Reegestrerinud(eesnimi,perenimi,aasta,kuu,paev) 
VALUES ('" . $eesnimi ."','" . $perenimi ."','" . $aasta . "','" . $kuu . "','" . $paev . "')
";

$tootab = $cnnct->query($query);

if (!$tootab){
    die("Ei saanud andmed sissesta: ".$cnnct->error);
}

mysqli_close($cnnct);
?>