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

//Massivid
//loome massivi(arrays)
//kasutame selleks kujul (sooduskart, kasOledOpilane)
$opilane = array(true, true); //olemas soodus ja oled Õpilane
$opetaja = array(true, false);
$kulaline = array(false, false);
//loome uks suur array
//kasutajad on tabel
$kasutajad = array(
    array(true, true), //õpilased
    array(true, false), //õpetajad
    array(false, false) //külalised
);
//dictionary loomine
//'key' => value
$kasutajad2 = array(
  array(
      'roll'=>'õpilane',
      'soodus' => true,
      'opilaskaart'=>true
  ),
  array(
      'roll'=>'õpetaja',
      'soodus' => true,
      'opilaskaart'=>false
  ),
  array(
      'roll'=>'külaline',
      'soodus' => false,
      'opilaskaart'=>false
  )
);


//Testid
//func call
$a = Hind(2.65, true, true);
echo "<br>Hind õpilasele on $a";
//uurin string formateerimine
$a = Hind(2.65,true,false);
printf("<br>Hind sooduskaardi omanikule %.2f", $a);
//testin massivid
$a = Hind(2.65,$opilane[0],$opilane[1]);
printf("<br>Hind sooduskaardi omanikule %.2f", $a);

$a = Hind(2.65,$opetaja[0],$opetaja[1]);
printf("<br>Hind sooduskaardi omanikule %.2f", $a);

print ("<br>");
print ("<br/>For tsükkel testimine:");

//loome foreach ja for trükkelid ja testime tabel.
//for trükkel loomine
for ($i =0; $i < count($kasutajad); $i++){
    $a = Hind(2.65, $kasutajad[$i][0], $kasutajad[$i][1]);
    printf("<br>Hind sooduskaardi omanikule %.2f", $a);
};

print ("<br>");
print ("<br/> Foreach tsükkel testimine:");
//foreach trükkel rakendamine
foreach ($kasutajad as $value) {

};




?>