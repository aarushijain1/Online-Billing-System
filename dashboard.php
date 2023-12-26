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
        <div class="sidebar">
            <h3>Indira Gandhi Delhi Technical University for Women</h3>
            <div class="dashboard_sidebar_user">
                <img src="" alt="User Image">
                <span><?=$user['first_name'] . ' ' . $user['last_name'] ?></span>
            </div>
            <ul class="menu">
                <li class="menu-item"><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="menu-item"><a href="#">Paper Setting</a></li>
                <li class="menu-item"><a href="#">Answer Sheet Evaluation</a></li>
                <li class="menu-item"><a href="#">Practical Exam Conduction</a></li>
                <li class="menu-item"><a href="#">Visiting Faculty</a></li>
            </ul>
        </div>

        <div class="main-content">
            <div class="top-bar">
                <div class="toggle-btn" onclick="toggleSidebar()">&#9776;</div>
                <h2>Dashboard</h2>
                <a href = "Logout.php" div class="logout-btn" onclick="logout()"><i class="fas fa-sign-out-alt"></i></div>
            </div>
            <!-- Rest of your main content goes here -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="script.js"></script>

</body>

</html>