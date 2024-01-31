<?php

    include("connection.php");

    $query = 'SELECT * FROM erp_portal.paper_evaluation
          JOIN erp_portal.newreg ON paper_evaluation.off_email = newreg.offemail';

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Evaluation</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "admin.css" ?> </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

</head>

<body>

<div class="dashboard">
    <h2>Paper Evaluation Details</h2>

    <table id="myTable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Residential Address</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Official Email</th>
                <th>PAN No.</th>
                <th>Bank Account No.</th>
                <th>IFSC Code</th>
                <th>Academic Year</th>
                <th>Semester</th>
                <th>Subject Code</th>
                <th>Set QP</th>
                <th>No. of Ansher Sheets Evaluated</th>
                <th>Charge per Sheet</th>
                <th>Total Answer Sheets Charge</th>
                <th>Conveyance Charges</th>
                <th>Total Amt.</th>
                <th>Remarks</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['currentDate']; ?></td>
                    <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['mobileNumber']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['off_email']; ?></td>
                    <td><?php echo $row['pan']; ?></td>
                    <td><?php echo $row['accno']; ?></td>
                    <td><?php echo $row['ifsc']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['paper_code']; ?></td>
                    <td><?php echo $row['setQP']; ?></td>
                    <td><?php echo $row['nosheet']; ?></td>
                    <td><?php echo $row['peramt']; ?></td>
                    <td><?php echo $row['workoutamt']; ?></td>
                    <td><?php echo $row['conveyance']; ?></td>
                    <td><?php echo $row['totalamt']; ?></td>
                    <td><?php echo $row['remark']; ?></td>                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
   
    $(document).ready(function() {
        $('#myTable').DataTable({
            "paging": false, 
            "ordering": true,
            "searching": true, 
            "info": false 
        });
    });

</script>

</body>

</html>
