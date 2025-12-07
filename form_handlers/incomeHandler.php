<?php
require "../config/connexion.php";
require "../models/income.php";


session_start();
$income = new Income($conn);


$title = $_POST['income_title'];
$description = $_POST['income_description'];
$price = $_POST['income_price'];
$date = $_POST['income_date'];
$id = $_GET['id'] ?? null;
$userId = $_SESSION['user_id'];
if (!empty($id)) {

    $income->modifierIncome($id, $title, $desc, $price, $date);
    header("Location: ../incomes.php");
    exit;
} else {

    $income->ajouterIncome($title, $desc, $price, $date,$userId);

    header("Location: ../incomes.php");
    exit;
}
?>