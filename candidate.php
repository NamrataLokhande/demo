<?php
include 'dbcon.php';

if (isset($_POST['create_btn'])) {
    $Name = $_POST['name'];
    $guardianName1 = $_POST['guardianName'];
    $contactNumber1 = $_POST['contactNumber'];
    $address1 = $_POST['address'];
    $mailID1 = $_POST['mailID'];
    $scholarshipApplied1 = $_POST['scholarshipApplied'];

    $sql = "INSERT INTO candidate (StudentName, GuardianName, ContactNumber, Address, MailID, ScholarshiAppliedFor)
    VALUES ('$Name', '$guardianName1', '$contactNumber1', '$address1', '$mailID1', '$scholarshipApplied1')";

     $data = mysqli_query($con, $sql);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0f0f0;
  }

  .form-container {
    background-color: #ffffff;
    width: 400px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .form-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .form-group label {
    display: block;
    font-weight: bold;
  }

  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .form-group select {
    height: 40px;
  }

  .popup-content {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  .submitbutton {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
</style>
<title>Scholarship Application</title>
</head>
<body>
  <div class="form-container">
    <h2>Cure Academy Foundation Scholarship Program</h2>
    <form id="scholarshipForm" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="guardianName">Guardian Name</label>
        <input type="text" id="guardianName" name="guardianName" required>
      </div>

      

      <div class="form-group">
        <label for="contactNumber">Contact Number</label>
        <input type="text" id="contactNumber" name="contactNumber" required>
      </div>

      <div class="form-group">
        <label for="contactNumber">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
    
      
      <div class="form-group">
        
        <label for="mailID">Mail ID</label>
        <input type="email" id="mailID" name="mailID" required>
      
    </div>

      <div class="form-group">
        <label for="scholarshipApplied">Scholarship Applied For</label>
        <select id="scholarshipApplied" name="scholarshipApplied" required>
          <option value="">Select Scholarship Type</option>
          <option value="academicEducation">Academic Education</option>
          <option value="academicCoaching">Academic Coaching</option>
          <!-- Add more options as needed -->
        </select>
      </div>

        <button class="submitbutton" type="submit" name="create_btn">Submit Application</button>

    </form>
  </div>

</body>
</html>
