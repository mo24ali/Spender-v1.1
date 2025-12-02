<?php
require "../config/connexion.php";
require "../models/user.php";


$user = new User($conn);
$user->register($_POST['firstname'],$_POST['lastname'],$_POST['passwordRegister'],$_POST['emailRegister']);

header("Location: ../index.php?susccess=registered");

?>
