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

    <form id="adminregistration_form" action="adminreg.php" method="POST">

        <div class="container">
            <img src="logo.jpg" alt="IGDTUW LOGO" height="100px">
            <div class="text">
                <p>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</p>
                <p>Kashmere Gate, Delhi-110006</p>
                <p>ADMIN REGISTRATION FORM</p>
            </div>
        </div>
        <br>

        <h3>Admin Profile</h3>

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

        <h3>Contact Details</h3>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="tel" id="mobileNumber" name="mobileNumber" maxlength="10" oninput="validatePhoneNumber(this.value)" required>
        </div>

        <div class="form-group">
            <label for="offemail">Official Email:</label>
            <input type="email" id="offemail" name="offemail">
        </div>

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
            <input type="text" id="pincode" name="pincode" maxlength="6" oninput="validatePinCode(this.value)" required>
        </div>        

        <h3>Upload Document</h3>

        <div class="form-group">
            <label for="image">Passport Image:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .pdf" required>
        </div>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>

</body>

<script>
    document.getElementById('c').addEventListener('click', function () {
        window.open('adminregistration_form.php', '_blank');
    });

    function validatePhoneNumber(value) {
      const phoneNumberError = document.getElementById('phoneNumberError');
      const isValid = /^\d{10}$/.test(value);

      if (isValid) {
        phoneNumberError.textContent = '';
      } else {
        phoneNumberError.textContent = 'Please enter a valid 10-digit phone number.';
}
}

    function validatePinCode(value) {
      const pinCodeError = document.getElementById('pinCodeError');
      const isValid = /^\d{6}$/.test(value);

      if (isValid) {
        pinCodeError.textContent = '';
      } else {
        pinCodeError.textContent = 'Please enter a valid 6-digit PIN code.';
}
}

</script>

</html>
