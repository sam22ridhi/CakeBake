<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_num = $_POST["card_num"];
    $date_num = $_POST["date_num"];
    $cvv_num = $_POST["cvv_num"];
    $name_num = $_POST["name_num"];
    
    if (empty($card_num) || empty($date_num) || empty($cvv_num) || empty($name_num)) {
        echo "All fields are required.";
    } else {
        $conn = mysqli_connect("localhost", "root", "", "payment_db");
        
        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $hashed_cvv = password_hash($cvv_num, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO payments (card_num, date_num, cvv_num, name_num) VALUES ('$card_num', '$date_num', '$hashed_cvv', '$name_num')";
        if (mysqli_query($conn, $sql)) {
            // Payment successful;
            echo '<script>alert("Payment successful");</script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        // Close the database connection
        mysqli_close($conn);
    }
}
?>