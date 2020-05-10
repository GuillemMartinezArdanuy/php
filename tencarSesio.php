<?php //autor guillem ardanuy martinez
    session_start();
    session_destroy();
header("refresh:1;url=./index.php");
?>
