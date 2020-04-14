<?php

namespace Classes\Modelo;

class Clima {

    public $codCidade;
    public $cidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $porDoSol;
    public $humidade;
    public $pressao;
    public $descricao;
    public $icone;

    //Converte de kelvin para celsius
    public function getTemperaturaCelsius() : float {
        return $this->temperatura - 273;
    }
    
    //Convete de kelvin para fahrenheit
    public function getTemperaturaFahrenheit() : float {
        return ((($this->temperatura - 273)*1.8)+32);
        //return $resultadoFahrenheit;
        
    }
    //Converte m/s em km/h
    public function getVelocidadeVento() : float {  
        return $this->velocidadeVento * 3.6; 
    }
    
    //Converte segundos em Data
   //public function getNascerDoSol() : float {
    // return date('d/m/Y H:i', ($clima->nascerDoSol)-(10783));
   // }

}

?>