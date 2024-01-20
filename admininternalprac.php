<?php
    
    include("connection.php");

    $query = 'SELECT * FROM erp_portal.internal_exam 
          JOIN erp_portal.newreg ON internal_exam.off_email = newreg.offemail';

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Examiner</title>
    <link rel="icon" href="logo.jpg" type="image/x-icon">
    <style> <?php include "admin.css" ?> </style>
</head>

<div class="dashboard">
    <h2>Internal Practical Details</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Residential Address</th>
                <th>Tel. No.(Res)</th>
                <th>Tel. No.(Off)</th>
                <th>Mobile</th>
                <th>Department</th>
                <th>Email</th>
                <th>PAN No.</th>
                <th>Bank Account No.</th>
                <th>Bank Account Name</th>
                <th>IFSC Code</th>
                <th>Bank Branch</th>
                <th>Program</th>
                <th>Program Branch</th>
                <th>Academic Year</th>
                <th>Semester</th>
                <th>Paper Code</th>
                <th>Paper Name</th>
                <th>Session Details</th>
                <th>Practical Type</th>            
                <th>No. of Students</th>                
                <th>Amt. per Student</th>                
                <th>Total Amt. for Students</th>
                <th>Conveyance Charges Applied</th>
                <th>User Conveyance Charges</th>
                <th>Total Amt.</th>
                <th>Total Amt in Words</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['currentDate']; ?></td>
                    <td><?php echo $row['first_name']; echo $row['last_name'];?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['resphoneNumber']; ?></td>
                    <td><?php echo $row['offphoneNumber']; ?></td>
                    <td><?php echo $row['mobileNumber']; ?></td>
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['pan']; ?></td>
                    <td><?php echo $row['accno']; ?></td>
                    <td><?php echo $row['accname']; ?></td>
                    <td><?php
                        if ($row['bank'] === 'other') {
                            echo $row['otherBankName'];
                        } else {
                            echo $row['bank'];
                        }
                        ?></td>
                    <td><?php echo $row['ifsc']; ?></td>
                    <td><?php echo $row['bank_branch']; ?></td>
                    <td><?php echo $row['prog']; ?></td>
                    <td><?php echo $row['branch']; ?></td>
                    <td><?php echo $row['year']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['paper_code']; ?></td>
                    <td><?php echo $row['paper_name']; ?></td>
                    <td><?php echo $row['session']; ?></td>
                    <td><?php echo $row['prac']; ?></td>
                    <td><?php echo $row['student']; ?></td>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['amt']; ?></td>
                    <td><?php echo $row['amt1']; ?></td>
                    <td><?php echo $row['amt2']; ?></td>
                    <td><?php echo $row['totalamt']; ?></td>
                    <td><?php echo $row['rsinword']; ?></td>
                                        
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</html>