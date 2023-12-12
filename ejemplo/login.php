<?php
session_start();
if (isset($_SESSION["user"])){
    echo "Esta es la pagina principal ".$_SESSION["user"];
?>
<form action="logout.php" method="get">
    <input type="submit" name="logout" value="salir">
</form>
<?php
}
?>
