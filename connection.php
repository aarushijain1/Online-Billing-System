<?php
    $servername = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'erp_portal';
    $port = 3307;

    try {
        $conn = new PDO("mysql:host=$servername; dbname=erp_portal", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connection successful";
    } catch (\Exception $e) {
        $error_message = $e->getMessage();
    }
/*
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "connection successful";
*/

?>