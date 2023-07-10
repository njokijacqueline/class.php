<?php 

include "dbconnect.php";

    if (isset($_POST['update'])) {

        $student_id = $_POST['id'];

        $Name = $_POST['Name'];

        $reg_no= $_POST['reg_no'];

        $Course = $_POST['Course'];

        $Age = $_POST['Age'];

        $Email = $_POST['Email'];

        $sql = "UPDATE `students` SET `Name`='$Name',`reg_no`='$reg_no',`Course`='$Course',`Age`='$Age',`Email`='$Email' WHERE `id`='$student_id'";

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $student_id = $_GET['id'];

    $sql = "SELECT * FROM `students` WHERE `id`='$student_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) { 

        while ($row = $result->fetch_assoc()) {

            $Name = $row['Name'];

            $reg_no = $row['reg_no'];

            $Course = $row['Course'];

            $Age = $row['Age'];

            $Email = $row['Email'];

            $id = $row['id'];

        } 

    ?>

        <h2>Student Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Name:<br>

            <input type="text" name="Name" value="<?php echo $Name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            reg_no:<br>

            <input type="number" name="reg_no" value="<?php echo $reg_no; ?>">

            <br>

            Course:<br>

            <input type="text" name="Course" value="<?php echo $Course; ?>">

            <br>

            Age:<br>

            <input type="number" name="Age" value="<?php echo $Age; ?>">

            <br>

            Email:<br>

            <input type="email" name="Email" value="<?php echo $Email; ?>">

            <br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 