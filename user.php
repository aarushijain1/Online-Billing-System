<?php
session_start();

if ( !isset( $_SESSION[ 'user' ] ) ) header( 'location: dashboard.php' );

$user = $_SESSION[ 'user' ];

include( 'connection.php' );

// Fetch information from the newreg table
$firstnameQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$firstnameStmt = $conn->prepare( $firstnameQuery );
$firstnameStmt->execute( [ $user[ 'first_name' ] ] );
$firstnameInfo = $firstnameStmt->fetch( PDO::FETCH_ASSOC );

$lastnameQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$lastnameStmt = $conn->prepare( $lastnameQuery );
$lastnameStmt->execute( [ $user[ 'first_name' ] ] );
$lastnameInfo = $lastnameStmt->fetch( PDO::FETCH_ASSOC );

$dobQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$dobStmt = $conn->prepare($dobQuery);
$dobStmt->execute([$user['first_name']]);
$dobInfo = $dobStmt->fetch(PDO::FETCH_ASSOC);

$genderQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$genderStmt = $conn->prepare($genderQuery);
$genderStmt->execute([$user['first_name']]);
$genderInfo = $genderStmt->fetch(PDO::FETCH_ASSOC);

$resphoneNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$resphoneNumberStmt = $conn->prepare($resphoneNumberQuery);
$resphoneNumberStmt->execute([$user['first_name']]);
$resphoneNumberInfo = $resphoneNumberStmt->fetch(PDO::FETCH_ASSOC);

$offphoneNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$offphoneNumberStmt = $conn->prepare($offphoneNumberQuery);
$offphoneNumberStmt->execute([$user['first_name']]);
$offphoneNumberInfo = $offphoneNumberStmt->fetch(PDO::FETCH_ASSOC);

$mobileNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$mobileNumberStmt = $conn->prepare($mobileNumberQuery);
$mobileNumberStmt->execute([$user['first_name']]);
$mobileNumberInfo = $mobileNumberStmt->fetch(PDO::FETCH_ASSOC);

$emailQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$emailStmt = $conn->prepare($emailQuery);
$emailStmt->execute([$user['first_name']]);
$emailInfo = $emailStmt->fetch(PDO::FETCH_ASSOC);

$offemailQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name= ?';
$offemailStmt = $conn->prepare($offemailQuery);
$offemailStmt->execute([$user['first_name']]);
$offemailInfo = $offemailStmt->fetch(PDO::FETCH_ASSOC);

$accNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$accNumberStmt = $conn->prepare($accNumberQuery);
$accNumberStmt->execute([$user['first_name']]);
$accNumberInfo = $accNumberStmt->fetch(PDO::FETCH_ASSOC);

$accNameQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$accNameStmt = $conn->prepare($accNameQuery);
$accNameStmt->execute([$user['first_name']]);
$accNameInfo = $accNameStmt->fetch(PDO::FETCH_ASSOC);

$otherBankNameQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$otherBankNameStmt = $conn->prepare( $otherBankNameQuery );
$otherBankNameStmt->execute( [ $user[ 'first_name' ] ] );
$otherBankNameInfo = $otherBankNameStmt->fetch( PDO::FETCH_ASSOC );

// Other Bank Name
$otherBankName = isset( $otherBankNameInfo[ 'otherBankName' ] ) ? $otherBankNameInfo[ 'otherBankName' ] : '';

$bankQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$bankStmt = $conn->prepare( $bankQuery );
$bankStmt->execute( [ $user[ 'first_name' ] ] );
$bankInfo = $bankStmt->fetch( PDO::FETCH_ASSOC );

$bankBranchQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$bankBranchStmt = $conn->prepare($bankBranchQuery);
$bankBranchStmt->execute([$user['first_name']]);
$bankBranchInfo = $bankBranchStmt->fetch(PDO::FETCH_ASSOC);

$ifscQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$ifscStmt = $conn->prepare($ifscQuery);
$ifscStmt->execute([$user['first_name']]);
$ifscInfo = $ifscStmt->fetch(PDO::FETCH_ASSOC);

$panQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$panStmt = $conn->prepare($panQuery);
$panStmt->execute([$user['first_name']]);
$panInfo = $panStmt->fetch(PDO::FETCH_ASSOC);

$resAddressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$resAddressStmt = $conn->prepare($resAddressQuery);
$resAddressStmt->execute([$user['first_name']]);
$resAddressInfo = $resAddressStmt->fetch(PDO::FETCH_ASSOC);

$offAddressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$offAddressStmt = $conn->prepare($offAddressQuery);
$offAddressStmt->execute([$user['first_name']]);
$offAddressInfo = $offAddressStmt->fetch(PDO::FETCH_ASSOC);

$countryQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$countryStmt = $conn->prepare($countryQuery);
$countryStmt->execute([$user['first_name']]);
$countryInfo = $countryStmt->fetch(PDO::FETCH_ASSOC);

$stateQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$stateStmt = $conn->prepare($stateQuery);
$stateStmt->execute([$user['first_name']]);
$stateInfo = $stateStmt->fetch(PDO::FETCH_ASSOC);

$cityQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$cityStmt = $conn->prepare($cityQuery);
$cityStmt->execute([$user['first_name']]);
$cityInfo = $cityStmt->fetch(PDO::FETCH_ASSOC);

$districtQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$districtStmt = $conn->prepare($districtQuery);
$districtStmt->execute([$user['first_name']]);
$districtInfo = $districtStmt->fetch(PDO::FETCH_ASSOC);

$pincodeQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$pincodeStmt = $conn->prepare($pincodeQuery);
$pincodeStmt->execute([$user['first_name']]);
$pincodeInfo = $pincodeStmt->fetch(PDO::FETCH_ASSOC);

$positionQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$positionStmt = $conn->prepare($positionQuery);
$positionStmt->execute([$user['first_name']]);
$positionInfo = $positionStmt->fetch(PDO::FETCH_ASSOC);

$departmentQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$departmentStmt = $conn->prepare($departmentQuery);
$departmentStmt->execute([$user['first_name']]);
$departmentInfo = $departmentStmt->fetch(PDO::FETCH_ASSOC);

$institutionQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$institutionStmt = $conn->prepare($institutionQuery);
$institutionStmt->execute([$user['first_name']]);
$institutionInfo = $institutionStmt->fetch(PDO::FETCH_ASSOC);

$employmentStatusQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$employmentStatusStmt = $conn->prepare($employmentStatusQuery);
$employmentStatusStmt->execute([$user['first_name']]);
$employmentStatusInfo = $employmentStatusStmt->fetch(PDO::FETCH_ASSOC);

$imageQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$imageStmt = $conn->prepare($imageQuery);
$imageStmt->execute([$user['first_name']]);
$imageInfo = $imageStmt->fetch(PDO::FETCH_ASSOC);

$pancardQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$pancardStmt = $conn->prepare($pancardQuery);
$pancardStmt->execute([$user['first_name']]);
$pancardInfo =$pancardStmt->fetch(PDO::FETCH_ASSOC);

$resumeQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$resumeStmt = $conn->prepare($resumeQuery);
$resumeStmt->execute([$user['first_name']]);
$resumeInfo = $resumeStmt->fetch(PDO::FETCH_ASSOC);

$signQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$signStmt = $conn->prepare($signQuery);
$signStmt->execute([$user['first_name']]);
$signInfo = $signStmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        <?php include "userdisplay.css" ?>
    </style>

</head>

<body>

    <form id="registration_form" action="reg.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>REGISTRATION FORM</p>
            </div>
        </div>
        <br>

        <h3>Faculty Profile</h3>

        <div class="form-group">
            <label for="first_name"><label for="first_name">Name: <?= isset( $firstnameInfo[ 'first_name' ] ) ? $firstnameInfo[ 'first_name' ] : 'Not available' ?> <?= isset( $lastnameInfo[ 'last_name' ] ) ? $lastnameInfo[ 'last_name' ] : 'Not available' ?>
            </label>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth: <?= isset( $dobInfo[ 'dob' ] ) ? $dobInfo[ 'dob' ] : 'Not available' ?>
            </label>
        </div>

        <div class="form-group">
        <label for="gender">Gender: <?= isset( $genderInfo[ 'gender' ] ) ? $genderInfo[ 'gender' ] : 'Not available' ?></label>
        </div>

        <h3>Contact Details</h3>

        <div class="form-group">
            <label for="resphoneNumber">Residential Telephone Number: <?= isset( $resphoneNumberInfo[ 'resphoneNumber' ] ) ? $resphoneNumberInfo[ 'resphoneNumber' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="offphoneNumber">Office Telephone Number: <?= isset( $offphoneNumberInfo[ 'offphoneNumber' ] ) ? $offphoneNumberInfo[ 'offphoneNumber' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number: <?= isset( $mobileNumberInfo[ 'mobileNumber' ] ) ? $mobileNumberInfo[ 'mobileNumber' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="email">Email: <?= isset( $emailInfo[ 'email' ] ) ? $emailInfo[ 'email' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="offemail">Official Email: <?= isset( $offemailInfo[ 'offemail' ] ) ? $offemailInfo[ 'offemail' ] : 'Not available' ?></label>
        </div>

        <h3>Financial Details</h3>

        <div class="form-group">
            <label for="accno">Account Number: <?= isset( $accNumberInfo[ 'accno' ] ) ? $accNumberInfo[ 'accno' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="accname">Acount Holder Name: <?= isset( $accNameInfo[ 'accname' ] ) ? $accNameInfo[ 'accname' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="bank">Bank Name: 
                <?php
                    if ( $bankInfo[ 'bank' ] === 'other' ) {
                        echo isset( $bankInfo[ 'otherBankName' ] ) ? $bankInfo[ 'otherBankName' ] : 'Not available';
                    } else {
                        echo $bankInfo[ 'bank' ];
                    }
                ?>
            </label>
        </div>

        <div class="form-group">
            <label for="bank_branch">Bank Branch Name: <?= isset( $bankBranchInfo[ 'bank_branch' ] ) ? $bankBranchInfo[ 'bank_branch' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="ifsc">IFSC Code: <?= isset( $ifscInfo[ 'ifsc' ] ) ? $ifscInfo[ 'ifsc' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="pan">PAN Number: <?= isset( $panInfo[ 'pan' ] ) ? $panInfo[ 'pan' ] : 'Not available' ?></label>
        </div>

        <h3>Address Details</h3>

        <div class="form-group">
            <label for="address">Residential Address: <?= isset( $resAddressInfo[ 'address' ] ) ? $resAddressInfo[ 'address' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="address">Office Address: <?= isset( $offAddressInfo[ 'off_address' ] ) ? $offAddressInfo[ 'off_address' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="country">Country: <?= isset( $countryInfo[ 'country' ] ) ? $countryInfo[ 'country' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="state">State: <?= isset( $stateInfo[ 'state' ] ) ? $stateInfo[ 'state' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="state">City: <?= isset( $cityInfo[ 'city' ] ) ? $cityInfo[ 'city' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="district">District: <?= isset( $districtInfo[ 'district' ] ) ? $districtInfo[ 'district' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="pincode">Pin Code: <?= isset( $pincodeInfo[ 'pincode' ] ) ? $pincodeInfo[ 'pincode' ] : 'Not available' ?></label>
        </div>

        <h3>Professional Details</h3>

        <div class="form-group">
            <label for="position">Position: <?= isset( $positionInfo[ 'position' ] ) ? $positionInfo[ 'position' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="department">Department: <?= isset( $departmentInfo[ 'department' ] ) ? $departmentInfo[ 'department' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="institution">Institution/University: <?= isset( $institutionInfo[ 'institution' ] ) ? $institutionInfo[ 'institution' ] : 'Not available' ?></label>
        </div>

        <div class="form-group">
            <label for="employmentStatus">Employment Status: <?= isset( $employmentStatusInfo[ 'employmentStatus' ] ) ? $employmentStatusInfo[ 'employmentStatus' ] : 'Not available' ?></label>
        </div>

        <h3>Documents Uploaded</h3>

        <div class="form-group">
            <label for="image">Passport Image: <?= isset( $imageInfo[ 'image' ] ) ? $imageInfo[ 'image' ] : 'Not available' ?></label>
        </div>
        <div class="form-group">
            <label for="pancard">PAN Card:<?= isset( $pancardInfo[ 'pancard' ] ) ? $pancardInfo[ 'pancard' ] : 'Not available' ?></label>
        </div>
        <div class="form-group">
            <label for="resume">Resume: <?= isset( $resumeInfo[ 'resume' ] ) ? $resumeInfo[ 'resume' ] : 'Not available' ?></label>
        </div>
        <div class="form-group">
            <label for="sign">Signature: <?= isset( $signInfo[ 'sign' ] ) ? $signInfo[ 'sign' ] : 'Not available' ?></label>
        </div>

        <button type="button" onclick="printForm()">Print</button>

    </form>

</body>

<script>

function printForm() {
    window.print();
}

</script>

</html>
