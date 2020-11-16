<?php  include("header.php")  ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="CreateAccval.js" type="text/javascript"></script>
</head>
<body>
    <div style="border: 1px solid black; background-color: lightskyblue; position: absolute; top: 200px; left: 350px; width: 500px; height: 580px">
        <h3 style="text-align: center;">New User Registration</h3>
        <form action="http://localhost/ShoppingApp/newAcc.php" method="post" enctype="multipart/form-data">
            <table align="center" cellpadding="15" cellspacing="15">
                <tr>
                    <td><label>First Name :</label></td>
                    <td>
                        <input type="text" name="fname" id="fname" />
                    </td>
                </tr>
                <tr>
                    <td><label>Middle Name :</label></td>
                    <td>
                        <input type="text" name="mname" id="mname" />
                    </td>
                </tr>
                <tr>
                    <td><label>Last Name :</label></td>
                    <td>
                        <input type="text" name="lname" id="lname" />
                    </td>
                </tr>
                <tr>
                    <td><label>Mobile No :</label></td>
                    <td>
                        <input type="number" name="contact" id="mobile" />
                    </td>
                </tr>
                <tr>
                    <td><label>Email id :</label></td>
                    <td>
                        <input type="email" name="uemail" id="eid" />
                    </td>
                </tr>
                <tr>
                    <td><label>User id :</label></td>
                    <td>
                        <input type="text" name="uid" id="userid" />
                    </td>
                </tr>
                <tr>
                    <td><label>Password :</label></td>
                    <td>
                        <input type="password" name="pwd" />
                    </td>
                </tr>
                <tr>
                    <td><label>Profile photo :</label></td>
                    <td>
                        <input type="file" name="photo" id="profile" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">&emsp;&emsp;&emsp;&emsp;<input type="submit" value="Submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>