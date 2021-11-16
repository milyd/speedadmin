<?php

    session_start();

    if (isset($_SESSION['isLogged'])) {
        unset($_SESSION['isLogged']);
        echo "Wylogowano.";
    } else {
        header("Location: index.php");
        die();
    }