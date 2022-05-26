<?php

/* Implemento una Classe genitore */

class Utente {

    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $cartaValida;
    public $registrazione = false;
    public $sconto = 0;

    function __construct(String $nome, String $cognome, String $email, String $indirizzo, bool $cartaValida, bool $registrazione, int $sconto)
    {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this -> email = $email;
        $this -> indirizzo = $indirizzo;
        $this -> cartaValida = $cartaValida;
        $this -> sconto = $sconto;
        $this -> registrazione = $registrazione;
    }

    public function setSconto($registrazione){
        if ($registrazione === true){
            $this -> sconto = 0.20;
        }
    }

    public function getSconto(){
        return $this -> sconto; 
    }
}

?>