<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Prepare and bind parameters for registration
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']); // Note: This is not secure for production, use password hashing

    // Execute the registration query
    if ($stmt->execute()) {
        // Registration successful
        echo "Registration successful";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        // Registration failed
        echo "Registration failed";
    }
}

// Close connection
$conn = null;

