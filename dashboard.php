<?php
    session_start();
    
    if(!isset($_SESSION['user'])) header('location: Login.php');

    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <div class="dashboard">
    <?php include('sidebar.php') ?>
        <div class="main-content">
            <?php include('navbar.php') ?>
            <!-- Rest of your main content goes here -->
        </div>
        <!-- sidebar -->

        <div class="main-content">
            <!-- Rest of your main content goes here -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
