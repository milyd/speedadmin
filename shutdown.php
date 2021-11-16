<?php

require_once "header.php";

    if($os == "win") {
        system("shutdown /s");
    } elseif ($os == "linux") {
        system("shutdown now");
    }

?>