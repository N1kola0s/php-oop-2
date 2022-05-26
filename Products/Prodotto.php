<?php

/* Implemento una Classe genitore */

class Prodotto {

    public $nome;
    public $categoria;
    public $descrizione;
    public $prezzo;
    public $disponibilita;

    function __construct(String $nome, String $categoria, String $descrizione, mixed $prezzo, int $disponibilita)
    {
        $this -> nome = $nome;
        $this -> categoria = $categoria;
        $this -> descrizione = $descrizione;
        $this -> prezzo = $prezzo;
        $this -> disponibilita = $disponibilita;
    }
}



?>