<?php

class Auto {

    public $marca;
    public $modello;
    public $anno;
    public static $contatore;

    public function __construct($marca, $modello, $anno) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->anno = $anno;
        self::$contatore++;
    }

    public function mostraAuto(){
        echo " La marca dell'auto è $this->marca, \n il suo modello è $this->modello, \n mentre il suo anno di produzione è $this->anno";
    }
    public static function contatoreAuto(){
        echo "\n Nel garage ci sono " . self::$contatore . " Auto parcheggiate!";
    }

}

$auto1 = new Auto("Mercedes", "Cla", 2023);
$auto2 = new Auto("Toyota", "Corolla", 2021);
$auto3 = new Auto("Fiat", "Panda", 1999);
$auto4 = new Auto("Audi", "A3", 2021);
$auto5 = new Auto("Seat", "Ibiza", 2017);

$auto1->mostraAuto();
$auto2->mostraAuto();
$auto3->mostraAuto();
$auto4->mostraAuto();
$auto5->mostraAuto();

Auto::contatoreAuto();