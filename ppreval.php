<?php
    session_start();
    
    if(!isset($_SESSION['user'])) header('location: dashboard.php');

    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Script Evaluation</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "ppreval.css" ?> </style>
</head>

<body>

    <form action="eval.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>EXAMINATION DIVISION</p>
            </div>
        </div>

        <h2><u>BILL FOR EVALUATIONS OF ANSWERS SCRIPT FOR END-TERM EXAMINATIONS</u></h2>

        <!-- <div class="formno">
            <label for="formNumber">Form Number:</label>
            <input type="text" id="formNumber" name="formNumber" readonly>
        </div> -->

        <p>1. Name of the Paper Setter: <span><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></span> </p>
        <p>2. PAN No.: </p>
        <p>3. Bank Account No. : </p>
        <p>4. IFSC Code: </p>
        <p>5. Residential Address: </p>
        <p>6. Office Address: </p>
        <p>7. Mobile No. : </p>
        <p>8. Email Id: </p>
        <p>9. Evaluation Details</p>
        <p> Have you set the Q.P. of the Subject</p>
        <label>
            Yes <input type="radio" name="answer" value="yes"> No <input type="radio" name="answer" value="no"> 
        </label>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="Number of A.S. Evaluated">Number of A.S. Evaluated:</label>
        <input type="number" id="Asheet" name="Asheet" required>

        <label for="city">Conveyance Claimed:</label>
        <input type="number" id="conveyance" name="conveyance" required>

        <button class= "add-row" type="button" onclick="addRow()">Add Row</button>

        <table id="dataTable">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th> Date</th>
                    <th>Number of A.S. Evaluated</th>
                    <th>Conveyance Claimed</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be dynamically added here -->
            </tbody>
        </table>

        <p>Remarks if any <input type="text" id="remark" name="remark"></p>

        <p>Kindly deduct income tax as per applicable Income Tax Law. I will intimate my a foresaid income to my employer/ I will include it in my Income while calculating my Income Tax.</p>

        <p id="sign"><b>Name and Signature of Evaluator</b></p>
        <p>It was certified that <input type="text" id="user" name="user"> was appointed as Evaluator in the aforesaid course and details of Answer Sheet as mentioned at S.No. verified and payment of Rs. <input type="number" id="amt3" name="amt3" required> /- recommend in his/her favour of <input type="text" id="user" name="users"> </p>

        <p><b><span>Dealing Assistant</span> <span>Signature of Coordiantor/ Dy. Coordinator with date</span></b></p>

        <p>Gross Payment admissible:</p>
        <p>TDS Deducted:</p>
        <p>Net Payment:</p>
        <p><b><span>Dealing Hand</span><span>AAO</span><span>AO/FO</span></b></p>

        <hr>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

        <script>
            var rowCount = 1;

            function addRow() {
                // Get form values
                var date = document.getElementById('date').value;
                var Number_of_AS_Evaluated = document.getElementById('Asheet').value;
                var Conveyance_Claimed = document.getElementById('conveyance').value;

                // Create a new table row
                var table = document.getElementById('dataTable');
                var newRow = table.insertRow(table.rows.length);

                // Insert cells with the form values
                var cell0 = newRow.insertCell(0);
                var cell1 = newRow.insertCell(1);
                var cell2 = newRow.insertCell(2);
                var cell3 = newRow.insertCell(3);

                // Populate cells with data
                cell0.innerHTML = rowCount++;
                cell1.innerHTML = date;
                cell2.innerHTML = Number_of_AS_Evaluated;
                cell3.innerHTML = Conveyance_Claimed;

                // Clear the form fields
                document.getElementById('date').value = '';
                document.getElementById('Asheet').value = '';
                document.getElementById('conveyance').value = '';
            }
        </script>

    </form>
</body>

</html>
