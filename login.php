<?php 
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    // Connect to the database 
    $host = "localhost"; 
    $dbname = "registration_db"; 
    $username_db = "root"; 
    $password_db = ""; 

    // Establish database connection
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db); 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    // Prepare SQL query
    $stmt = $db->prepare("SELECT * FROM users WHERE name = :username");
    $stmt->bindParam(":username", $username); 
    $stmt->execute(); 
    
    // Fetch user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($user) { 
        // Verify password 
        if (password_verify($password, $user["password"])) { 
            $_SESSION["user"] = $user; 
            header("Location: shop.php"); 
            exit();
        } else { 
            echo "<h2>Login Failed</h2>"; 
            echo "Invalid email or password."; 
        } 
    } else { 
        echo "<h2>Login Failed</h2>"; 
        echo "User doesn't exist"; 
    } 
} 
?>
