<?php
require "../config/connexion.php";
require "../models/income.php";

$income = new Income($conn);


$title = $_POST['income_title'];
$description = $_POST['income_description'];
$price = $_POST['income_price'];
$date = $_POST['income_date'];

if (isset($_POST['income_id'])) {

    $id = $_POST['income_id'];
    $exp->modifierIncome($id, $title, $desc, $price, $date);

    header("Location: ../incomes.php");
    exit;
} else {

    $exp->ajouterIncome($title, $desc, $price, $date);

    header("Location: ../incomes.php");
    exit;
}
