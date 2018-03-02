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
        $this ->pealkirjad = $pealkirjad;
        $this ->veerguArv = count($pealkirjad);

    }

    /*static*/ public function lisaRida($rida){
        /*
        if(count($rida) != $this ->veerguArv){
            return false;
        }
        array_push($this->sisu, $rida);
        return true;
        */
        (count($rida) != $this ->veerguArv) ? :
            array_push($this->sisu, $rida);

    }

    /*static*/ public function printTabel(){
        echo '<pre>';
        foreach ($this->pealkirjad as $pealkiri) {
            printf('<b> %s </b>', $pealkiri);
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