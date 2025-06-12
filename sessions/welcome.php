<?php
session_start();

if (isset($_SESSION["user"])) {
	$pseudo = $_SESSION["user"];
	echo "Bienvenue " . $pseudo;
} else {
	echo "Bienvenue invité";
}
?>