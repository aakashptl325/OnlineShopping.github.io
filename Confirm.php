<?php  include("header.php")  ?>

<?php

$uid=$_SESSION["u_id"];
$total=$_SESSION["total"];
$dt=date('Y-m-d H:i:s a');
$cart=$_SESSION["cart"];

$con=mysqli_connect("localhost:3306","root","","shoppingdb");
$query="insert into shopping(user_id,shoppingDate,totalprice) values('$uid','$dt',$total)";
if (mysqli_query($con, $query))
{
	echo("<br/> Your Cart Is Confirm<br/>");
}
else
{
        die ("<span style='color:red'>failed</span>");
}

if(isset($_SESSION["cart"]))
{
    $total1=0;
	$to = $_SESSION["email"];
	$subject = "Your Shopping Bill";
	$value="";
	foreach($cart as $p)
	{
		$query2="select * from product where p_id=$p";
		$result=mysqli_query($con,$query2);
		
		while($row=mysqli_fetch_assoc($result))
		{
			$pnm=$row['p_name'];
			$pr=$row['p_price'];
			$desc=$row['p_description'];
			$total1=$total1+$pr;
			$value=$value."<tr><td>".$pnm."</td><td>".$desc."</td><td>".$pr."</td></tr>";
		}
	}
	$message = "
    <html>
    <head>
    <title>Shopping Bill</title>
    </head>
    <body>
		<br/><br/><br/>
		<table border=1 style='border-collapse:collapse' align='center' cellpadding='15' cellspacing='15'>
		<tr>
		<th>Product Name</th>
		<th>Product Description</th>
		<th>Product Price</th>
		</tr>
		$value
		<tr><td colspan='2'>Total Cost</td><td>".$total1."</td></tr>
		</table>
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
		echo("<br/> You you will receive the bill on your ".$_SESSION["email"]." provided by you<br/>");
		echo("<br/> You you will receive message on your ".$_SESSION["contact"]." provided by you before delivery<br/>");
		echo("<br/>Want Explore More? Click <a href='http://localhost/ShoppingApp/categories.php'>Here</a><br/>");
		echo("<br/>Logout? Click<a href='http://localhost/ShoppingApp/Logout.php'>Here</a>");
    }
    else 
    {
        die("SUCCESS Mail send failed");
    }
}
mysqli_close($con);
?>