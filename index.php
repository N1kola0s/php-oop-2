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


/* creo oggetto utente non registrato */
$utente= new Utente ('Giovanni', 'Rauso', 'giovanni.rauso@libero.it', 'Via Roma, Caserta', true, false,0);
/* richiamo il trait Vacanze nella classe Utente senza che sia stata usata nella specifica classe ma solo nel genitore*/
$utente -> chiusuraEstiva();
/* dumpo utente a schermo */
var_dump($utente);


/* creo oggetto utente registrato */

$utenteRegistrato = new UtenteRegistrato( 'Pasquale', 'Palmieri', 'pasquale.palmieri@libero.it','Via Trieste, Caserta', true, 0,'blabla','xxx', false);

/* dumpo a schermo oggetto figlio utente non registrato dopo aver invocato metodo che cambia valore della variabile Registrazione il metodo che restituisce lo sconto del 20%  */

$utenteRegistrato -> setRegistrazione();
$utenteRegistrato -> setSconto(true);
/* richiamo il trait Vacanze nella classe figlia di Utente */
$utenteRegistrato-> chiusuraEstiva();
var_dump($utenteRegistrato);


/* creo oggetti per la classe Prodotto  */

$crocchette = new Prodotto ('friskies','cibo','cane', 'Le crocchette per il tuo cane con Manzo, Cereali e verdure',23.43, 50 );
/* richiamo il trait Vacanze nella classe Prodotto */
$crocchette -> chiusuraEstiva();


$cuccia = new Prodotto ('Letto Basic', 'oggetto', 'gatto', 'Letto per gatti in morbida finta pelliccia rivestita esternamente con resistente tessuto.', 15.99, 3 );
/* richiamo il trait Vacanze nella classe Prodotto */
$cuccia->chiusuraEstiva();

$pallina = new Prodotto ('Palla- Matix', 'giochi', 'gatto', 'Simpaticissima pallina in gomma per il tuo migliore amico a quattro zampe', 5, 20 );
/* richiamo il trait Vacanze nella classe Prodotto */
$pallina->chiusuraEstiva();

$corda = new Prodotto ('Trixie - Corda Osso', 'giochi', 'cane', 'Trixie ha studiato una linea di giochi ideali non solo a far divertire il tuo cane, ma anche utilissimi per aiutare il tuo pet a mantenere la sua igiene orale. Con la coloratissima corda per cani di Trixie in misto cotone, la cura dell’igiene orale del tuo cane sarà molto più divertente del previsto!', 4.13, 0);
/* richiamo il trait Vacanze nella classe Prodotto */
$corda->chiusuraEstiva();

/* aggiungo un ipotetico oggetto con prezzo uguale a zero in modo da attivare un exception definito in prodotto */

/* $paperella = new Prodotto ('Paperella- Matix', 'giochi', 'cane', 'Simpaticissima paperella in gomma per il tuo migliore amico a quattro zampe', 0, 20 );
$paperella->verificaPrezzo(0);
var_dump($paperella);  */

/* se decommento la parte di codice sopra a questo comemento uscirà l'errore (in corrispondenza di un valore pari a zero) e comparirà la stringa inserita nel metodo verificaPrezzo' con all'interno un exceptions' */


/* dichiaro un array vuoto e pusho all'interno i singoli oggetti prodotti creati e lo dumpo a schermo */

$prodotti=[];
array_push($prodotti, $crocchette, $cuccia, $pallina, $corda);
var_dump($prodotti);




