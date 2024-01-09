<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        <?php include "registration_form.css" ?>
    </style>

</head>

<body>

    <form id="registration_form" action="reg.php" method="POST">

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
            <input type="tel" id="offphoneNumber" name="offphoneNumber">
        </div>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="tel" id="mobileNumber" name="mobileNumber" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="offemail">Official Email:</label>
            <input type="email" id="offemail" name="offemail">
        </div>

        <!-- Financial Details -->
        <h3>Financial Details</h3>

        <div class="form-group">
            <label for="accno">Account Number:</label>
            <input type="text" id="accno" name="accno" required>
        </div>

        <div class="form-group">
            <label for="accname">Acount Holder Name:</label>
            <input type="text" id="accname" name="accname" required>
        </div>

        <div class="form-group">
            <label for="bank">Bank Name:</label>
            <select id="bank" name="bank" onchange="checkOtherOption(this);" required>
                <option value="" disabled selected>Select a bank</option>
                <option value="Allahabad Bank">Allahabad Bank</option>
                <option value="Andhra Bank">Andhra Bank</option>
                <option value="Axis Bank">Axis Bank</option>
                <option value="Bandan Bank">Bandan Bank</option>
                <option value="Bank of Bahrain and Kuwait">Bank of Bahrain and Kuwait</option>
                <option value="Bank of Baroda">Bank of Baroda</option>
                <option value="Bank of India">Bank of India</option>
                <option value="Bank of Maharashtra">Bank of Maharashtra</option>
                <option value="Bassein Catholic Co-operative Bank">Bassein Catholic Co-operative Bank</option>
                <option value="Bhartiya Mahila Bank">Bhartiya Mahila Bank</option>
                <option value="BNP Paribas">BNP Paribas</option>
                <option value="Canara Bank">Canara Bank</option>
                <option value="Catholic Syrian Bank">Catholic Syrian Bank</option>
                <option value="Central Bank of India">Central Bank of India</option>
                <option value="City Union Bank">City Union Bank</option>
                <option value="Corporation bank">Corporation bank</option>
                <option value="Cosmos Bank">Cosmos Bank</option>
                <option value="DCB BANK Personal">DCB BANK Personal</option>
                <option value="Dena Bank">Dena Bank</option>
                <option value="Deustche Bank">Deustche Bank</option>
                <option value="Development Credit Bank">Development Credit Bank</option>
                <option value="Dhanlaxmi Bank">Dhanlaxmi Bank</option>
                <option value="Federal Bank">Federal Bank</option>
                <option value="HDFC Bank">HDFC Bank</option>
                <option value="ICICI Bank">ICICI Bank</option>
                <option value="IDBI Bank">IDBI Bank</option>
                <option value="Indian Bank">Indian Bank</option>
                <option value="Indian Overseas NetBanking">Indian Overseas NetBanking</option>
                <option value="Indusind Bank">Indusind Bank</option>
                <option value="ING Vysya Bank">ING Vysya Bank</option>
                <option value="J and K Bank">J and K Bank</option>
                <option value="Janta Sahakari Bank">Janta Sahakari Bank</option>
                <option value="Karnataka Bank">Karnataka Bank</option>
                <option value="Karur Vysya Bank">Karur Vysya Bank</option>
                <option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
                <option value="Lakshmi Vilas Bank">Lakshmi Vilas Bank</option>
                <option value="Mehsana Urban Co-op Bank">Mehsana Urban Co-op Bank</option>
                <option value="NKGSB Co-operative Bank">NKGSB Co-operative Bank</option>
                <option value="Oriental Bank Of Commerce">Oriental Bank Of Commerce</option>
                <option value="Punjab & Sind Bank">Punjab & Sind Bank</option>
                <option value="Punjab and Maharashtra Cooperative Bank">Punjab and Maharashtra Cooperative Bank</option>
                <option value="Punjab National Bank">Punjab National Bank</option>
                <option value="Ratnakar Bank Limited">Ratnakar Bank Limited</option>
                <option value="RBL Bank">RBL Bank</option>
                <option value="Saraswat Cooperative Bank">Saraswat Cooperative Bank</option>
                <option value="Shamrao Vithal Cooperative Bank">Shamrao Vithal Cooperative Bank</option>
                <option value="South Indian Bank">South Indian Bank</option>
                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                <option value="State Bank Of Bikaner and Jaipur">State Bank Of Bikaner and Jaipur</option>
                <option value="State Bank of Hyderabad">State Bank of Hyderabad</option>
                <option value="State Bank of India">State Bank of India</option>
                <option value="State Bank of Mysore">State Bank of Mysore</option>
                <option value="State Bank of Patiala">State Bank of Patiala</option>
                <option value="State Bank of Travancore">State Bank of Travancore</option>
                <option value="SVC Bank">SVC Bank</option>
                <option value="Syndicate Bank">Syndicate Bank</option>
                <option value="Tamilnad Mercantile Bank">Tamilnad Mercantile Bank</option>
                <option value="Tamilnadu Cooperative Bank">Tamilnadu Cooperative Bank</option>
                <option value="The Kalyan Janata Sahakari Bank">The Kalyan Janata Sahakari Bank</option>
                <option value="The Royal Bank of Scotland">The Royal Bank of Scotland</option>
                <option value="TJSB Bank (Erstwhile Thane Janata Sahakari Bank)">TJSB Bank (Erstwhile Thane Janata
                    Sahakari Bank)</option>
                <option value="UCO Bank">UCO Bank</option>
                <option value="Union Bank of India">Union Bank of India</option>
                <option value="United Bank Of India">United Bank Of India</option>
                <option value="Vijaya Bank">Vijaya Bank</option>
                <option value="Yes Bank">Yes Bank</option>
                <option value="other">Other</option>
            </select>
            <input type="text" id="otherBank" name="otherBank" style="display:none" placeholder="Enter other bank name">
        </div>

        <div class="form-group">
            <label for="bank_no">Bank No.:</label>
            <input type="text" id="bank_no" name="bank_no" required>
        </div>

        <div class="form-group">
            <label for="ifsc">IFSC Code:</label>
            <input type="text" id="ifsc" name="ifsc" required>
        </div>

        <div class="form-group">
            <label for="pan">PAN Number:</label>
            <input type="text" id="pan" name="pan" required>
        </div>

        <!-- Address Details -->
        <h3>Address Details</h3>

        <div class="form-group">
            <label for="address">Residential Address:</label>
            <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
            <label for="address">Office Address:</label>
            <input type="text" id="address" name="off_address">
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
            <input type="text" id="pincode" name="pincode" required>
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
                <option value="srfjrf">SRF/JRF</option>
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
            </select>
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
            <input type="file" id="resume" name="resume" accept=".jpg, .jpeg, .png, .pdf">
        </div>
        <div class="form-group">
            <label for="sign">Signature:</label>
            <input type="file" id="sign" name="sign" accept=".jpg, .jpeg, .png, .pdf" required>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>

</body>

<script>
    document.getElementById('c').addEventListener('click', function () {
        window.open('registration_form.php', '_blank');
    });

    function checkOtherOption(select) {
        let otherBankInput = document.getElementById('otherBank');
        otherBankInput.style.display = (select.value === 'other') ? 'block' : 'none';
        otherBankInput.required = (select.value === 'other');
    }
</script>

</html>
