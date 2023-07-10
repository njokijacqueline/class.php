<?php 

include "dbconnect.php";

  if (isset($_POST['submit'])) {
    $parentsname= $_POST['parentsname'];

    $phonenumber = $_POST['phonenumber'];

    $residence = $_POST['residence'];

    $sql = "INSERT INTO `parents`(`parentsname`, `phonenumber`, `residence`) VALUES ('$parentsname','$phonenumber','$residence')";

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

    parentsname<br>

    <input type="text" name="parentsname">

    <br>

    phonenumber<br>

    <input type="number" name="phonenumber">

    <br>

    residence<br>

    <input type="text" name="residence">

    <br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>