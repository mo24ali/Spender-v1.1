<?php
session_start();

require "../config/connexion.php";
require "../models/user.php";

if (!isset($_POST['emailLog']) || !isset($_POST['passwordLog'])) {
    header("Location: ../index.php?error=missing_fields");
    exit();
}

$email = $_POST['emailLog'];
$password = $_POST['passwordLog'];

$user = new User($conn);
$loggedUser = $user->login($email, $password);

if ($loggedUser) {
    $_SESSION['user_id'] = $loggedUser['id'];
    $_SESSION['email'] = $loggedUser['email'];

    header("Location: ../dashboard.php");
    exit();
} else {
    header("Location: ../index.php?error=invalid_credentials");
    exit();
}
?>


/**there is a proble in the user table */