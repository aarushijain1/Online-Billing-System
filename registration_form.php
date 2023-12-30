<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style> <?php include "registration_form.css" ?> </style>

</head>

<body>

    <form id = "registration_form" action="reg.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>REGISTRATION FORM</p>
            </div>
        </div>
        <br>
        <!-- Personal Details -->
        <h3>Faculty Profile</h3>

        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name">
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

        <!-- Contact Details -->
        <h3>Contact Details</h3>

        <div class="form-group">
            <label for="resphoneNumber">Residential Telephone Number:</label>
            <input type="tel" id="resphoneNumber" name="resphoneNumber">
        </div>

        <div class="form-group">
            <label for="offphoneNumber">Office Telephone Number:</label>
            <input type="tel" id="offphoneNumber" name="offphoneNumber" required>
        </div>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="tel" id="mobileNumber" name="mobileNumber" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="offemail">Official Email:</label>
            <input type="email" id="offemail" name="offemail" required>
        </div>
        <!-- Financial Details -->
        <h3>Financial Details</h3>

        <div class="form-group">
            <label for="accno">Account Number:</label>
            <input type="number" id="accno" name="accno" required>
        </div>

        <div class="form-group">
            <label for="accname">Acount Holder Name:</label>
            <input type="text" id="accname" name="accname" required>
        </div>

        <div class="form-group">
            <label for="bank">Bank Name:</label>
            <input type="text" id="bank" name="bank" required>
        </div>

        <div class="form-group">
            <label for="ifsc">IFSC Code:</label>
            <input type="text" id="ifsc" name="ifsc" required>
        </div>

        <div class="form-group">
            <label for="pan">PAN Number:</label>
            <input type="number" id="pan" name="pan" required>
        </div>
        <!-- Address Details -->
        <h3>Address Details</h3>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" required>
        </div>

        <div class="form-group">
            <label for="state">City:</label>
            <input type="text" id="city" name="city">
        </div>

        <div class="form-group">
            <label for="district">District:</label>
            <input type="text" id="district" name="district">
        </div>

        <div class="form-group">
            <label for="pincode">Pin Code:</label>
            <input type="number" id="pincode" name="pincode" required>
        </div>
        <!-- Professional Details -->
        <h3>Professional Details</h3>

        <div class="form-group">
            <label for="position">Position:</label>
            <select id="position" name="position">
                <option value="" disabled selected>Select an option</option>
                <option value="professor">Professor</option>
                <option value="assistantProfessor">Assistant Professor</option>
                <option value="associateProfessor">Associate Professor</option>
                <option value="deputyRegistrar">Deputy Registrar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="department">Department:</label>
            <select id="department" name="department">
                <option value="" disabled selected>Select an option</option>
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
                <option value="" disabled selected>Select an option</option>
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
            <label for="image">Passport Image:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .pdf" required>
        </div>
        <div class="form-group">
            <label for="pancard">PAN Card:</label>
            <input type="file" id="pancard" name="pancard" accept=".jpg, .jpeg, .png, .pdf" required>
        </div>
        <div class="form-group">
            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".jpg, .jpeg, .png, .pdf" required>
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
