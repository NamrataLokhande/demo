<?php
include'dbcon.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to validate the user's credentials
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // Valid credentials, redirect to a new page
        header("Location: candidate.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Form</title>
    <style>
        /* Your custom CSS styles here */
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .container h2 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-secondary {
            color: #6c757d;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Log In</h2>
        <form  action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
               <button id="loginButton" class="btn btn-primary" type="submit">Log In</button>
             </div>
            <p class="text-center">Don't have an account? <a href="register.php">Sign Up</a></p>
        </form>
    </div>

    <!-- Add this just before the closing </body> tag -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const loginForm = document.querySelector("#loginForm");
        const loginButton = document.querySelector("#loginButton");

        loginForm.addEventListener("submit", function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Get the username and password
            const username = document.querySelector("#username").value;
            const password = document.querySelector("#password").value;

            // Perform a simple validation (you can implement more sophisticated checks)
            if (username.trim() === "" || password.trim() === "") {
                alert("Please enter both username and password.");
                return;
            }

            // Continue with form submission
            loginForm.submit();
        });
    });
</script>

</body>
</html>
