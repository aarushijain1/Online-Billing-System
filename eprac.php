<?php
session_start();

if ( !isset( $_SESSION[ 'user' ] ) ) {
    header( 'location: dashboard.php' );
    exit();
}

include( 'connection.php' );

// Get user details
$user = $_SESSION[ 'user' ];

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $department = $_POST[ 'dept' ];
    $off_email = $_POST[ 'off_email' ];
    $program = $_POST[ 'prog' ];
    $branch = $_POST[ 'branch' ];
    $year = $_POST[ 'year' ];
    $sem = $_POST[ 'sem' ];
    $subjectCode = $_POST[ 'paper_code' ];
    $subj = $_POST[ 'paper_name' ];
    $session = $_POST[ 'session' ];
    $prac = $_POST[ 'prac' ];
    $student = $_POST[ 'student' ];
    $no = $_POST[ 'no' ];
    $amt = $_POST[ 'amt' ];
    $amt1 = $_POST[ 'amt1' ];
    $amt2 = $_POST[ 'amt2' ];
    $totalamt = $_POST[ 'totalamt' ];
    $rsinword = $_POST[ 'rsinword' ];
    $amt3 = $_POST[ 'amt3' ];
    $currentDate = $_POST[ 'currentDate' ];

    $query = "INSERT INTO erp_portal.external_exam 
                  ( dept, off_email, prog, branch, year, sem, paper_code, paper_name, session, prac, student, no, amt, amt1, amt2, totalamt, rsinword, amt3, currentDate) 
                  VALUES 
                  (:department, :off_email, :program, :branch, :year, :sem, :subjectCode, :subj, :session, :prac, :student, :no, :amt, :amt1, :amt2, :totalamt, :rsinword, :amt3, :currentDate)";

    $stmt = $conn->prepare( $query );

    $stmt->bindParam( ':department', $department );
    $stmt->bindParam( ':off_email', $off_email );
    $stmt->bindParam( ':program', $program );
    $stmt->bindParam( ':branch', $branch );
    $stmt->bindParam( ':year', $year );
    $stmt->bindParam( ':sem', $sem );
    $stmt->bindParam( ':subjectCode', $subjectCode );
    $stmt->bindParam( ':subj', $subj );
    $stmt->bindParam( ':session', $session );
    $stmt->bindParam( ':prac', $prac );
    $stmt->bindParam( ':student', $student );
    $stmt->bindParam( ':no', $no );
    $stmt->bindParam( ':amt', $amt );
    $stmt->bindParam( ':amt1', $amt1 );
    $stmt->bindParam( ':amt2', $amt2 );
    $stmt->bindParam( ':totalamt', $totalamt );
    $stmt->bindParam( ':rsinword', $rsinword );
    $stmt->bindParam( ':amt3', $amt3 );
    $stmt->bindParam( ':currentDate', $currentDate );

    if ( $stmt->execute() ) {
        echo 'Form filled successfully!';
    } else {
        echo 'Error inserting data: ' . $stmt->errorInfo()[ 2 ];
    }
}
?>
