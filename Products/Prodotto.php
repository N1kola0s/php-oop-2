<?php
/* implemento un trait */

trait Vacanze{
    public $comunicazione;

    public function chiusuraEstiva(){
        /* imposto una stringa che richiamerò in ogni classe */
        $this -> comunicazione = 'RICORDIAMO: Lo shop resterà chiuso dal 1 al 31 Agosto';
    }
}

/* Implemento una Classe genitore */

class Prodotto {

    use Vacanze;


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