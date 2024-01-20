<?php
    
    include("connection.php");

    // Retrieve data from the database
    $query = 'SELECT * FROM erp_portal.paper_evaluation';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="dashboard">
    <h2>Paper Setting Details</h2>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Bank Account</th>
                <th>ISC Code</th>
                <th>Semester</th>
                <th>Subject Code</th>
                <th>Subject</th>
                <th>Paper Setting Charges</th>
                <th>Contingent Expenses</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['bank_acc']; ?></td>
                    <td><?php echo $row['ifsc']; ?></td>
                    <td><?php echo $row['res_address']; ?></td>
                    <td><?php echo $row['off_address']; ?></td>
                    <td><?php echo $row['res_mob']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['setQP']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['Asheet']; ?></td>
                    <td><?php echo $row['conveyance']; ?></td>
                    <td><?php echo $row['remark']; ?></td>
                    <td><?php echo $row['user']; ?></td>
                    <td><?php echo $row['amt3']; ?></td>
                    <td><?php echo $row['users']; ?></td>
                    <td><?php echo $row['gross']; ?></td>
                    <td><?php echo $row['tds']; ?></td>
                    <td><?php echo $row['net']; ?></td>
                    <td><?php echo $row['Pan']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
