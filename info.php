<?php
session_start();
include 'dbcon.php'; // Include your database connection here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username1 = mysqli_real_escape_string($con, $_POST['username']);
    $password1= $_POST['password']; // Not using mysqli_real_escape_string for password

    $sql = "SELECT * FROM login WHERE username = '$username1' AND password = '$password1'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username1;
        header("Location: changepassword1.php"); // Redirect to change password page
        exit();
    } else {
        header("Location: info.php"); // Redirect back to login page on invalid credentials
        exit();
    }
}
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
        <form  action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group d-flex justify-content-between align-items-center">
                <button id="loginButton" class="btn btn-primary" type="button">Log In</button>
                <a href="changepassword1.php" class="text-secondary">Change Password?</a>
            </div>
        </form>
    </div>
</body>
</html>
