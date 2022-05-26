<?php 

/* Implemento una classe figlia di Utente */

class UtenteRegistrato extends Utente {
    protected $username;
    protected $password;

    /* richiamo le variabili che eredita dalla classe genitore e aggiungo nuove variabili del figlio */
    public function __construct(String $nome, String $cognome, String $email, String $indirizzo, bool $cartaValida, String $username, String $password)
    /* imposto un metodo construct per attribuire i valori alle variabili ereditate con parent:: e singolarmente quelle del figlio  */
    {
        parent::__construct($nome, $cognome, $email, $indirizzo, $cartaValida);
        $this -> username = $username; /* aggiunta variabile che si differenzia nel figlio */
        $this -> password = $password; /* aggiunta variabile che si differenzia nel figlio */
    }

}