<?php

$password = "";

if (isset($_GET['length'])) {

    // vari caratteri per la password
    $uppercase = "ABCDEFGHILMNOPQRSTUVZ";
    $lowercase = "abcdefghilmnopqrstuvz";
    $numbers = "0123456789";
    $symbols = "!@#$^&*()";

    // variabili che include questi caratteri insieme
    $allChars = $uppercase . $lowercase .  $numbers . $symbols;

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
