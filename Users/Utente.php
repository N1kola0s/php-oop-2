<?php

/* Implemento una Classe genitore */
/* implemento la classe utente */
class Utente {
    use Vacanze;
    /* dichiaro le variabili che caratterizzano la classe */
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $cartaValida;
    public $registrazione = false;
    public $sconto = 0;

    /* attribuisco tramite un metodo cunstruct le singole variabili e il tipo*/
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

    /* implemento un metodo che setti uno sconto agli utenti che abbiano effettuato la registrazione, nella fattispecie in caso di oggetti/istanze abbiano nella variabile $registrazione il valore booleano 'true'  */
    public function setSconto($registrazione){
        if ($registrazione === true){
            $this -> sconto = 0.20;
        }
    }

    /* implemento un metodo che restituisca il valore settato dello sconto */

    public function getSconto(){
        return $this -> sconto; 
    }
}

?>