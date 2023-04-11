<?php
$number = $_GET['input'];
function randomPassword($number)
{
    $letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+-={}[]|:;<>,.?/';
    $pass = array();
    $length = strlen($letter) - 1;
    for ($i = 0; $i < $number; $i++) {
        $n = rand(0, $length);
        $pass[] = $letter[$n];
    };
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
    <!-- my css  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div id="background">
        <div class="container">
            <h1>Generatore di password complesse random</h1>
            <form action="index.php" method="GET" class="w-50">
                <label for="input" class="form-label">Inserisci il numero di caratteri della tua password</label>
                <input name="input" type="number" class="form-control">
                <div id="passwordHelpBlock" class="form-text text-light">La tua password può contentere da un minimo di 5 carattere a un massimo di 20</div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
            <div class="my-2 text-center">
                <?php if ($number <= 16 && $number > 0) { ?>
                    <h3>La tua password è </h3>
                    <p><?php echo randomPassword($number); ?></p>
                <?php } else { ?>
                    <div class="alert alert-info w-25" role="alert">
                        <p>Il numero di caratteri non è valido</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>