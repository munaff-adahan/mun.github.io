<!DOCTYPE html>

<html>

<head>
    <title>SignUpPage</title>
</head>

<body>

    <h1>User Registration</h1>

    <form action="save.php" method="POST">

        <table>
            <tr>
                <td><span>First Name</span></td>
                <td><input type="text" name="firstname" /></td>


            </tr>
            <tr>
                <td><span>Last Name</span></td>
                <td><input type="text" name="lastname" /></td>

            </tr>
            <tr>
                <td><span>NIC</span></td>
                <td><input type="text" name="nic" /></td>

            </tr>
            <tr>
                <td><span>Email</span></td>
                <td><input type="text" name="email" /></td>

            </tr>
            <tr>
                <td><span>Mobile No</span></td>
                <td><input type="text" name="mobile" /></td>

            </tr>
            <tr>
                <td><span>City</span></td>
                <td><Select name="city">

                        <option>Kandy</option>
                        <option>Kegalle</option>
                        <option>Mawanella</option>
                        <option>Matale</option>


                    </Select></td>

            </tr>
            <tr>
                <td><button name="b1" type="submit" value="save">Save User</button></td>
                <td><button name="b1" type="submit" value="search">Search User</button></td>

            </tr>




        </table>


    </form>



</body>

</html>