<?php 
session_start();

require_once 'functions.php';

$risultato = gestisciInput();

if ($risultato !== null) {
    $_SESSION['risultato'] = $risultato;
    header('Location: result.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Generatore di Password Sicure</h1>
        <form method="GET" action="index.php">
            <label for="lunghezza">Lunghezza della password (minimo 5):</label>
            <input type="number" id="lunghezza" name="lunghezza" min="5" max ='20' required>
            <button type="submit">Genera Password</button>
        </form>
    </div>
</body>
</html>