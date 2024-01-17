<?php
    session_start();
    
    if(!isset($_SESSION['user'])) header('location: dashboard.php');

    $user = $_SESSION['user'];

    include("connection.php");

    // Fetch res_add information from the newreg table
    $addressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $addressStmt = $conn->prepare($addressQuery);
    $addressStmt->execute([$user['first_name']]);
    $addressInfo = $addressStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch res_mob_no information from the newreg table
    $resphoneNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $resphoneNumberStmt = $conn->prepare($resphoneNumberQuery);
    $resphoneNumberStmt->execute([$user['first_name']]);
    $resphoneNumberInfo = $resphoneNumberStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch off_mob_no information from the newreg table
    $offphoneNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $offphoneNumberStmt = $conn->prepare($offphoneNumberQuery);
    $offphoneNumberStmt->execute([$user['first_name']]);
    $offphoneNumberInfo = $offphoneNumberStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch mob_no information from the newreg table
    $mobileNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $mobileNumberStmt = $conn->prepare($mobileNumberQuery);
    $mobileNumberStmt->execute([$user['first_name']]);
    $mobileNumberInfo = $mobileNumberStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch email information from the newreg table
    $emailQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $emailStmt = $conn->prepare($emailQuery);
    $emailStmt->execute([$user['first_name']]);
    $emailInfo = $emailStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch bank no information from the newreg table
    $bankQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $bankStmt = $conn->prepare($bankQuery);
    $bankStmt->execute([$user['first_name']]);
    $bankInfo = $bankStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch bank information from the newreg table
    $bankQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $bankStmt = $conn->prepare($bankQuery);
    $bankStmt->execute([$user['first_name']]);
    $bankInfo = $bankStmt->fetch(PDO::FETCH_ASSOC);

    // Fetch ifsc information from the newreg table
    $ifscQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
    $ifscStmt = $conn->prepare($ifscQuery);
    $ifscStmt->execute([$user['first_name']]);
    $ifscInfo = $ifscStmt->fetch(PDO::FETCH_ASSOC);

    $otherBankNameQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$otherBankNameStmt = $conn->prepare($otherBankNameQuery);
$otherBankNameStmt->execute([$user['first_name']]);
$otherBankNameInfo = $otherBankNameStmt->fetch(PDO::FETCH_ASSOC);

// Other Bank Name
$otherBankName = isset($otherBankNameInfo['otherBankName']) ? $otherBankNameInfo['otherBankName'] : '';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Examiner</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "internalprac.css" ?> </style>
</head>

<body>

    <form action="iprac.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>EXAMINATION DIVISION</p>
            </div>
        </div>

        <h2><u>BILL FOR PRACTICAL EXAMINATION(INTERNAL EXAMINER)</u></h2>

        <!-- <div class="formno">
            <label for="formNumber">Form Number:</label>
            <input type="text" id="formNumber" name="formNumber" readonly>
        </div> -->

        <p>1. Name of External Examiner: <span><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></span></p>

        <p>2. Residential Address: <?= isset($addressInfo['address']) ? $addressInfo['address'] : 'Not available' ?></p> </p>

        <p>3. A)Tel No.(Res): <?= isset($resphoneNumberInfo['resphoneNumber']) ? $resphoneNumberInfo['resphoneNumber'] : 'Not available' ?></p></p>

        <p> B)Tel(Off.): <?= isset($offphoneNumberInfo['offphoneNumber']) ? $offphoneNumberInfo['offphoneNumber'] : 'Not available' ?></p></p>

        <p> C)Tel(Mobile): <?= isset($mobileNumberInfo['mobileNumber']) ? $mobileNumberInfo['mobileNumber'] : 'Not available' ?></p></p>

        <!-- Department Name -->
        <label for="Department">4. Select Department:</label>
        <select id="department" name="dept" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Applied Sciences and Humanities"> Applied Sciences and Humanities </option>
            <option value="Computer Science and Engineering"> Computer Science and Engineering </option>
            <option value="Electronics and Communication Engineering"> Electronics and Communication Engineering
            </option>
            <option value="Information technology"> Information Technology </option>
            <option value="Architecture and Planning"> Architecture and Planning </option>
            <option value="Mechanical and Automation"> Mechanical and Automation </option>
            <option value="Management"> Management </option>
            <option value="Artificial Intelligence and Data Science"> Artificial Intelligence and Data Science</option>
        </select>
        <br>

        <p>5. Email Address: <?= isset($emailInfo['email']) ? $emailInfo['email'] : 'Not available' ?></p> </p>
        <p>6. Bank Account Number: <?= isset($bankInfo['bank_no']) ? $bankInfo['bank_no'] : 'Not available' ?></p>
        <p>7. Name of the Bank:  <?php
    if ($bankInfo['bank'] === 'other') {
        echo isset($bankInfo['otherBankName']) ? $bankInfo['otherBankName'] : 'Not available';
    } else {
        echo $bankInfo['bank'];
    }
    ?></p>
        <p>8. IFSC Code: <?= isset($ifscInfo['ifsc']) ? $ifscInfo['ifsc'] : 'Not available' ?></p> </p>

        <div class="content-box">
            <h3><b><u>CONDUCT OF PRACTICAL EXAMINATION(INTERNAL EXAMINER)</u></b></h3>

            <!-- Programme -->
            <label for="programme">Programme:</label>
            <select id="programme" name="prog">
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

            <!-- Branch -->
            <label for="branch">Branch:</label>
            <select id="branch" name="branch">
                <option value="" disabled selected>Select an option</option>
                <option value="Computer Science Engineering- AI">Computer Science Engineering- AI</option>
                <option value="Computer Science Engineering	">Computer Science Engineering </option>
                <option value="Information Technology">Information Technology</option>
                <option value="AI & ML">AI & ML</option>
                <option value="Electronics and Communications Engineering">Electronics and Communications Engineering
                </option>
                <option value="Electronics and Communications Engineering-AI">Electronics and Communications
                    Engineering-AI</option>
                <option value="Mechanical and Automation Engineering">Mechanical and Automation Engineering</option>
                <option value="Architecture">Architecture</option>
                <option value="Management">Management</option>
                <option value="IT (Cyber Security)">IT (Cyber Security)</option>
                <option value="CSE (Artificial Intelligence)">CSE (Artificial Intelligence) </option>
                <option value="Artificial Intelligence & Data Science">Artificial Intelligence & Data Science</option>
                <option value="ECE (VLSI Design)">ECE (VLSI Design)</option>
                <option value="Robotics & Artificial Intelligence">Robotics & Artificial Intelligence</option>
                <option value="Computer Applications">Computer Applications</option>
                <option value="Urban Planning">Urban Planning</option>
                <option value="Business Administration">Business Administration</option>
                <option value="ICT(Part Time)">ICT(Part Time)</option>
                <option value="NA">NA</option>
            </select>
            <br>

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

            <!-- Paper Code -->
            <br>
            <label for="pprcode">Enter Paper Code:</label>
            <input type="text" id="pprcode" name="paper_code" required onclick="showSubjectCodeMessage()" onblur="hideSubjectCodeMessage()">
            <p id="subjectCodeMessage" style="display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;">Format should be: BAS-101</p>

            <!-- Paper Name -->
            <br>
            <label for="ppr">Enter Paper Name:</label>
            <input type="text" id="ppr" name="paper_name" required onclick="showSubjectMessage()" onblur="hideSubjectMessage()">
            <p id="subjectMessage" style="display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;">Format should be: Information Technology</p>
            <br>

            <label for="session">Session:</label>
            <select id="session" name="session">
                <option value="" disabled selected>Select an option</option>
                <option value="1st Session">1st Session</option>
                <option value="2nd Session">2nd Session</option>
                <option value="3nd Session">3nd Session</option>
            </select>
            <br>

            <label for="prac">Practical:</label>
            <select id="prac" name="prac">
                <option value="" disabled selected>Select an option</option>
                <option value="Major Project">Major Project</option>
                <option value="Minor Project">Minor Project</option>
                <option value="Dissertation">Dissertation</option>
                <option value="Internship">Internship</option>
            </select>
            <br>
        </div>

        <div class="content-box1">
            <p><b>Remuneration Charges Details</b></p>
            <p><label for="student">1. Conduct of Oral/Practical Examination for </label><input type="number"
                    id="student" name="student" placeholder="Enter Number of Students" required> @ Rs. <input
                    type="number" id="no" name="no" placeholder="Enter Amount" required>per
                student <input type="number" id="amt" name="amt" placeholder="Enter Amount" required></p>
            </p>

            <p>2. Conveyance Charges(Actual Taci Fare) or Rs. <input type="number" id="amt1" name="amt1"
                    placeholder="Enter Amount" required> which ever is less. <input type="number" id="amt2" name="amt2"
                    placeholder="Enter Amount" required></p>

            <p><b>Total amount of Honorarium and Conveyance</b> <input type="number" id="totalamt" name="totalamt"
                    placeholder="Enter Total Amount" required></p>
        </div>

        <label for="rsinword">Rupees (in words): </label>
        <input type="text" id="rsinword" name="rsinword" placeholder="Enter total amount in words" required>

        <div class="content-box2">
            <p id="undertaking"><strong>*Undertaking:</strong> certified that I will show this income of Rs. <label
                    for="amt"></label><input type="number" id="amt3" name="amt3" placeholder="Enter Amount" required> in
                my
                income return.</p>

            <p class="pay"> Received Payment</p>

            <p id="currentDate"></p><br><br><br><br>

            <p><b>Signature of Examiner <br><br><br>Verfication by the Centre Superintendent (Practical) of Concerned Department</b></p>
            <hr>
            <p>Name of the Centre Superintendent (Practical):</p>
            <p>It is certified that the detail mentioned above are correct of the best of my knowledge and belief. The marks of the Exam has been entered in the Examination Portal and hard copy of attendance sheet and award list duly signed by External Examiner has been submitted in the Examination Divisions.</p><br><br><br>
            <p>Signature of Centre Superintendent (Practical):</p>
            <p id="sign"><b>Countersigned by</b></p>
            <p><span>Consultant (Exam)</span><span>Dean(EA)/Dy.COE</span></p>

        </div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>
    <script> <?php require_once("script3.js");?> </script>
</body>

</html>
