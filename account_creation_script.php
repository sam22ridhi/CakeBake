<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Connecting to our MySQL database 
        $conn = mysqli_connect("localhost", "root", "", "registration_db");
        
        // Checking the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
        // Insert 
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            
            header("Location: login.html"); // Replace \
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        error_reporting(E_ALL);
ini_set('display_errors', 1);

        //close
        mysqli_close($conn);
    }
}
?>
