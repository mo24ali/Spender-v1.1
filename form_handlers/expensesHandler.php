<?php

require "../config/connexion.php";
require "../models/expense.php";

$exp = new Expense($conn);

$title = $_POST['expense_title'];
$desc  = $_POST['expense_description'];
$price = $_POST['expense_price'];
$date  = $_POST['expense_date'];

if (isset($_POST['expense_id'])) {

    $id = $_POST['expense_id'];
    $exp->modifierExpense($id, $title, $desc, $price, $date);

    header("Location: ../expenses.php");
    exit;

} else {

    $exp->ajouterExpense($title, $desc, $price, $date);

    header("Location: ../expenses.php");
    exit;
}
