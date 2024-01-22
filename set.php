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
    $year = $_POST[ 'year' ];
    $sem = $_POST[ 'sem' ];
    $subjectCode = $_POST[ 'sub_code' ];
    $subj = $_POST[ 'sub' ];
    $charges = $_POST[ 'charges' ];
    $expenses = $_POST[ 'expenses' ];
    $total = $_POST[ 'total' ];
    $currentDate = $_POST[ 'currentDate' ];

    $query = "INSERT INTO erp_portal.paper_setting ( dept, off_email, prog, year, sem, sub_code, sub, charges, expenses, total, currentDate) 
                  VALUES (:department, :off_email, :program, :year, :sem, :subjectCode, :subj, :charges, :expenses, :total, :currentDate)";
    $stmt = $conn->prepare( $query );
    $stmt->bindParam( ':department', $department );
    $stmt->bindParam( ':off_email', $off_email );
    $stmt->bindParam( ':program', $program );
    $stmt->bindParam( ':year', $year );
    $stmt->bindParam( ':sem', $sem );
    $stmt->bindParam( ':subjectCode', $subjectCode );
    $stmt->bindParam( ':subj', $subj );
    $stmt->bindParam( ':charges', $charges );
    $stmt->bindParam( ':expenses', $expenses );
    $stmt->bindParam( ':total', $total );
    $stmt->bindParam( ':currentDate', $currentDate );

    if ( $stmt->execute() ) {
        echo 'Form filled successfully!';
    } else {
        echo 'Error inserting data: ' . $stmt->errorInfo()[ 2 ];
    }
}

?>
