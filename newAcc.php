<?php

$con = mysqli_connect("localhost:3306", "root", "", "shoppingdb");
if ($con) 
{
    $uid = $_REQUEST["uid"];
    $pwd = $_REQUEST["pwd"];
    $mno = $_REQUEST["contact"];
    $email = $_REQUEST["uemail"];
    $fnm = $_REQUEST["fname"];
    $mnm = $_REQUEST["mname"];
    $lnm = $_REQUEST["lname"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],"ProfilePic/".$_REQUEST["uid"].".jpg");
    $query = "insert into users values('$uid','$pwd','$fnm','$mnm','$lnm','$email',$mno)";
    echo($query);
    if (mysqli_query($con, $query))
    {   
        echo ("<span style='color:green'>inserted</span>");
    }
    else
    {
        die ("<span style='color:red'>failed</span>");
    }
    mysqli_close($con);

    Header('Location:http://localhost/ShoppingApp/Sendmail.php?uid=$uid');
}
?>