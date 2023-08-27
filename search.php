<!DOCTYPE html>

<html>
<?php

$dbms = new mysqli("localhost", "root", "96Password$", "shop", "3306");

$q = "SELECT * FROM customer;";

$resultset = $dbms->query($q);

$row = $resultset->num_rows;


?>

<head>
    <title>Search User</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;

        }
    </style>
</head>

<body>


        <h1>User Table</h1>

    <table style="width: 100%;">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>NIC</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>City</th>

        <?php

        for ($i = 0; $i < $row; $i++) {
            $d =  $resultset->fetch_assoc();

        ?>
            <tr>
                <td><?php echo $d["id"];?></td>
                <td><?php echo $d["first_name"];?></td>
                <td><?php echo $d["last_name"];?></td>
                <td><?php echo $d["nic"];?></td>
                <td><?php echo $d["email"];?></td>
                <td><?php echo $d["contact"];?></td>
                <td><?php echo $d["city"];?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <br/>
    <script src="script.js"></script>
    <button type="submit" onclick="goToHome();" >Register New User</button>

</body>

</html>