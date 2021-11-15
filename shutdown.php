<?php

    require_once "config.php";

    session_start();

    if (!$_SESSION['isLogged'] == TRUE) {
        header("Location: login.php");
    }

    if($os == "win") {
        system("shutdown /s");
    } elseif ($os == "linux") {
        system("shutdown now");
    }

?>