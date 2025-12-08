<?php
    class Income{
        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }


        public function ajouterIncome($incomeTitle, $incomeDescription, $price,$categorie, $getDate,$userId){
            $request = "insert into income(incomeTitle , description , user_id , price ,categorie, getIncomeDate) 
                        values ('$incomeTitle','$incomeDescription','$userId','$price','$categorie','$getDate')";
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
        public function modifierIncome($incomeId, $incomeTitle, $newincomeDesc , $newincomePrice,$categorie, $incGetDate){
            $request = "update income 
                        set incomeTitle='$incomeTitle', 
                            description='$newincomeDesc', 
                            price='$newincomePrice', 
                            categorie='$categorie',
                            getIncomeDate='$incGetDate' 
                        where incomeId='$incomeId';";
            $query=mysqli_query($this->conn, $request);
            if(isset($query)){
                header("Location: ../incomes.php");
            }
            
        }
    }

?>