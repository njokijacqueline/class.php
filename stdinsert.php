<?php
include "dbconnect.php";

if (isset($_POST['submit'])) {

  $Name = $_POST['Name'];
  
  $reg_no = $_POST['reg_no'];

  $Course = $_POST['Course'];

  $Age = $_POST['Age'];

  $Email = $_POST['Email'];

  $sql = "INSERT INTO `students`(`Name`, `reg_no`, `Course`, `Age`, `Email`, ) VALUES ('$Name','$reg_no','$Course','$Age','$Email')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "New record created successfully.";

  }else{

    echo "Error:". $sql . "<br>". $conn->error;

  } 

  $conn->close(); 

}

?>

<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="" method="POST">

<fieldset>

  <legend>Personal information:</legend>

  Name:<br>

  <input type="text" name="Name">

  <br>

  Reg_no:<br>

  <input type="number" name="reg_no">

  <br>

  Course:<br>

  <input type="text" name="Course">

  <br>

  Age:<br>

  <input type="text" name="Age">

  <br>

  Email:<br>

  <input type="email" name="Email">

  <br>

 <input type="submit" name="submit" value="submit">

</fieldset>

</form>

</body>

</html>