<?php 

include "dbconnect.php";

  if (isset($_POST['submit'])) {
    $coursename = $_POST['coursename'];

    $coursefee = $_POST['coursefee'];

    $duration = $_POST['duration'];

    $sql = "INSERT INTO `course`(`coursename`, `coursefee`, `duration`) VALUES ('$coursename','$coursefee','$duration')";

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

    coursename<br>

    <input type="text" name="coursename">

    <br>

    coursefee<br>

    <input type="auto_currency" name="coursefee">

    <br>

    duration<br>

    <input type="text" name="duration">

    <br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>