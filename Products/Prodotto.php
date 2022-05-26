<?php

/* Implemento una Classe genitore */

class Prodotto {

    protected $nome;
    protected $categoria;
    protected $descrizione;
    protected $prezzo;

    function __construct(String $nome, String $categoria, String $descrizione, mixed $prezzo)
    {
        $this -> nome = $nome;
        $this -> categoria = $categoria;
        $this -> descrizione = $descrizione;
        $this -> prezzo = $prezzo;
    }
}



?>