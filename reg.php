<?php
session_start();

if ($_POST) {
    include("connection.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $resphoneNumber = $_POST['resphoneNumber'];
    $offphoneNumber = $_POST['offphoneNumber'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $offemail = $_POST['offemail'];
    $accno = $_POST['accno'];
    $accname = $_POST['accname'];
    $bank = $_POST['bank'];

    $otherBankName = $_POST['otherBank'];
    $bankName = ($selectedBank === 'other') ? $otherBankName : $selectedBank;

    $ifsc = $_POST['ifsc'];
    $pan = $_POST['pan'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $pincode = $_POST['pincode'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $institution = $_POST['institution'];
    $employmentStatus = $_POST['employmentStatus'];
    $image = $_POST['image'];
    $pancard = $_POST['pancard'];
    $resume = $_POST['resume'];
    $off_address = $_POST['off_address'];
    $sign = $_POST['sign'];
    $bank_no = $_POST['bank_no'];

    // Validate and sanitize user input to prevent SQL injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Insert user data into the database
    // Insert user data into the database
    $query = 'INSERT INTO erp_portal.newreg (
        first_name, last_name, dob, gender, resphoneNumber, offphoneNumber, mobileNumber, email, offemail, accno, accname, bank,otherBankName, ifsc, pan, address, country, state, city, district, pincode, position, department, institution, employmentStatus, image, 
        pancard, resume, off_address, sign, bank_no) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?)';
    $stmt = $conn->prepare($query);
    $stmt->execute([
        $first_name, $last_name, $dob, $gender, $resphoneNumber, $offphoneNumber, $mobileNumber, $email, $offemail, 
        $accno, $accname, $bank,$otherBankName, $ifsc, $pan, $address, $country, $state, $city, $district, $pincode, 
        $position, $department, $institution, $employmentStatus, $image, $pancard, $resume, $off_address, $sign, $bank_no
    ]);
    

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
