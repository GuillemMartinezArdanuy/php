<?php  //autor guillem ardanuy martinez

$accesOK=false; // variable de control
error_reporting(0);

//echo session_status();

function conexioBBDD(){ // funcio de conexio a base de dades
    $usuariBBDD=$_POST['usuariBBDD'];
    $passBBDD=$_POST['passBBDD'];
    $servidor=$_POST['servidor'];
    $nomBBDD=$_POST['nomBBDD'];
    $conexio=@mysqli_connect($servidor,$usuariBBDD,$passBBDD)or die("Conexio defectuosa".header("refresh:2;url=./adminLogin.php"));  // el arroba serveix per que no informi dels warnings :D
    $conBBDD=@mysqli_select_db($conexio,$nomBBDD) or die ("base de dades no trobada");

}

//ara creem la conexio:
try{
    conexioBBDD();
    $accesOK=true;  // la conexio es viable, per tant activem

    //creem variables de sesio daccess bbdd

}

catch (Exception $exception){
    echo"no tens acces";
}


if ($accesOK){  // si s'activa, guardem la conexio  a la sesio :D
    session_start();
    $usuariBBDD=$_POST['usuariBBDD'];
    $passBBDD=$_POST['passBBDD'];
    $servidor=$_POST['servidor'];
    $nomBBDD=$_POST['nomBBDD'];
    $conexio=@mysqli_connect($servidor,$usuariBBDD,$passBBDD);  // el arroba serveix per que no informi dels warnings :D
    $conBBDD=@mysqli_select_db($conexio,$nomBBDD) or die ("base de dades no trobada");


    $_SESSION['Access']="OK";  // crem sesio acces, es com un "token"

    // guardem les dades a variable sesio:

    $_SESSION['usuariBBDD']=$usuariBBDD;
    $_SESSION['passBBDD']=$passBBDD;
    $_SESSION['servidor']=$servidor;
    $_SESSION['nomBBDD']=$nomBBDD;


    echo "sesio activada"."<br>";

    echo "credencials acceptades, et redirigeixo al menu ";
    header("refresh:5;url=./index.php");  // generem el misatge i al cap de un segon anirem al index!
}



?>
