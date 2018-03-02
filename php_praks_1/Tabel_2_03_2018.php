<?php
/**
 * Created by PhpStorm.
 * User: mihhail.matisinets
 * Date: 2.03.2018
 * Time: 9:54
 */

class Tabel{
    public $sisu = array();
    public $pealkirjad = array();
    public $veerguArv;

    public function __construct($pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veerguArv = count($pealkirjad);

    }

    public function lisaRida($rida){
        //tegin ühes rea.
        (count($rida) != $this->veerguArv) ? : array_push($this->sisu, $rida);

    }
    //tabeli printimine.
    public function printTabel(){
        echo '<pre>';

        foreach ($this->pealkirjad as $pealkiri) {
            printf('<td> %s </td>', $pealkiri);
        }

        echo "\n";

        foreach ($this->sisu as $rida){
            foreach ($rida as $reaEl){
                printf( " %s ", $reaEl);
            }
            echo "\n";
        }

        echo '</pre>';
    }
}

$muTabel = new Tabel(array('w','e','r','t'));
$muTabel->lisaRida(array(1, 4, 5,4));
$muTabel->lisaRida(array(2, 3, 7,9));

echo '<pre>';
print_r($muTabel);
echo '</pre>';
$muTabel->printTabel();
