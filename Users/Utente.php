<?php

/* Implemento una Classe genitore */

class Utente {

    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $cartaValida;

    function __construct(String $nome, String $cognome, String $email, String $indirizzo, bool $cartaValida )
    {
        $this -> nome = $nome;
        $this -> categoria = $cognome;
        $this -> descrizione = $email;
        $this -> prezzo = $indirizzo;
        $this -> cartaValida = $cartaValida;
    }
}

?>