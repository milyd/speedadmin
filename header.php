<?php

require_once "config.php";

session_start();

if (!$_SESSION['isLogged'] == TRUE) {
    header("Location: login.php");
    die();
}

echo "<title>SpeedAdmin</title><link rel='stylesheet' href='style.css'>";
echo "<div class='header'>SpeedAdmin</div>";

