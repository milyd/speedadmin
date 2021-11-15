<?php



    session_start();

    if (!$_SESSION['isLogged'] == TRUE) {
        header("Location: login.php");
    }

    echo "<h1>SpeedAdmin</h1>";

    echo "<a href='shutdown.php'><button>Wyłącz serwer ></button></a> ";

    echo "<a href='reboot.php'><button>Zrestartuj serwer ></button></a> ";

    echo "<a href='cmd.php'><button>Wywołaj komendę ></button></a> ";

    echo "<a href='logout.php'><button>Wyloguj się ></button></a> ";
?>