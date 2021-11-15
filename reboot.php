<?php

    require_once "config.php";

    session_start();

    if (!$_SESSION['isLogged'] == TRUE) {
        header("Location: login.php");
    }

    if($os == "win") {
        system("shutdown /r");
    } elseif ($os == "linux") {
        system("reboot");
    }

?>