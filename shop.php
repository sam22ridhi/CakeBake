<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cake = $_POST["cake"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];

    if (empty($cake) || empty($weight) || empty($price)) {
        echo "All fields are required.";
    } else {

        $conn = mysqli_connect("localhost", "root", "", "shop_db");

        // Check the database connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO food (cake, weight, price) VALUES ('$cake', '$weight', '$price')";
        if (mysqli_query($conn, $sql)) {
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        // Close the database connection
        mysqli_close($conn);
    }
}

// Redirect back to shop page
header('Location: shop.html');
?>
