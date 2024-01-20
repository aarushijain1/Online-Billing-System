<?php
    session_start();

    $error_message = '';

    if ($_POST) {
        include("connection.php");

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate and sanitize user input to prevent SQL injection
        $username = filter_var($username, FILTER_SANITIZE_EMAIL);

        // Fetch the user information from the database
        $query = 'SELECT * FROM erp_portal.adminlogin WHERE username = ?';
        $stmt = $conn->prepare($query);
        $stmt->execute([$username]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the entered password against the stored hashed password
            if (password_verify($password, $user['password'])) {
                // Store the user information in the session
                $_SESSION['user'] = $user;
                header('Location: adminLogin.php');
            } else {
                $error_message = 'Invalid password. Please try again.';
            }
        } else {
            $error_message = 'User not found. Please sign-up.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "adminLogin.css" ?> </style>
    <title>IGDTUW</title>
</head>

<body id="loginBody">
    <?php if (!empty($error_message)) { ?>
        <div id="errorMessage">
            <strong>Error: </strong><p><?= $error_message ?></p>
        </div>
    <?php } ?>

    <div class="navbar">
        <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
        <div class="loginHeader">
            <p><strong> Indira Gandhi Delhi Technical University for Women (IGDTUW)</strong></p>
            <p><strong>Cloud Based University Teacher Information System</strong></p>
            <p>Kashmere Gate, Delhi-110006</p>
            <p>(An ISO 9001:2015 Certified University)</p>
        </div>
    </div>

    <div class="container">
        <div class="loginBody">
            <form id = "login_form" action="adminLogin.php" method="POST">
                <div class="AdminLogin">Admin Login</div><br>
                <div class="loginInputsContainer">
                    <label for="username">User name</label>
                    <input name="username" id="username" placeholder="User name" type="email" />
                </div>
                <div class="loginInputsContainer">
                    <label for="password">Password</label>
                    <input name="password" id="password" placeholder="Password" type="password" />
                </div>

                <div class="loginButtonContainer">
                    <button id="a" type="submit">Sign In</button>
                    <button id="b">Forgot Password</button>
                    <button id = "c"><a href = "adminregistration_form.php" target="_blank">New User Register</a></button>
                </div>
            </form>
        </div>
    </div>

<script>
    document.getElementById('c').addEventListener('click', function () {
    window.open('adminregistration_form.php','_blank');
});
document.getElementById('a').addEventListener('click', function () {
    window.open('admindashboard.php','_blank');
});
</script>

    <footer>
        &copy; 2021 All Rights Reserved | Indira Gandhi Delhi Technical University for Women (IGDTUW)
    </footer>

</body>

</html>
