<?php

$uid=$_REQUEST["uid"];
$con = mysqli_connect("localhost:3306", "root", "", "shoppingdb");
if ($con)
{
    $query="select * from users where u_id='$uid'";
    if($result=mysqli_query($con, $query))
    {
        $row=mysqli_fetch_assoc($result);
        $to = $row["email"];
        $subject = "This is a test HTML email";
        $message = "
        <html>
        <head>
        <title>Test Email</title>
        </head>
        <body>
        <p>This is the test mail.</p>
        </body>
        </html>
        ";

        // It is mandatory to set the content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers. From is required, rest other headers are optional
        $headers .= 'From: <knowit51aakash@gmail.com>' . "\r\n";
        $headers .= 'Cc: knowit51aakash@gmail.com' . "\r\n";

        if(mail($to,$subject,$message,$headers))
        {
	        echo("SUCCESS Mail send successfully");
        }
        else 
        {
	        die("SUCCESS Mail send failed");
        }
    }
}
mysqli_close($con);
echo("<br><a href='http://localhost/ShoppingApp/Loginpage.php'>back to main screen</a>");

?>