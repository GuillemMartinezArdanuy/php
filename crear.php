<?php //autor guillem ardanuy martinez
error_reporting(0);
session_start();
if($_SESSION['Access']=="OK"){

   echo' <html>
<title>crear usuari</title>


<form method="post">

    <div>nom: <input name ="nom" type="text"></div>
    <div>dni: <input name ="dni" type="text"></div>
    <div>adreça: <input name ="adresa" type="text"></div>

    <button type="submit" formaction="./crearUser.php"> crear! </button>

</form>

</html>
    ';
}

else{
    echo "has de conectarte primer al sistema, ves al login :P";
    header("refresh:5;url=./index.php");  // generem el misatge i al cap de un segon anirem al index!
}

?>


