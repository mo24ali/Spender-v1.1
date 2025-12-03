<?php

    require "../config/connexion.php";
    require "../models/expense.php";

    $exp = new Expense($conn);
    $exp->ajouterExpense($_POST['expense_title'],$_POST['expense_description'],$_POST['expense_price'],$_POST['expense_date']);
    

?>