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
        // $pan = $_POST['Pan'];
        // $bankAcc = $_POST['bank_acc'];
        // $ifsc = $_POST['ifsc'];
        // $Resaddress = $_POST['res_address'];
        // $Offaddress = $_POST['off_address'];
        // $resMob = $_POST['res_mob'];
        // $email = $_POST['email'];
            // $setQP = $_POST['setQP']; 
            $date = $_POST['date'];
            $Asheet = $_POST['Asheet'];
            $conveyance = $_POST['conveyance'];
            $remark = $_POST['remark'];
            $user = $_POST['user'];
            $amt3 = $_POST['amt3'];
            $users = $_POST['users'];
            // $gross = $_POST['gross'];
            // $tds = $_POST['tds'];
            // $net = $_POST['net'];
       
        
        $query = "INSERT INTO erp_portal.paper_evaluation 
                  ( date, Asheet, conveyance, remark, user, amt3, users) 
                  VALUES 
                  ( :date, :Asheet, :conveyance, :remark, :user, :amt3, :users)";
                  
        $stmt = $conn->prepare($query);

        // $stmt->bindParam(':name', $name);
        // $stmt->bindParam(':pan', $pan);
        // $stmt->bindParam(':bankAcc', $bankAcc);
        // $stmt->bindParam(':ifsc', $ifsc);
        // $stmt->bindParam(':Resaddress', $Resaddress);
        // $stmt->bindParam(':Offaddress', $Offaddress);
        // $stmt->bindParam(':resMob', $resMob);
        // $stmt->bindParam(':email', $email);
        //    $stmt->bindParam(':setQP', $setQP);
           $stmt->bindParam(':date', $date);
           $stmt->bindParam(':Asheet', $Asheet);
           $stmt->bindParam(':conveyance', $conveyance);
           $stmt->bindParam(':remark', $remark);
           $stmt->bindParam(':user', $user);
           $stmt->bindParam(':amt3', $amt3);
           $stmt->bindParam(':users', $users);
        //    $stmt->bindParam(':gross', $gross);
        //    $stmt->bindParam(':tds', $tds);
        //    $stmt->bindParam(':net', $net);

        if (isset($_POST['answer'])) {
            // Retrieve the selected value
            $answer = $_POST['answer'];
    
            // Now you can use $answer in your database insertion code or elsewhere
        } else {
            // Handle the case when the 'answer' key is not set
            echo "Please select an answer to the question.";
        }

        if ($stmt->execute()) {
            // Data inserted successfully
            echo "Form filled successfully!";
        } else {
            // Handle the error
            echo "Error inserting data: " . $stmt->errorInfo()[2];
        }
    }
?>
