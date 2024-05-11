<?php
include 'dbcon.php';

if (isset($_POST['create_btn'])) {

    $Name1 = $_POST['name'];
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];
    $confirmPassword1 = $_POST['confirmPassword'];

    $sql = "INSERT INTO login ( name,username, password, conform_password)
            VALUES ('$Name1','$username1', '$password1', '$confirmPassword1')";

    $data = mysqli_query($con, $sql);

   
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Registration Form</title>
    <style>
      /* Add your previous CSS styles here */

.container {

    max-width: 400px;
    margin: 0 auto;
    margin-top: 70px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 140px;
    cursor: pointer;

}

    </style>
</head>
<body>
    <div class="container">
        <h2 align="center">Register</h2>
        <form method="post">
             <div class="form-group">
                <label for="username">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group buttons-row" align="center">
                <button type="submit" name="create_btn">Register</button>
         </div>
            <p class="already-registered">Already registered? <a href="login.php">Click Here</a> to log in.</p>
        </form>
    </div>
    
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const form = document.querySelector("form"); // Select the form element

    form.addEventListener("submit", function(event) { // Use the "submit" event
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (!isPasswordValid(password)) {
            alert("Password must meet the specified conditions.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Form will be submitted if validation passes

           alert("Registration Done successfully ");
    });

    // Rest of your validation code...
       function isPasswordValid(password) {
        // Password conditions: 
        // At least one uppercase letter
        // At least one special character
        // Minimum 8 characters
        // At least one digit (0-9)
        const uppercaseRegex = /[A-Z]/;
        const specialCharacterRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        const digitRegex = /[0-9]/;

        return (
            password.length >= 8 &&
            uppercaseRegex.test(password) &&
            specialCharacterRegex.test(password) &&
            digitRegex.test(password)
        );
    }
      
});


</script>

 
</body>
</html>
