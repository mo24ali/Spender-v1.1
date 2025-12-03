<?php
    require "../config/connexion.php";
    require "../models/income.php";


    $income = new Income($conn);
    $income->ajouterIncome($_POST['income_title'],$_POST['income_description'],$_POST['income_price'],$_POST['income_date']);


?>