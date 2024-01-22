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

    $off_email = $_POST[ 'off_email' ];
    $year = $_POST[ 'year' ];
    $sem = $_POST[ 'sem' ];
    $paper_code = $_POST[ 'paper_code' ];
    $setQP = $_POST[ 'setQP' ];

    $nosheet = $_POST[ 'nosheet' ];
    $peramt = $_POST[ 'peramt' ];
    $workoutamt = $_POST[ 'workoutamt' ];
    $conveyance = $_POST[ 'conveyance' ];
    $totalamt = $_POST[ 'totalamt' ];
    $remark = $_POST[ 'remark' ];
    $currentDate = $_POST[ 'currentDate' ];

    $query = "INSERT INTO erp_portal.paper_evaluation 
            (off_email, year, sem, paper_code, setQP, nosheet, peramt, workoutamt, conveyance, totalamt, remark, currentDate) 
            VALUES 
            (:off_email, :year, :sem, :paper_code, :setQP, :nosheet, :peramt, :workoutamt, :conveyance, :totalamt, :remark, :currentDate)";

    $stmt = $conn->prepare( $query );

    $stmt->bindParam( ':off_email', $off_email );
    $stmt->bindParam( ':year', $year );
    $stmt->bindParam( ':sem', $sem );
    $stmt->bindParam( ':paper_code', $paper_code );
    $stmt->bindParam( ':setQP', $setQP );
    $stmt->bindParam( ':nosheet', $nosheet );
    $stmt->bindParam( ':peramt', $peramt );
    $stmt->bindParam( ':workoutamt', $workoutamt );
    $stmt->bindParam( ':conveyance', $conveyance );
    $stmt->bindParam( ':totalamt', $totalamt );
    $stmt->bindParam( ':remark', $remark );
    $stmt->bindParam( ':currentDate', $currentDate );

    if ( isset( $_POST[ 'answer' ] ) ) {
        $answer = $_POST[ 'answer' ];

    } else {
    }

    if ( $stmt->execute() ) {
        echo 'Form filled successfully!';
    } else {
        echo 'Error inserting data: ' . $stmt->errorInfo()[ 2 ];
    }

}

?>
