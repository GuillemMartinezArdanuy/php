<?php //autor guillem ardanuy martinez

session_start();
error_reporting(0);
if($_SESSION['Access']=="OK"){
    echo "conectat";

    echo "<html><form> 
                    
                    <div> <button type='submit' formaction='./tencarSesio.php'>TENCAR SESIO </button></div>
                </form>

</html>";
}

else{
    echo"no conectat";
   echo" <html>
<form method='post'>
    <div>----------CREDENCIALS--------</div>
    <div>usuari <input name ='usuariBBDD' type='text'></div>
    <div>pass <input name ='passBBDD' type='password'></div>
    <div>servidor <input name ='servidor' type='text'></div>
    <div>nom BBDD <input name ='nomBBDD' type='text'></div>

    <button type='submit' formaction='./sesioLogin.php'> access! </button>
</form>";
}

//echo session_status();
?>
</html>
