<?php
session_start();

if ($_POST) {
    include("connection.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize user input to prevent SQL injection
    $username = filter_var($username, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $query = 'INSERT INTO erp_portal.login (first_name, last_name, username, password) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($query);
    $stmt->execute([$first_name, $last_name, $username, $hashedPassword]);

    // Fetch the user information from the database after registration
    $query = 'SELECT * FROM login WHERE username = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);

    if ($stmt->rowCount() > 0) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        $_SESSION['user'] = $user;
    }

    header('Location: Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username</title>
    <link rel="stylesheet" href="username.css">
</head>
<body>

    <form id = "" action="#" method="POST">

        <div class="container">
                <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
                <div class="text">
                    <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                    <p>Kashmere Gate, Delhi-110006</p>
                </div>
        </div>
        
            <h3>Set your username and password</h3>

            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

            </div>

            <button type="submit">Submit</button>

</body>
</html>