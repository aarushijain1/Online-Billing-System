<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('location: dashboard.php');
        exit();
    }

    include("connection.php");
    
    // Get user details
    $user = $_SESSION['user'];
    // $userId = $user['id']; // Assuming the user ID is stored in the 'id' field
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // $formNo = $_POST['formNo'];
        $department = $_POST['dept'];
        $program = $_POST['prog'];
        $subjectCode = $_POST['sub_code'];
        $subj = $_POST['sub'];
        $charges = $_POST['charges'];
        $expenses = $_POST['expenses'];
        $total = $_POST['total'];
        
        
        $query = "INSERT INTO erp_portal.paper_setting ( dept, prog, sub_code, sub, charges, expenses, total) 
                  VALUES (:department, :program, :subjectCode, :subj, :charges, :expenses, :total)";
        $stmt = $conn->prepare($query);
        // $stmt->bindParam(':userId', $userId);
        // $stmt->bindParam(':formNo', $formNo);
        $stmt->bindParam(':department', $department);
        $stmt->bindParam(':program', $program);
        $stmt->bindParam(':subjectCode', $subjectCode);
        $stmt->bindParam(':subj', $subj);
        $stmt->bindParam(':charges', $charges);
        $stmt->bindParam(':expenses', $expenses);
        $stmt->bindParam(':total', $total);
    
        if ($stmt->execute()) {
            // Data inserted successfully
            echo "Form filled successfully!";
        } else {
            // Handle the error
            echo "Error inserting data: " . $stmt->errorInfo()[2];
        }
    }
    
    
?>
