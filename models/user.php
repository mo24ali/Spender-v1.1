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

        $stmt = $this->conn->prepare(
            "INSERT INTO users (firstname, lastname, email, password) 
             VALUES (?, ?, ?, ?)"
        );

        $stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
        return $stmt->execute();
    }

    public function login($email, $password)
    {
        $query = mysqli_query(
            $this->conn,
            "SELECT * FROM users 
             WHERE email='$email' AND password='$password'"
        );

        if (mysqli_num_rows($query) == 1) {
            $user = mysqli_fetch_assoc($query);

            $_SESSION['user_id'] = $user['userId'];

            header("Location: ../dashboard.php");
            exit();
        } else {
            echo "Wrong email or password";
        }
    }
}
?>
