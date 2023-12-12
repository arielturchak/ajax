<?php
session_start();
if($_POST["user"] == "admin" && $_POST["pass"] === "1234"){

    $_SESSION["user"] = "admin";
    echo "Hola".$_SESSION["user"];
    header("Location:login.php");//redirigue al home
}
?>



