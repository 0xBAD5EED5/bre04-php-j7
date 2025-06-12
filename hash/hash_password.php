<?php
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo "Mot de passe hashé : " . htmlspecialchars($hash);
} else {
    echo "Aucun mot de passe reçu.";
}
?>
