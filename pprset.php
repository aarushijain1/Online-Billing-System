<?php

    session_start();
    
    if(!isset($_SESSION['user'])) header('location: dashboard.php');

    $user = $_SESSION['user'];
    include("connection.php");

    // Fetch PAN card information from the newreg table
    $panQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $panStmt = $conn->prepare($panQuery);
    $panStmt->execute([$user['first_name']]);
    $panInfo = $panStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch bank no information from the newreg table
    $bankQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $bankStmt = $conn->prepare($bankQuery);
    $bankStmt->execute([$user['first_name']]);
    $bankInfo = $bankStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch ifsc information from the newreg table
    $ifscQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $ifscStmt = $conn->prepare($ifscQuery);
    $ifscStmt->execute([$user['first_name']]);
    $ifscInfo = $ifscStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch res_add information from the newreg table
    $addressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $addressStmt = $conn->prepare($addressQuery);
    $addressStmt->execute([$user['first_name']]);
    $addressInfo = $addressStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch mob_no information from the newreg table
    $mobileNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $mobileNumberStmt = $conn->prepare($mobileNumberQuery);
    $mobileNumberStmt->execute([$user['first_name']]);
    $mobileNumberInfo = $mobileNumberStmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Paper(s) Setting</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "pprset.css" ?> </style>
</head>

<body>

    <form action="set.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>EXAMINATION DIVISION</p>
            </div>
        </div>

        <h2><u>BILL FOR QUESTION PAPER(S) SETTING</u></h2>

        <!-- <div class="formno">
            <label for="formNumber">Form Number:</label>
            <input type="int" id="formNumber" name="formNo" readonly>
        </div> -->

        <p>1. Name of the Paper Setter: <span><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></span></p>
        <p>2. Residential Address: <?= isset($addressInfo['address']) ? $addressInfo['address'] : 'Not available' ?></p> </p>
        <p>3. PAN No.: <?= isset($panInfo['pan']) ? $panInfo['pan'] : 'Not available' ?></p>
        <p>4. Bank Account No. : <?= isset($bankInfo['bank_no']) ? $bankInfo['bank_no'] : 'Not available' ?></p>
        <p>5. IFSC Code: <?= isset($ifscInfo['ifsc']) ? $ifscInfo['ifsc'] : 'Not available' ?></p> </p>       
        <p>6. Mobile No. : <?= isset($mobileNumberInfo['mobileNumber']) ? $mobileNumberInfo['mobileNumber'] : 'Not available' ?></p> </p>

        <!-- Department Name -->
        <label for="dept">7. Select Department:</label>
        <select id="department" name="dept" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Applied Sciences and Humanities"> Applied Sciences and Humanities </option>
            <option value="Computer Science and Engineering"> Computer Science and Engineering </option>
            <option value="Electronics and Communication Engineering"> Electronics and Communication Engineering</option>
            <option value="Information technology"> Information Technology </option>
            <option value="Architecture and Planning"> Architecture and Planning </option>
            <option value="Mechanical and Automation"> Mechanical and Automation </option>
            <option value="Management"> Management </option>
            <option value="Artificial Intelligence and Data Science"> Artificial Intelligence and Data Science</option>
        </select>
        <br>

        <div class="content-box">
            <h3><b><u>SETTING OF QUESTION PAPER(S) FOR THEORY EXAMINATION</u></b></h3>

            <!-- Programme -->
            <label for="prog">Programme:</label>
            <select id="programme" name="prog" >
                <option value="" disabled selected>Select an option</option>
                <option value="B-Tech">B-Tech</option>
                <option value="B.Arch">B.Arch</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Tech.(MAE) + M.B.A.">B.Tech.(MAE) + M.B.A.</option>
                <option value="M.Tech.">M.Tech.</option>
                <option value="M.C.A.">M.C.A.</option>
                <option value="M.Plan.">M.Plan.</option>
                <option value="M.B.A.">M.B.A.</option>
                <option value="Ph.D.">Ph.D.</option>
            </select>
            <br>

            <!-- Semester -->
            <label for="sem">Semester:</label>
            <select id="sem" name="sem" >
                <option value="" disabled selected>Select an option</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <br>

            <!-- Subject Code -->
            <label for="sub_code">Enter Subject Code:</label>
            <input type="text" id="subcode" name="sub_code" required onclick="showSubjectCodeMessage()" onblur="hideSubjectCodeMessage()">
            <p id="subjectCodeMessage" style="display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;">Format should be: BAS-101</p>

            <!-- Subject -->
            <br>
            <label for="subj">Enter Subject:</label>
            <input type="text" id="sub" name="sub" required onclick="showSubjectMessage()" onblur="hideSubjectMessage()">
            <p id="subjectMessage" style="display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;">Format should be: Information Technology</p>
            <hr>

            <p><b>Details</b></p>
            <p><b>Remuneration Charges</b></p>

            <p><label for="charges">1. Paper Setting Charges @ <b>Rs.850/-</b> per paper</label><input type="number" id="amt1" name="charges" placeholder="Enter Amount" required></p>

            <p><label for="expenses">2. Contingent expenses <b>Rs.100/-</b> e.g., Postage charges, CD, If any, etc <b>(Not Applicable for internal faculty Including Visiting Faculty)</b></label><input type="number" id="amt" name="expenses" placeholder="Enter Amount" required></p>
            <hr>

            <p><label for="total"><b>Total:</b></label><input type="number" id="amttotal" name="total" placeholder="Enter Total Amount:" required></p>
        </div>

        <label for="rsinword">Rupees (in words): </label>
        <input type="text" id="rsinword" name="rsinword" placeholder="Enter total amount in words" required>

        <p id="undertaking"><strong>*Undertaking:</strong> certified that I will show this income of Rs. <label for="amt"></label><input type="number" id="amt" name="amt" placeholder="Enter Amount" required> in my income return.</p>

        <p class="pay"> Received Payment</p>

        <p id="currentDate"></p><br><br>

        <b><span>Counter-signed</span></b><br><br><br><br>
        <b><span>Verified</span></b><br><br><br><br>
        <b><span>Signature of Examiner</span></b><br><br><br><br>

        <div class="dean">
            <b>Dean (Examination Affairs)/ Head of Instituion</b>
        </div>

        <p>Note: The Paper Setter is required to ensure that every column provided in the examination remuneration bill form is filled properly to enable the Accounts Branch to make payment expeditiously aaginst the claim.</p>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <script> <?php require_once("script1.js");?> </script>

</body>

</html>
