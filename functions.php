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
