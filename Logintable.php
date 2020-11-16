<?php session_start(); ?>

<?php

$uid=$_SESSION["u_id"];
date_default_timezone_set("Asia/Calcutta");
$dt=date('Y-m-d H:i:s a');

$con = mysqli_connect("localhost:3306", "root", "", "shoppingdb");
if ($con)
{
    $query="insert into logindetail(user_id,logintime) values('$uid','$dt')";
    echo($query);
    if(mysqli_query($con, $query))
    {
        echo("Login Time inserted");
    }
    else 
    {
        die("Error occured while inserting Login Time");        
	}
}
mysqli_close($con);
    Header('Location:http://localhost/ShoppingApp/categories.php');
?>