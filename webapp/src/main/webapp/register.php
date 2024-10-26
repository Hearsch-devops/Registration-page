<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationDB";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password for security

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // Execute and check if successful
    if ($stmt->execute()) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>
