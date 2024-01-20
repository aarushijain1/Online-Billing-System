<?php
    // Include your database connection file
    include("connection.php");

    // Retrieve data from the database
    $query = 'SELECT * FROM erp_portal.paper_setting';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Display data in your HTML as a styled table -->
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
                <th>Department</th>
                <th>Program</th>
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
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['prog']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['sub_code']; ?></td>
                    <td><?php echo $row['sub']; ?></td>
                    <td><?php echo $row['charges']; ?></td>
                    <td><?php echo $row['expenses']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
