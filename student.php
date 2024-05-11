<?php include 'dbcon.php'; 

if (isset($_POST['create_btn'])) {
    print_r($_POST);

    

    // Process form data
$Name = $_POST['studentName'];
$gender1 = $_POST['gender'];
$country1 = $_POST['country'];
$state1 = $_POST['state'];
$district1 = $_POST['district'];
$address1 = $_POST['address'];
$pinCode1 = $_POST['pinCode'];
$SchoolName = $_POST['schoolName'];
$SchoolAddress = $_POST['schoolAddress'];
$EducationClass = $_POST['educationClass'];
$ScholarshipType = $_POST['scholarshipType'];
$Stream = $_POST['stream'];
$Remarks = $_POST['remarks'];
$StudentPhoneNumber = $_POST['studentPhoneNumber'];
$GuardianPhoneNumber = $_POST['guardianPhoneNumber'];
$email1 = $_POST['email'];
$Marks = $_POST['marks'];



    $sql = "INSERT INTO student (Student_Name, Gender, Country, State, District, Address, Pincode, schoolname, Schooladdress, Currenteducation, Scholarshipname, Strem, Remark,PhoneNo, GardianPhoneno,Email,lastexammark )
    VALUES ('$Name', '$gender1', '$country1', '$state1', '$district1', '$address1', '$pinCode1', '$SchoolName', '$SchoolAddress', '$EducationClass', '$ScholarshipType', '$Stream','$Remarks','$StudentPhoneNumber', '$GuardianPhoneNumber','$email1','$Marks')";

     //$data=mysqli_query($con,$sql);
     $data=mysqli_query($con,$sql);
     
 }


?>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<title>Scholarship Program Application</title>
</head>
<body>
  <div class="form-container">
    <h2>Cure Academy Foundation Scholarship Program</h2>
    <form action="" method="POST">

      
         
      <label for="studentName">Name of Student</label>
      <input type="text" id="studentName" name="studentName" required>
  
      
      <label>Gender</label>
      <input type="radio" name="gender" value="male" required> Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="gender" value="other"> Other

      <div class="form-row">
        <div class="form-column">
      <label for="country">Country</label>
      <input type="text" id="country" name="country" value="India" required>
  </div>
      <div class="form-column">
      <label for="state">State</label>
      <select id="state" name="state" required>
        <option value="">Select State</option>
        <option value="district1">State 1</option>
        <option value="district2">State 2</option>
        <!-- Add more options as needed -->
      </select>
  </div>
<div class="form-column">
      <label for="district">District</label>
      <select id="district" name="district" required>
        <option value="">Select District</option>
        <option value="district1">District 1</option>
        <option value="district2">District 2</option>
        <!-- Add more options as needed -->
      </select>
  </div>
</div>
      <div class="form-row">
        <div class="form-column">

        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="2"></textarea>
      </div>

    
      <div class="form-column">
      <label for="pinCode">Pin Code</label>
      <input type="text" id="pinCode" name="pinCode" required>
     </div>
 </div>





      <label for="schoolName">Name of School / College</label>
      <input type="text" id="schoolName" name="schoolName" required>

      <label for="schoolAddress">Address of School / College</label>
      <textarea id="schoolAddress" name="schoolAddress" rows="3" required></textarea>

      
             <div class="form-row">
        <div class="form-column"> 
      <label for="educationClass">Current Ongoing Education Class</label>
      <select id="educationClass" name="educationClass" required>
        <option value="">Select Education Class</option>
        <option value="class1">Class 1</option>
        <option value="class2">Class 2</option>
        <!-- Add more options as needed -->
      </select>
  </div>
  
    <div class="form-column"> 
      <label for="scholarshipType">Scholarship Applied For</label>
      <select id="scholarshipType" name="scholarshipType" required>
        <option value="">Select Scholarship Type</option>
        <option value="academicEducation">Academic Education</option>
        <option value="academicCoaching">Academic Coaching</option>
        <!-- Add more options as needed -->
      </select>
  </div>
</div>
  

      <div class="form-row">
        <div class="form-column"> 
      <label for="stream">Stream</label>
      <input type="text" id="stream" name="stream" required>
  </div>
       <div class="form-column"> 
      <label for="marks">Marks in Last Exam</label>
      <input type="text" id="marks" name="marks">
  </div>
</div>

      

     <div class="form-row">
       <div class="form-column"> 
      <label for="email">E Mail ID</label>
      <input type="email" id="email" name="email" required>
  </div>

        <div class="form-column">
      <label for="studentPhoneNumber">Student's Phone Number</label>
      <input type="tel" id="studentPhoneNumber" name="studentPhoneNumber" required>
    </div>
       <div class="form-column">
      <label for="guardianPhoneNumber">Guardian's Phone Number</label>
      <input type="tel" id="guardianPhoneNumber" name="guardianPhoneNumber" required>
      </div>
      
      
   </div>

     <label for="remarks">Remarks</label>
      <textarea id="remarks" name="remarks" rows="3"></textarea>




      <!-- Other form fields... -->
      
       <div class="text-right">
        <button type="submit" name="create_btn">Submit Application</button>
       </div>
    </form>
  </div>
</body>
</html>