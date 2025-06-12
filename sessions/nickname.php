<?php
session_start();

$_SESSION["user"] = $_POST['pseudo'];

echo $_SESSION["user"];
?>