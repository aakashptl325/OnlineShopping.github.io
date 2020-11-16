<?php session_start(); ?>

<?php
    
$id=$_REQUEST["user"];
$pwd=$_REQUEST["pass"];

echo($id." ".$pwd);

$con = mysqli_connect("localhost:3306", "root", "", "shoppingdb");
if ($con)
{
    $query="select * from users where u_id='$id' and password='$pwd'";
    echo($query);
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["fname"]." ".$row["lname"];
        $_SESSION["u_id"]=$row["u_id"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["contact"]=$row["contact"];
        setcookie("invalid","",time()-20);
        Header('Location:https://aakashptl325.github.io/OnlineShopping.github.io/Logintable.php');
    }
    else
    {
	setcookie("invalid","User Id or Password is Invalid Enter valid data");
        Header('Location:https://aakashptl325.github.io/OnlineShopping.github.io/Loginpage.php');
    }
}
?>