<?php
session_start();

if ($_POST) {
    include("connection.php");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize user input to prevent SQL injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $query = 'INSERT INTO erp_portal.users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($query);
    $stmt->execute([$first_name, $last_name, $email, $hashedPassword]);

    // Fetch the user information from the database after registration
    $query = 'SELECT * FROM users WHERE email = ?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetchAll()[0];
        $_SESSION['user'] = $user;
    }

    header('Location: username.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration_form.css">
</head>

<body>

    <form id = "registration_form" action="#" method="POST">

    <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
            </div>
    </div>
    
        <h2>Registration Form</h2>

        <!-- Personal Details -->
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Address Details -->
        <h3>Address Details</h3>

        <div class="form-group">
            <label for="addressType">Address Type:</label>
            <input type="text" id="addressType" name="addressType">
        </div>

        <div class="form-group">
            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality">
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" name="state">
        </div>

        <div class="form-group">
            <label for="district">District:</label>
            <input type="text" id="district" name="district">
        </div>

        <div class="form-group">
            <label for="addressLine1">Address Line 1:</label>
            <input type="text" id="addressLine1" name="addressLine1">
        </div>

        <div class="form-group">
            <label for="addressLine2">Address Line 2:</label>
            <input type="text" id="addressLine2" name="addressLine2">
        </div>

        <!-- Professional Details -->
        <h3>Professional Details</h3>

        <div class="form-group">
            <label for="position">Position:</label>
            <select id="position" name="position">
                <option value="professor">Professor</option>
                <option value="assistantProfessor">Assistant Professor</option>
                <option value="associateProfessor">Associate Professor</option>
                <option value="deputyRegistrar">Deputy Registrar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="department">Department:</label>
            <select id="department" name="department">
                <option value="appliedSciences">Applied Sciences and Humanities</option>
                <option value="computerScience">Computer Science and Engineering</option>
                <option value="electronicsCommunication">Electronics and Communication Engineering</option>
                <option value="informationTechnology">Information Technology</option>
                <option value="architecturePlanning">Architecture and Planning</option>
                <option value="mechanicalAutomation">Mechanical and Automation</option>
                <option value="management">Management</option>
                <option value="aiDataScience">Artificial Intelligence and Data Science</option>
            </select>
        </div>

        <div class="form-group">
            <label for="institution">Institution/University:</label>
            <input type="text" id="institution" name="institution">
        </div>

        <div class="form-group">
            <label for="employmentStatus">Employment Status:</label>
            <select id="employmentStatus" name="employmentStatus">
                <option value="visiting">Visiting</option>
                <option value="fullTime">Full-Time</option>
                <option value="partTime">Part-Time</option>
            </select>
        </div>

        <div class="form-group">
            <label for="startingDate">Starting Date:</label>
            <input type="date" id="startingDate" name="startingDate">
        </div>

        <!-- Upload Documents -->
        <h3>Upload Documents</h3>

        <div class="form-group">
            <label for="aadhar">Aadhar:</label>
            <input type="file" id="aadhar" name="aadhar" accept=".jpg, .jpeg, .png" required>
        </div>

        <div class="form-group">
            <label for="pan">PAN:</label>
            <input type="file" id="pan" name="pan" accept=".jpg, .jpeg, .png" required>
        </div>

        <div class="form-group">
            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf" required>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>

<script>
    document.getElementById('c').addEventListener('click', function () {
    window.open('registration_form.php','_blank');
});
</script>

</html>
