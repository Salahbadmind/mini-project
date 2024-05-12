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

// Check if form is submitted for sign-in
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
    // Prepare and bind parameters for sign-in
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $_POST['password']);

    // Execute the sign-in query
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() == 1) {
        
            // Registration successful
            echo "Registration successful";
            echo "<script>window.location.href = 'store.php';</script>";
        } else {
            // Registration failed
            echo "Registration failed";
        }
}// Close connection
$conn = null;
