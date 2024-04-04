<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "All fields are required.";
    } else {
        $conn = mysqli_connect("localhost", "root", "", "contact_db");
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "INSERT INTO contacts (name,email,phone,message) VALUES ('$name', '$email', '$phone', '$message')";
        if (mysqli_query($conn, $sql)) {
            // Payment successful
            echo '<script>alert("Contact details registration successful");</script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        // Close the database connection
        mysqli_close($conn);
    }
}
?>