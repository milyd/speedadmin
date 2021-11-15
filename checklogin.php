<?php

    session_start();
    require_once "config.php";

    $post_pass = $_POST['pass'];

    if ($post_pass == $adminPass) {
        $_SESSION['isLogged'] = TRUE;
        header("Location: index.php");
    } else {
        echo "Złe hasło";
    }

    
