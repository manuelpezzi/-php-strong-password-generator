<?php 
function generaPassword($lunghezza) {
    $caratteri = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
        '!', '@', '#', '$', '%', '^', '&', '*', '(', ')'
    ];
    $password = '';
    $numCaratteri = 72; // Numero totale di caratteri nell'array
    for ($i = 0; $i < $lunghezza; $i++) {
        $indiceCasuale = rand(0, $numCaratteri - 1);
        $password .= $caratteri[$indiceCasuale];
    }
    return $password;
}

// Funzione per gestire l'input GET e restituire l'output HTML
function gestisciInput() {
    if (isset($_GET['lunghezza'])) {
        $lunghezza = filter_input(INPUT_GET, 'lunghezza', FILTER_VALIDATE_INT);
        if ($lunghezza !== false && $lunghezza >= 6) {
            $password = generaPassword($lunghezza);
            return '<div class="result">Password generata: <strong>' . htmlspecialchars($password) . '</strong></div>';
        } else {
            return '<div class="result error">Errore: Inserisci un numero valido (minimo 6).</div>';
        }
    }
    return null; // Nessun output se non c'è input
}
        
        ?>