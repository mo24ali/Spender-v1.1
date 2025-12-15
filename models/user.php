<?php
class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function register($firstname, $lastname, $email, $password)
    {
        $hashedpass = password_hash($password,PASSWORD_DEFAULT);
        // $hashedpass = sha1($password);
        $stmt = $this->conn->prepare(
            "INSERT INTO users (firstname, lastname, email, password) 
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashedpass);
        return $stmt->execute();
    }



    public function login($email, $password)
    {
        $smt = $this->conn->prepare(
            "SELECT userId, password FROM users WHERE email = ?"
        );
        $smt->bind_param("s", $email);
        $smt->execute();

        $result = $smt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['userId'];
                header("Location: ../dashboard.php");
                exit();
            } else {
                echo "Wrong email or password";
            }
        } else {
            echo "Wrong email or password";
        }
    }
}
