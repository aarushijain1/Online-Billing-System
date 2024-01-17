<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('location: dashboard.php');
        exit();
    }

    include("connection.php");
    
    // Get user details
    $user = $_SESSION['user'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $name = $_POST['Name'];
        // $address = $_POST['address'];
        // $resTel = $_POST['res_tel'];
        // $resOff = $_POST['res_off'];
        // $resMob = $_POST['res_mob'];
        $department = $_POST['dept'];
        // $email = $_POST['email'];
        // $bankAcc = $_POST['bank_acc'];
        // $bankName = $_POST['bank_name'];
        // $ifsc = $_POST['ifsc'];
        // $bankBranch = $_POST['bank_branch'];
        $program = $_POST['prog'];
        $branch = $_POST['branch'];
        $sem = $_POST['sem'];
        $subjectCode = $_POST['paper_code'];
        $subj = $_POST['paper_name'];
        $session = $_POST['session'];
        $prac = $_POST['prac'];
        $student = $_POST['student'];
        $no = $_POST['no'];
        $amt = $_POST['amt'];
        $amt1 = $_POST['amt1'];
        $amt2 = $_POST['amt2'];
        $totalamt = $_POST['totalamt'];
        $rsinword = $_POST['rsinword'];
        $amt3 = $_POST['amt3'];        
        
        $query = "INSERT INTO erp_portal.external_exam 
                  ( dept, prog, branch, sem, paper_code, paper_name, session, prac, student, no, amt, amt1, amt2, totalamt, rsinword, amt3) 
                  VALUES 
                  (:department, :program, :branch, :sem, :subjectCode, :subj, :session, :prac, :student, :no, :amt, :amt1, :amt2, :totalamt, :rsinword, :amt3)";
                  
        $stmt = $conn->prepare($query);

        // $stmt->bindParam(':name', $name);
        // $stmt->bindParam(':address', $address);
        // $stmt->bindParam(':resTel', $resTel);
        // $stmt->bindParam(':resOff', $resOff);
        // $stmt->bindParam(':resMob', $resMob);
        $stmt->bindParam(':department', $department);
        // $stmt->bindParam(':email', $email);
        // $stmt->bindParam(':bankAcc', $bankAcc);
        // $stmt->bindParam(':bankName', $bankName);
        // $stmt->bindParam(':ifsc', $ifsc);
        // $stmt->bindParam(':bankBranch', $bankBranch);
        $stmt->bindParam(':program', $program);
        $stmt->bindParam(':branch', $branch);
        $stmt->bindParam(':sem', $sem);
        $stmt->bindParam(':subjectCode', $subjectCode);
        $stmt->bindParam(':subj', $subj);
        $stmt->bindParam(':session', $session);
        $stmt->bindParam(':prac', $prac);
        $stmt->bindParam(':student', $student);
        $stmt->bindParam(':no', $no);
        $stmt->bindParam(':amt', $amt);
        $stmt->bindParam(':amt1', $amt1);
        $stmt->bindParam(':amt2', $amt2);
        $stmt->bindParam(':totalamt', $totalamt);
        $stmt->bindParam(':rsinword', $rsinword);
        $stmt->bindParam(':amt3', $amt3);

        if ($stmt->execute()) {
            // Data inserted successfully
            echo "Form filled successfully!";
        } else {
            // Handle the error
            echo "Error inserting data: " . $stmt->errorInfo()[2];
        }
    }
?>
