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
            <label for="lunghezza">Lunghezza della password (minimo 6):</label>
            <input type="number" id="lunghezza" name="lunghezza" min="6" required>
            <button type="submit">Genera Password</button>
        </form>
        <?php 
function generaPassword($lunghezza){
    $caratteri = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
        '!', '@', '#', '$', '%', '^', '&', '*', '(', ')'
    ];
    $password = '';
   $numCaratteri = 72;
   for($i = 0; $i < $lunghezza; $i++){
    $indiceCasuale = rand(0,$numCaratteri - 1);
    $password .= $caratteri[$indiceCasuale];
   };
   return $password;

}
if (isset($_GET['lunghezza'])) {
    $lunghezza = filter_input(INPUT_GET, 'lunghezza', FILTER_VALIDATE_INT);
    if ($lunghezza !== false && $lunghezza >= 6) {
        $password = generaPassword($lunghezza);
        echo '<div class="result">Password generata: <strong>' . htmlspecialchars($password) . '</strong></div>';
    } else {
        echo '<div class="result error">Errore: Inserisci un numero valido (minimo 6).</div>';
    }
}

        
        
        
        ?>
    </div>
</body>
</html>