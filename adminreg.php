<?php
session_start();

if ($_POST) {
    include("connection.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobileNumber = $_POST['mobileNumber'];
    $offemail = $_POST['offemail'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    $image = $_POST['image'];

    // Validate and sanitize user input to prevent SQL injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Insert user data into the database
    // Insert user data into the database
    $query = 'INSERT INTO erp_portal.adminnewreg (
        first_name, last_name, dob, gender, mobileNumber, offemail, address, country, state, city, district, pincode, image) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $first_name, $last_name, $dob, $gender, $mobileNumber, $offemail, $address, $country, $state, $city, $district, $pincode, 
        $image]);
    

    // Fetch the user information from the database after registration
    $query = 'SELECT * FROM users WHERE email = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        $_SESSION['user'] = $user;
    }

    header('Location: username.php');
}
?>
