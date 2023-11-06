<?php
// ESERCIZIO 1: Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array (FUNZIONANTE)


// $media = 0; // variabile di appoggio per la media
// $numeriPari = 0; // variabile di appoggio per il conto dei numeri pari
// $numeri = ["1", "2", "4", "7"];
//     foreach ($numeri as $numero) {
//     if ($numero % 2 === 0){
//         $media += $numero; // Aggiungi il numero alla somma
//         $numeriPari++;        // Incrementa il conteggio
//     }
// }

// // Calcola la media
// if ($numeriPari > 0) {
//     $mediafinale = $media / $numeriPari;
//     echo "La media dei numeri pari è: " . $mediafinale;
// } else {
//     echo "Nessun numero pari nell'array.";
// }

// ESERCIZIO 2: -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ]; (FUNZIONANTE)

// $users = [
//     ["nome" => "Mario", "cognome" => "Rossi", "genere" => "M"],
//     ["nome" => "Maria", "cognome" => "Bianchi", "genere" => "F"],
//     ["nome" => "Alberto", "cognome" => "Arcangeloni", "genere" => "M"]
// ];

// foreach ($users as $user) {
//     if ($user["genere"] === "M" ){
//         echo "Buongiorno Signor " . $user["nome"] . " " . $user["cognome"] . "\n";
//     }else if($user["genere"] === "F" ){
//         echo "Buongiorno Signora " . $user["nome"] . " " . $user["cognome"] . "\n";
//     }
// }

// ESERCIZIO 3 **ESERCIZI PHP 1**
// - -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ($i = 1; $i <= 100; $i++) { 

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY" . "\n";
    } elseif ($i % 5 == 0){
        echo "JAVASCRIPT" . "\n";
    } elseif ($i % 3 == 0){
        echo "PHP" . "\n";
    }else{
        echo  $i. "\n";
    };

}
?>