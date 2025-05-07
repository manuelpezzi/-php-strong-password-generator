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
    </div>
</body>
</html>