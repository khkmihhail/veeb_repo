<html>
<head>
    <title>Some test strings</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 30.01.2018
 * Time: 9:54
 */

// väljastamine
echo "<h1>Hi, first string in php</h1>";

$x = 'veebiprogrammeerimine';

print("Aine - $x");
print"<br>";
print("<br>6 + 2 = ").(6+2);
print("<br>6 * 2 = ").(6+2);
print("<br>45 / 32 = ").(float)(45/32);

$eesNimi = "Mihhail"; // str, eesnimi
$pereNimi = "Matisinets"; // str, perenimi
$bussiNumber = "4"; //int, bussi number

print("<br>$eesNimi $pereNimi sõidab bussiga $bussiNumber.");

define('NUMBER_PI', 3.14);
print("<br>");
print("PI võrdub ") . NUMBER_PI;

print"</br>";
$i = 0;
$num = 40;

while( $i < 10) {
    $num--;
    $i++;
}

echo ("i = $i and num = $num")

?>
</body>
</html>