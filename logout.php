<?php 

    session_start();
    $_SESSION = [];
    $_SESSION['loggedin'] = false;

    header("Location: index.php?log_out=true");

?>