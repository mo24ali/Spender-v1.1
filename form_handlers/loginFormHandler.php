<?php

    require "../config/connexion.php";
    require "../models/user.php";


    $user = new User($conn);
    $user->login($_POST['emailLog'],$_POST['passwordLog']);

    header("Location: ../index.php?logged=successful");
?>