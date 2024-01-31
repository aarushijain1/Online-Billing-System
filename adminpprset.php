<?php

    include("connection.php");

    $query = 'SELECT * FROM erp_portal.paper_setting
           JOIN erp_portal.newreg ON paper_setting.off_email = newreg.offemail';

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Setting</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "admin.css" ?> </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

</head>

<body>

<div class="dashboard">
    <h2>Paper Setting Details</h2>

    <table id="myTable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Department</th>
                <th>Official Email</th>
                <th>PAN No.</th>
                <th>Bank Account No.</th>
                <th>IFSC Code</th>
                <th>Program</th>
                <th>Academic Year</th>
                <th>Semester</th>
                <th>Subject Code</th>
                <th>Subject</th>
                <th>Per Paper Amount</th>
                <th>Number of Question Paper Set</th>
                <th>Paper Setting Charges</th>
                <th>Contingent Expenses</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['currentDate']; ?></td>
                    <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['pan']; ?></td>
                    <td><?php echo $row['accno']; ?></td>
                    <td><?php echo $row['ifsc']; ?></td>
                    <td><?php echo $row['prog']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['sub_code']; ?></td>
                    <td><?php echo $row['sub']; ?></td>
                    <td><?php echo $row['ppramt']; ?></td>
                    <td><?php echo $row['nosheet']; ?></td>
                    <td><?php echo $row['charges']; ?></td>
                    <td><?php echo $row['expenses']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
   
    $(document).ready(function() {
        $('#myTable').DataTable({
            "paging": false, // Disable pagination if you want
            "ordering": true, // Enable sorting
            "searching": true, // Enable search/filtering
            "info": false // Disable information display (e.g., "Showing 1 to 10 of 57 entries")
        });
    });

</script>

</body>

</html>
