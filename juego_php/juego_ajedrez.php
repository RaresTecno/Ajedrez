<?php
class juego{
    static $turnoBlanco = "blanco";
    static $turnoNegro = "negro";
    public $piezas = array(
        "p-1" => 1,
        "p-2" => 1,
        "p-3" => 1,
        "p-4" => 1,
        "p-5" => 1,
        "p-6" => 1,
        "p-7" => 1,
        "p-8" => 1,
        "R-1" => 1,
        "R-2" => 1,
        "N-1" => 1,
        "N-2" => 1,
        "B-1" => 1,
        "B-2" => 1,
        "Q" => 1,
        "K" => 1,
        "P-1" => 0,
        "P-2" => 0,
        "P-3" => 0,
        "P-4" => 0,
        "P-5" => 0,
        "P-6" => 0,
        "P-7" => 0,
        "P-8" => 0,
    );

    // Piezas perdidas = -1
    public $piezasPerdidas = array(

    );

    public function mover_pieza($pieza, $posicion){
        
    }
    public function perder_pieza($pieza){

    }

}
?>