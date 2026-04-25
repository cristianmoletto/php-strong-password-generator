<?php
    require_once './functions.php';

    if($password != ""){
        // gestione della sessione
        session_start();
        $_SESSION['password'] = $password;

        // dirotta nella pagina dei risultati
        header("Location: ./result.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera la password</title>
</head>

<body>
    <h1>
        Generatore di password
    </h1>
    <hr>

    <form method="GET">
    <label for="length">Lunghezza password</label>
    <input name="length" id="length" type="number" min="5" max="20">

    <br>
    <br>
    <button type="submit">Genera</button>
    </form>
    <br>
    <hr>
    <?php if($password != ""){
        ?>
    <h2>La tua password:</h2>
    <pre><?php echo $password?></pre>
    <?php
    }
    ?>

</body>

</html>