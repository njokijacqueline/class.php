<?php 

include "dbconnect.php";

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>id</th>

        <th>Name</th>

        <th>reg_no</th>

        <th>Course</th>

        <th>Age</th>

        <th>Email</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['reg_no']; ?></td>

                    <td><?php echo $row['Course']; ?></td>

                    <td><?php echo $row['Age']; ?></td>

                    <td><?php echo $row['Email']; ?></td>

                    <td><a class="btn btn-info" href="stdupdate.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>