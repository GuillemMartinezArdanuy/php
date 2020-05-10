<?php

//autor: guillem ardanuy martinez
session_start();
error_reporting(0);

if ($_SESSION['Access']=="OK") {
    $nomUsuari = $_POST['nom'];
    $dniUsuari = $_POST['dni'];
    $adreçaUsuari = $_POST['adresa'];

    $usuariBBDD = $_SESSION['usuariBBDD'];
    $passBBDD = $_SESSION['passBBDD'];
    $servidor = $_SESSION['servidor'];
    $nomBBDD = $_SESSION['nomBBDD'];


//ara creem la conexio:
    $conexio = mysqli_connect($servidor, $usuariBBDD, $passBBDD) or die("Conexio defectuosa");

    $conBBDD = mysqli_select_db($conexio, $nomBBDD) or die ("base de dades no trobada");


    $insercioDeUsuari = "INSERT INTO usuaris(nom,dni,adresa) values('$nomUsuari','$dniUsuari','$adreçaUsuari')";
    mysqli_query($conexio, $insercioDeUsuari);
    mysqli_close($conexio);

}

else {
    echo "has de entrar al sistema primer :P ";
}

header("refresh:2;url=./index.php");  // generem el misatge i al cap de un segon anirem al index!





?>