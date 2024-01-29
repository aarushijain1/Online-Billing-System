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

$addressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$addressStmt = $conn->prepare( $addressQuery );
$addressStmt->execute( [ $user[ 'first_name' ] ] );
$addressInfo = $addressStmt->fetch( PDO::FETCH_ASSOC );

$off_addressQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$off_addressStmt = $conn->prepare( $off_addressQuery );
$off_addressStmt->execute( [ $user[ 'first_name' ] ] );
$off_addressInfo = $off_addressStmt->fetch( PDO::FETCH_ASSOC );

$mobileNumberQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$mobileNumberStmt = $conn->prepare( $mobileNumberQuery );
$mobileNumberStmt->execute( [ $user[ 'first_name' ] ] );
$mobileNumberInfo = $mobileNumberStmt->fetch( PDO::FETCH_ASSOC );

$emailQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$emailStmt = $conn->prepare( $emailQuery );
$emailStmt->execute( [ $user[ 'first_name' ] ] );
$emailInfo = $emailStmt->fetch( PDO::FETCH_ASSOC );

$panQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$panStmt = $conn->prepare( $panQuery );
$panStmt->execute( [ $user[ 'first_name' ] ] );
$panInfo = $panStmt->fetch( PDO::FETCH_ASSOC );

$bankQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$bankStmt = $conn->prepare( $bankQuery );
$bankStmt->execute( [ $user[ 'first_name' ] ] );
$bankInfo = $bankStmt->fetch( PDO::FETCH_ASSOC );

$ifscQuery = 'SELECT * FROM erp_portal.newreg WHERE first_name = ?';
$ifscStmt = $conn->prepare( $ifscQuery );
$ifscStmt->execute( [ $user[ 'first_name' ] ] );
$ifscInfo = $ifscStmt->fetch( PDO::FETCH_ASSOC );

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Answer Script Evaluation</title>
    <link rel='icon' href='logo.jpg' type='image/x-icon'>
    <style>
        <?php include 'ppreval.css' ?>
    </style>
</head>

<body>

    <form action='eval.php' method='POST' onsubmit='submitForm()'>
        <div class='container'>
            <img src='logo.jpg' alt='IGDTUW LOGO' height='100px'>
            <div class='text'>
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>EXAMINATION DIVISION</p>
            </div>
        </div>

        <h2><u>BILL FOR EVALUATIONS OF ANSWERS SCRIPT FOR END-TERM EXAMINATIONS</u></h2>

        <p>1. Name of the Paper Evaluator:
            <?= isset( $firstnameInfo[ 'first_name' ] ) ? $firstnameInfo[ 'first_name' ] : 'Not available' ?>
            <?= isset( $lastnameInfo[ 'last_name' ] ) ? $lastnameInfo[ 'last_name' ] : 'Not available' ?>
        </p>

        <p>2. Residential Address:
            <?= isset( $addressInfo[ 'address' ] ) ? $addressInfo[ 'address' ] : 'Not available' ?>
        </p>
        </p>

        <p>3. Mobile No. :
            <?= isset( $mobileNumberInfo[ 'mobileNumber' ] ) ? $mobileNumberInfo[ 'mobileNumber' ] : 'Not available' ?>
        </p>
        </p>

        <p>4. Email Id:
            <?= isset( $emailInfo[ 'email' ] ) ? $emailInfo[ 'email' ] : 'Not available' ?>
        </p>
        </p>

        <p>5. Official Email Address <input type='email' id='off_email' name='off_email'
                placeholder='Enter official email' required></p>
        </div>

        <p>6. PAN No.:
            <?= isset( $panInfo[ 'pan' ] ) ? $panInfo[ 'pan' ] : 'Not available' ?>
        </p>

        <p>7. Bank Account No. :
            <?= isset( $bankInfo[ 'accno' ] ) ? $bankInfo[ 'accno' ] : 'Not available' ?>
        </p>

        <p>8. IFSC Code:
            <?= isset( $ifscInfo[ 'ifsc' ] ) ? $ifscInfo[ 'ifsc' ] : 'Not available' ?>
        </p>
        </p>

        <p>9. Evaluation Details</p>
        <p> Have you set the Q.P. of the Subject</p>
        <label>
            Yes <input type='radio' name='setQP' value='yes'> No <input type='radio' name='setQP' value='no'>
        </label>

        <label for='year'>Academic Year:</label>
        <input type='text' id='year' name='year' required onclick='showYearMessage()' onblur='hideYearMessage()'>
        <p id='yearMessage' style='display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;'>Format
            should be: 2022-26 EVEN</p>
        <br>

        <label for='sem'>Semester:</label>
        <select id='sem' name='sem'>
            <option value='' disabled selected>Select an option</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
        </select>
        <hr>

        <label for='pprcode'>Enter Paper Code:</label>
        <input type='text' id='pprcode' name='paper_code' required onclick='showSubjectCodeMessage()'
            onblur='hideSubjectCodeMessage()'>
        <p id='subjectCodeMessage' style='display: none; color: #FF0000; margin:0; padding:0; font-size: smaller;'>
            Format should be: BAS-101</p>
        
<label for = 'date'>Date:</label>
<input type = 'date' id = 'date' name = 'date' >

<label for = 'Number of A.S. Evaluated'>Number of A.S. Evaluated:</label>
<input type = 'number' id = 'Asheet' name = 'Asheet' >

<label for = 'city'>Conveyance Claimed:</label>
<input type = 'number' id = 'conveyance1' name = 'conveyance1' >

<button class = 'add-row' type = 'button' onclick = 'addRow()'>Add Row</button>

<table id = 'dataTable'>
<thead>
<tr>
<th>Sno</th>
<th>Date</th>
<th>Number of A.S. Evaluated</th>
<th>Conveyance Claimed</th>
</tr>
</thead>
<tbody>
</tbody>
</table><hr>
        <p><input type='number' id='nosheet' name='nosheet' placeholder='Enter Total Number of Students' required>Number
            of A.S.
            evaluated<input type='number' id='peramt' name='peramt' placeholder='Enter per answer sheet charge amount'
                required> per
            A.S. amount
            workout <input type='number' id='workoutamt' name='workoutamt'
                placeholder='Enter Amount (Total Number of Students * per answer sheet charge amount)' required></p>
        <p>Conveyance <input type='number' id='conveyance' name='conveyance' placeholder='Enter Total Conveyance Charge'
                required></p>

        <p><b>Total amount</b> <input type='number' id='totalamt' name='totalamt' placeholder='Enter Total Amount'
                required></p>

        <p>Remarks if any <input type='text' id='remark' name='remark'></p>

        <p>Kindly deduct income tax as per applicable Income Tax Law. I will intimate my aforesaid income to my
            employer/ I will include it in my Income while calculating my Income Tax.</p><br><br>

        <p id='sign'><b>Name and Signature of Evaluator</b></p>
        <p>It is certified that <input type='text' id='user' name='user'> was appointed as Evaluator in the aforesaid
            course and details of Answer Sheet as mentioned at S.No. verified and payment of Rs. <input type='number'
                id='amt3' name='amt3' required> /- recommended in his/her favour of <input type='text' id='user'
                name='users'> </p>

        <div class='form-group'>
            <label for='currentDate'>Dated:</label>
            <input type='date' id='currentDate' name='currentDate' required>
        </div><br><br>

        <p id='sign'><b><span>Dealing Assistant</span> <span>Signature of Coordiantor/ Dy. Coordinator with
                    date</span></b></p><br>

        <p>Gross Payment admissible:</p>
        <p>TDS Deducted:</p>
        <p>Net Payment:</p>
        <p><b><span>Dealing Hand</span><span>AAO</span><span>AO/FO</span></b></p>

        <hr>

        <p id="d"><b><i>Note: After filling out the form, take out the printout and click the submit button.</i></b></p>

        <div class = 'ButtonContainer'>
            <button id = 'a' type = 'button' onclick="printForm()">Print</button><br>
            <button id = 'b' type = 'reset'>Reset</button>
            <button id = 'c' type= 'submit'>Submit</button>
        </div>

        <script>

            function showYearMessage() {
                var message = document.getElementById('yearMessage');
                message.style.display = 'block';
            }

            function hideYearMessage() {
                var message = document.getElementById('yearMessage');
                message.style.display = 'none';
            }

            function showSubjectCodeMessage() {
                var message = document.getElementById('subjectCodeMessage');
                message.style.display = 'block';
            }

            function hideSubjectCodeMessage() {
                var message = document.getElementById('subjectCodeMessage');
                message.style.display = 'none';
            }

            var rowCount = 1;

    function addRow() {

    var date = document.getElementById('date').value;
    var Number_of_AS_Evaluated = document.getElementById('Asheet').value;
    var Conveyance_Claimed = document.getElementById('conveyance1').value;

    var table = document.getElementById('dataTable');
    var newRow = table.insertRow(table.rows.length);

    var cell0 = newRow.insertCell(0);
    var cell1 = newRow.insertCell(1);
    var cell2 = newRow.insertCell(2);
    var cell3 = newRow.insertCell(3);

    cell0.innerHTML = rowCount++;
    cell1.innerHTML = date;
    cell2.innerHTML = Number_of_AS_Evaluated;
    cell3.innerHTML = Conveyance_Claimed;

    document.getElementById('date').value = '';
    document.getElementById('Asheet').value = '';
    document.getElementById('conveyance1').value = '';
}

function printForm() {
    document.getElementById('b').style.display = 'none'; 
    document.getElementById('c').style.display = 'none'; 
    document.getElementById('d').style.display = 'none'; 

    window.print();

    document.getElementById('b').style.display = 'inline'; 
    document.getElementById('c').style.display = 'inline'; 
    document.getElementById('d').style.display = 'inline'; 

  }

        </script>

    </form>
</body>

</html>
