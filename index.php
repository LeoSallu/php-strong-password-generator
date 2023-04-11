<?php
$number = $_GET['input'];
function randomPassword($number)
{
    $letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $special = '!@#$%^&*()_+-={}[]|:;<>,.?/';
    $pass = array();
    $length = strlen($letter) - 1; 
    for ($i = 0; $i < $number ; $i++) {
        $n = rand(0, $length);
        $pass[] = $letter[$n];
    }
    return implode($pass); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="input"><h4>Inserisci il numero di caratteri della tua password con un massimo di 16 caratteri</h4></label>
        <input name="input" type="number">
        <button type="submit">Invia</button>
    </form>
    <?php if ($number <= 16 && $number > 0) { ?>
        <h1>La tua password è </h1>
        <p><?php echo randomPassword($number);?></p>
        <?php } else {?>
            <p>Il numero di caratteri non è valido</p>
        <?php } ?>
</body>
</html>