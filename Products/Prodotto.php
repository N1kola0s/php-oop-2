<?php

/* Implemento una Classe genitore */

class Prodotto {

    public $nome;
    public $categoria_prodotto;
    public $categoria_animale;
    public $descrizione;
    public $prezzo;
    public $disponibilita;

    function __construct(String $nome, String $categoria_prodotto, String $categoria_animale, String $descrizione, mixed $prezzo, int $disponibilita)
    {
        $this -> nome = $nome;
        $this -> categoria_prodotto = $categoria_prodotto;
        $this -> categoria_animale = $categoria_animale;
        $this -> descrizione = $descrizione;
        $this -> prezzo = $prezzo;
        $this -> disponibilita = $disponibilita;
    }
}



?>