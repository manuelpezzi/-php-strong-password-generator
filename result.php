<?php 

session_start();

$risultato = isset($_SESSION['risultato'])? $_SESSION['risultato'] : null;

unset($_SESSION['risultato']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultato password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
        .error {
            color: red;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
<div class='container'>
    <h1>Risultato password</h1>
    <?php 
    if($risultato !==null){
        echo $risultato;
    }else{
        echo '<div class="result error">Nessun risultato disponibile. Torna indietro e genera una password.</div>';
    }
    ?>
     <a href="index.php">Torna al generatore</a>
</div>
</body>
</html>