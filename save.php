<?php

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$NIC = $_POST["nic"];
$Email = $_POST["email"];
$mobileNo = $_POST["mobile"];
$City = $_POST["city"];
$btnValue = $_POST["b1"];

if ($btnValue == "save") {

    if (strlen($firstName) == 0) {
        echo "Please enter First Name";

?>
        <br /><br />
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
        <button onclick="goToHome();">Back</button>
    <?php



    } else if (strlen($lastName) == 0) {
        echo "Please enter Last Name";
    ?>
        <br /><br />
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
        <button onclick="goToHome();">Back</button>
    <?php
    } else if (strlen($NIC) == 0) {
        echo "Please Enter Your NIC";
    ?>
        <br /><br />
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
        <button onclick="goToHome();">Back</button>
    <?php
    } else if (strlen($Email) == 0) {
        echo "Please Enter Your Email";
    ?>
        <br /><br />
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
        <button onclick="goToHome();">Back</button>
    <?php
    } else if (strlen($mobileNo) == 0) {
        echo "Please Enter Your Mobile No";
    ?>
        <br /><br />
        <link rel="stylesheet" href="style.css" />
        <script src="script.js"></script>
        <button onclick="goToHome();">Back</button>
        <?php
    } else {

        $dbms = new mysqli("localhost", "root", "96Password$", "shop", "3306");

        $q = "INSERT INTO customer(`first_name`,`last_name`,`nic`,`email`,`contact`,`city`)VALUES('" . $firstName . "','" . $lastName . "','" . $NIC . "','" . $Email . "','" . $mobileNo . "','" . $City . "');";

        if ($dbms->connect_error) {
            echo "Your Database connection fail please Try again";
        } else {
            $dbms->query($q);
        ?>

            <script src="script.js"></script>
            <script>
                goToHome();
            </script>
    <?php
        }
    }
}
if ($btnValue == "search") {
    ?>
    <script src="script.js"></script>
    <script>
        goToSearch();
    </script>


<?php
}

?>