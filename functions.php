<?php

$password = "";

if (isset($_GET['length'])) {

    // vari caratteri per la password
    $uppercase = "ABCDEFGHILMNOPQRSTUVZ";
    $lowercase = "abcdefghilmnopqrstuvz";
    $numbers = "0123456789";
    $symbols = "!@#$^&*()";

    $allChars = "";

    // controlli per gestione lettere, numeri e simboli
    if(isset($_GET['letters']) && $_GET['letters'] == 'on'){
        $allChars .= $uppercase . $lowercase;
    }

    if(isset($_GET['numbers']) && $_GET['numbers'] == 'on'){
        $allChars .= $numbers;
    }

    if(isset($_GET['symbols']) && $_GET['symbols'] == 'on'){
        $allChars .= $symbols;
    }

     // var_dump ($allChars);

    for($i=0; $i < $_GET['length']; $i++){
        // prendere un carattere randomico dalla stringa
        $randomPosition = rand(0, strlen($allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);

        // aggiungere alla stringa della password per x volte
        $password .= $randomCharacter;
    }

   // echo $password;
}

?>
