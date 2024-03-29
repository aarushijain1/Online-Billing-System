<?php
session_start();

if ( !isset( $_SESSION[ 'user' ] ) ) header( 'location: Login.php' );

$user = $_SESSION[ 'user' ];

?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<style> <?php include 'dashboard.css' ?> </style>
<title>Dashboard</title>
<link rel = 'icon' href = 'logo.jpg' type = 'image/x-icon'>
<link rel = 'stylesheet' href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
</head>

<body>

<div class = 'dashboard'>
<?php include( 'sidebar.php' ) ?>
<div class = 'main-content'>
<?php include( 'navbar.php' ) ?>
</div>

<div class = 'main-content'>
</div>

</div>

<script src = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js'></script>
<script> <?php require_once( 'script.js' );
?> </script>

</body>

</html>
