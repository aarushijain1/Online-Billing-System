<?php
session_start();

if ( !isset( $_SESSION[ 'user' ] ) ) header( 'location: admindashboard.php' );

$user = $_SESSION[ 'user' ];

include( 'connection.php' );

// Fetch information from the newreg table
$firstnameQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$firstnameStmt = $conn->prepare( $firstnameQuery );
$firstnameStmt->execute( [ $user[ 'first_name' ] ] );
$firstnameInfo = $firstnameStmt->fetch( PDO::FETCH_ASSOC );

$lastnameQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$lastnameStmt = $conn->prepare( $lastnameQuery );
$lastnameStmt->execute( [ $user[ 'first_name' ] ] );
$lastnameInfo = $lastnameStmt->fetch( PDO::FETCH_ASSOC );

$dobQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$dobStmt = $conn->prepare( $dobQuery );
$dobStmt->execute( [ $user[ 'first_name' ] ] );
$dobInfo = $dobStmt->fetch( PDO::FETCH_ASSOC );

$genderQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$genderStmt = $conn->prepare( $genderQuery );
$genderStmt->execute( [ $user[ 'first_name' ] ] );
$genderInfo = $genderStmt->fetch( PDO::FETCH_ASSOC );

$mobileQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$mobileStmt = $conn->prepare( $mobileQuery );
$mobileStmt->execute( [ $user[ 'first_name' ] ] );
$mobileInfo = $mobileStmt->fetch( PDO::FETCH_ASSOC );

$off_emailQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$off_emailStmt = $conn->prepare( $off_emailQuery );
$off_emailStmt->execute( [ $user[ 'first_name' ] ] );
$off_emailInfo = $off_emailStmt->fetch( PDO::FETCH_ASSOC );

$addressQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$addressStmt = $conn->prepare($addressQuery);
$addressStmt->execute([$user['first_name']]);
$addressInfo = $addressStmt->fetch(PDO::FETCH_ASSOC);

$off_addressQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$off_addressStmt = $conn->prepare($off_addressQuery);
$off_addressStmt->execute([$user['first_name']]);
$off_addressInfo = $off_addressStmt->fetch(PDO::FETCH_ASSOC);

$countryQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$countryStmt = $conn->prepare($countryQuery);
$countryStmt->execute([$user['first_name']]);
$countryInfo = $countryStmt->fetch(PDO::FETCH_ASSOC);

$stateQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$stateStmt = $conn->prepare($stateQuery);
$stateStmt->execute([$user['first_name']]);
$stateInfo = $stateStmt->fetch(PDO::FETCH_ASSOC);

$cityQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$cityStmt = $conn->prepare($cityQuery);
$cityStmt->execute([$user['first_name']]);
$cityInfo = $cityStmt->fetch(PDO::FETCH_ASSOC);

$districtQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$districtStmt = $conn->prepare($districtQuery);
$districtStmt->execute([$user['first_name']]);
$districtInfo = $districtStmt->fetch(PDO::FETCH_ASSOC);

$pincodeQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$pincodeStmt = $conn->prepare($pincodeQuery);
$pincodeStmt->execute([$user['first_name']]);
$pincodeInfo = $pincodeStmt->fetch(PDO::FETCH_ASSOC);

$imageQuery = 'SELECT * FROM erp_portal.adminnewreg WHERE first_name = ?';
$imageStmt = $conn->prepare($imageQuery);
$imageStmt->execute([$user['first_name']]);
$imageInfo = $imageStmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        <?php include "admindisplay.css" ?>        

    </style>

</head>

<body>

    <form id="adminregistration_form" action="adminreg.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>ADMIN REGISTRATION FORM</p>
            </div>
        </div>
        <br>

        <h3>Admin Profile</h3>

        <div class="form-group">
            <label for="first_name">Name: <?= isset( $firstnameInfo[ 'first_name' ] ) ? $firstnameInfo[ 'first_name' ] : 'Not available' ?> <?= isset( $lastnameInfo[ 'last_name' ] ) ? $lastnameInfo[ 'last_name' ] : 'Not available' ?>

            </label>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth: <?= isset( $dobInfo[ 'dob' ] ) ? $dobInfo[ 'dob' ] : 'Not available' ?> 
            </label>
        </div>

        <div class="form-group">
            <label for="gender">Gender: <?= isset( $genderInfo[ 'gender' ] ) ? $genderInfo[ 'gender' ] : 'Not available' ?> 
            </label>
        </div>

        <h3>Contact Details</h3>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number: <?= isset( $mobileInfo[ 'mobileNumber' ] ) ? $mobileInfo[ 'mobileNumber' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="offemail">Official Email: <?= isset( $off_emailInfo[ 'offemail' ] ) ? $off_emailInfo[ 'offemail' ] : 'Not available' ?> 

            </label>
        </div>

        <h3>Address Details</h3>

        <div class="form-group">
            <label for="address">Residential Address: <?= isset( $addressInfo[ 'address' ] ) ? $addressInfo[ 'address' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="address">Office Address: <?= isset( $off_addressInfo[ 'off_address' ] ) ? $off_addressInfo[ 'off_address' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="country">Country: <?= isset( $countryInfo[ 'country' ] ) ? $countryInfo[ 'country' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="state">State: <?= isset( $stateInfo[ 'state' ] ) ? $stateInfo[ 'state' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="state">City: <?= isset( $cityInfo[ 'city' ] ) ? $cityInfo[ 'city' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="district">District: <?= isset( $districtInfo[ 'district' ] ) ? $districtInfo[ 'district' ] : 'Not available' ?> 

            </label>
        </div>

        <div class="form-group">
            <label for="pincode">Pin Code: <?= isset( $pincodeInfo[ 'pincode' ] ) ? $pincodeInfo[ 'pincode' ] : 'Not available' ?> 

            </label>
        </div>        

        <h3>Document Uploaded</h3>

        <div class="form-group">
            <label for="image">Passport Image: <?= isset( $imageInfo[ 'image' ] ) ? $imageInfo[ 'image' ] : 'Not available' ?> 

            </label>
        </div>

        <button type="button" onclick="printForm()">Print</button>

    </form>

    <script>

        function printForm() {
            window.print();
        }

    </script>

</body>

</html>
