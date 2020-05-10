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


?>

<html>

<div> <a href="adminLogin.php"> inicia sesio</div>

<div ><a href="crear.php"> crear usuari </div>

<div> <a href="llegir.php"> llegir usuari</div>

</html>
