<?php

    session_start();

    unset($_SESSION['isLogged']);
    echo "Wylogowano";