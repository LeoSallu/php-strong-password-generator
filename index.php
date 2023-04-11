<?php
$number = $_GET['input'];
function randomPassword($number)
{
    $letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
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
        <input name="input" type="number" placeholder="Inserire numero caratteri per la password">
    </form>
    <?php if (isset($_REQUEST['input'])) { ?>
        <h1>La tua password è </h1>
    <?php } ?>
        <h2><?php echo randomPassword($number);?></h2>
    
</body>

</html>