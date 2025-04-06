<?php
include 'connection.php';

$submitted = false;
$submittedData = [];


if (isset($_POST['submit'])) {
  $sid = $_POST['sid'];
  $sname = $_POST['sname'];
  $semail = $_POST['semail'];
  $scourse = $_POST['scourse'];
  $saddress = $_POST['saddress'];
  $snumber = $_POST['snumber'];

  $sql = "insert into studentprofilecard.userdata (sid, sname, semail, scourse, saddress, snumber) 
          values ('$sid', '$sname', '$semail', '$scourse', '$saddress', '$snumber')";

  $result = mysqli_query($connection, $sql);

  
  if ($result) {
    $submitted = true;
    $submittedData = compact('sid', 'sname', 'semail', 'scourse', 'saddress', 'snumber');
  } else {
    echo "Error: " . mysqli_error($connection);
  }

  mysqli_close($connection);
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Student Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container" id="formSection">
  <h2>Student Registration</h2>
  <form method="post" action="" id="registrationForm" novalidate>
    <label for="studentId">Student ID</label>
    <input type="text" id="studentId" name="sid" placeholder="Enter Student ID">
    <small class="error-text" id="studentIdError"></small>

    <label for="name">Full Name</label>
    <input type="text" id="name" name="sname" placeholder="Enter Full Name">
    <small class="error-text" id="nameError"></small>

    <label for="email">Email</label>
    <input type="email" id="email" name="semail" placeholder="Enter Gmail">
    <small class="error-text" id="emailError"></small>

    <label for="course">Course</label>
    <input type="text" id="course" name="scourse" placeholder="Enter Course Name">
    <small class="error-text" id="courseError"></small>

    <label for="address">Address</label>
    <input type="text" id="address" name="saddress" placeholder="Enter Address">
    <small class="error-text" id="addressError"></small>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="snumber" placeholder="Enter Phone Number">
    <small class="error-text" id="phoneError"></small>

    <button type="submit" name="submit">Register</button>
  </form>

  <div class="form-container" id="profileSection" style="display: none;">
  <h2>Student Profile</h2>
  <div id="profileInfo"></div>
</div>

</div>

<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
