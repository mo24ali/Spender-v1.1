<?php
    class Income{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }


        public function ajouterIncome($incomeTitle, $incomeDescription, $price, $getDate){
            $request = "insert into income(incomeTitle,description,price,getIncomeDate) 
                        values ('$incomeTitle','$incomeDescription','$price','$getDate')";
            $query = mysqli_query($this->conn,$request);
            if(isset($query)){
                header("Location: ../incomes.php");
            }
        }
        public function supprimerIncome($incomeId){
            $request = "delete from income where incomeId=$incomeId";
            $query = mysqli_query($this->conn,$request);
            if(isset($query)){
                header("Location: ../incomes.php");
            }
        }
        public function modifierExpense(){
            
        }
    }

?>