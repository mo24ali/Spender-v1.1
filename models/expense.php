<?php
    class Expense{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }


        public function ajouterExpense($expenseTitle, $expenseDescription, $price,$categorie, $dueDate,$userId){
            $request = "insert into expense(expenseTitle,description,user_id,price,categorie,dueDate) 
            values ('$expenseTitle','$expenseDescription','$userId',$price,'$categorie','$dueDate')";
            $query = mysqli_query($this->conn,$request);
            if(isset($query)){
                header("Location: ../expenses.php");
            }
        }
        public function supprimerExpense($expenseId){
            $request = "delete from expense where expenseId=$expenseId";
            $query = mysqli_query($this->conn,$request);
            if(isset($query)){
                header("Location: ../expenses.php");
            }
        }
        public function modifierExpense($expenseId, $expenseTitle, $newExpenseDesc , $newExpensePrice, $categorie, $expDueDate){
            $request = "update expense 
                        set expenseTitle='$expenseTitle', 
                            description='$newExpenseDesc', 
                            price='$newExpensePrice',
                            categorie='$categorie', 
                            dueDate='$expDueDate' 
                        where expenseId='$expenseId'";
            $query=mysqli_query($this->conn, $request); /////////////////////
            if(isset($query)){
                header("Location: ../expenses.php");
            }
        }
    }

?>