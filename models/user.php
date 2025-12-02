<?php
class User {

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function register($firstname,$lastname, $email, $password){
        // $hashed = password_hash($password, PASSWORD_DEFAULT);

        $request = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$password')";
        return mysqli_query($this->conn, $request);
    }

    public function login($email, $password){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if($user && password_verify($password, $user['password'])){
            return $user;
        }
        return false;
    }
}
?>
