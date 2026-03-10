<?php
$password = "";

if (isset($_GET['length'])) {
    $maiuscole = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minuscole = "abcdefghijklmnopqrstuvwxyz";
    $numeri = "0123456789";
    $simboli = "!@#$%^&*()";

    $tutti_caratteri = $maiuscole . $minuscole . $numeri . $simboli;



    for ($i = 0; $i < $_GET['length']; $i++) {

        $random_posizione = rand(0, strlen($tutti_caratteri) - 1);
        $random_caratteri = substr($tutti_caratteri, $random_posizione, 1);

        $password .= $random_caratteri;
    }
}
