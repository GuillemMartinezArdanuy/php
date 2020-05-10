<?php
// autor: guillem ardanuy martinez

session_start();

error_reporting(0);


if($_SESSION['Access']=="OK") { // si el acces esta fet, farem la conexio

//////////////////// CONEXIO A BASE DE DADES ///////////////////////


   /* $usuariBBDD = "root";
    $passBBDD = "P@ssw0rd";
    $servidor = "localhost";
    $nomBBDD = "practica4";
*/

    $usuariBBDD = $_SESSION['usuariBBDD'];
    $passBBDD = $_SESSION['passBBDD'];
    $servidor = $_SESSION['servidor'];
    $nomBBDD = $_SESSION['nomBBDD'];



    $conexio = mysqli_connect($servidor, $usuariBBDD, $passBBDD) or die("Conexio defectuosa");

    $conBBDD = mysqli_select_db($conexio, $nomBBDD) or die ("base de dades inexistent");

    $consultaBBDD = "SELECT * FROM Usuaris";

    $resultatConsulta = mysqli_query($conexio, $consultaBBDD) or die("consulta o conexio erronia xD plis plas plus");


    echo "en 20 segons tornare a l'inex!!!! ";
    echo "<br><br>";


    echo "usuaris: <br>";
    while ($columna = mysqli_fetch_array($resultatConsulta)) {
        $id = $columna['id'];
        $nom = $columna['nom'];
        $dni = $columna['dni'];
        $adresa = $columna['adresa'];
        echo "id: " . $id . " nom: " . $nom . " dni: " . $dni . " adreça: " . $adresa . "<br>";
    }

    mysqli_close($conexio);  // tanquem conexio bbdd

}

else{
    echo "has d'accedir al sistema primer";
}
header("refresh:5;url=./index.php");  // generem el misatge i al cap de un segon anirem al index!


?>