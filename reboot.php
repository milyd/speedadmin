<?php

require_once "header.php";

    if($os == "win") {
        system("shutdown /r");
    } elseif ($os == "linux") {
        system("reboot");
    }

?>