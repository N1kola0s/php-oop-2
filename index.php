<?php

/* 

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS: Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

Tips:
Qualora aveste bisogno di passare ad un metodo un tipo di dato particolare, come ad esempio un oggetto che avete creato voi, potete usarlo come facciamo di solito al posto di Type $variable.
Infondo anche le nostre classi sono dei tipi di dato.

Ad esempio
public function functionName( MyClass $variable, String $variable2, Int $variable3 ) {
# Implementazione
} 


*/

/* Richiamo la classe genitore dei prodotti */
require_once __DIR__."/Products/Prodotto.php";

/* Richiamo la classe genitore degli utenti  */
require_once __DIR__."/Users/Utente.php";

/* Richiamo la classe figlia di Utenti */
require_once __DIR__."/Users/Utente_registrato.php";



$utente= new Utente ('Giovanni', 'Rauso', 'giovanni.rauso@libero.it', 'Via Roma, Caserta', true, false,0);

var_dump($utente);

$utenteRegistrato = new UtenteRegistrato( 'Pasquale', 'Palmieri', 'pasquale.palmieri@libero.it','Via Trieste, Caserta', true, 0,'blabla','xxx', false);

$utenteRegistrato -> setRegistrazione();
$utenteRegistrato -> setSconto(true);
var_dump($utenteRegistrato);




