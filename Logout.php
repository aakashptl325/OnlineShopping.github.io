<?php

session_start();

$uid=$_SESSION["u_id"];
date_default_timezone_set("Asia/Calcutta");
$dt=date('Y-m-d H:i:s a');

$con = mysqli_connect("localhost:3306", "root", "", "shoppingdb");
if ($con)
{
    $query="update logindetail set logouttime='$dt' where user_id='$uid' and logouttime is null";
    if(mysqli_query($con, $query))
    {
        session_destroy();
        echo("Login Again? Click<a href='http://localhost/ShoppingApp/Loginpage.php'>Here</a>");
    }
}
?>