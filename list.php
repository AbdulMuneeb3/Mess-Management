<?php
include "config.php";

$sql = "SELECT * FROM register";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title> View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
</head>

<body style="background-color: rgba(240, 225, 190, 0.70)">

    <div class="container">

    <h1>Students Register List</h1>

        <table class="table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Full Name</th>

                    <th>User Name</th>

                    <th>Email</th>

                    <th>Phone</th>

                    <th>Gender</th>

                </tr>

            </thead>

            <tbody>
                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['fullname']; ?></td>

                            <td><?php echo $row['username']; ?></td>

                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['pnumber']; ?></td>

                            <td><?php echo $row['gender']; ?></td>

                        </tr>

                <?php       }
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>