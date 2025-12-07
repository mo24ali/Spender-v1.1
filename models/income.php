<?php
    class Income{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }


        public function ajouterIncome($incomeTitle, $incomeDescription, $price, $getDate,$userId){
            $request = "insert into income(incomeTitle,description,user_id,price,getIncomeDate) 
                        values ('$incomeTitle','$incomeDescription','$userId','$price','$getDate')";
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
        public function modifierIncome($incomeId, $incomeTitle, $newincomeDesc , $newincomePrice, $incGetDate){
            $request = "update income 
                        set incomeTitle='$incomeTitle', 
                            description='$newincomeDesc', 
                            price='$newincomePrice', 
                            getIncomeDate='$incGetDate' 
                        where incomeId='$incomeId';";
            $query=mysqli_query($this->conn, $request);
            if(isset($query)){
                header("Location: ../incomes.php");
            }
            
        }
    }

?>