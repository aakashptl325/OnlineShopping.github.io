<?php  include("header.php")  ?>

<?php
$con=mysqli_connect("localhost:3306","root","","shoppingdb");
$total=0;
if(isset($_SESSION["cart"]))
{	
	echo("<br/><br/><br/>");
	echo("<table border=1 style='border-collapse:collapse' align='center' cellpadding='15' cellspacing='15'>");
	echo("<tr>");
	echo("<th>Product Name</th>");
	echo("<th>Product Description</th>");
	echo("<th>Product Price</th>");
	echo("</tr>");
	foreach($_SESSION["cart"] as $p)
	{
		echo("<tr>");
		$query="select * from product where p_id=$p";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result))
		{
			$pnm=$row["p_name"];
			$pr=$row["p_price"];
			$desc=$row["p_description"];
			$total=$total+$pr;
			echo("<td>".$pnm."</td>");
			echo("<td>".$desc."</td>");
			echo("<td>".$pr."</td>");
		}
		echo("</tr>");
	}
	echo("<tr><td colspan='2'>Total Cost</td><td>$total</td></tr>");
	echo("</table>");
}
else
{
	echo("No Product Selected");
}
mysqli_close($con);
	if(isset($_SESSION["u_id"]))
	{
		echo("<br/><br/>Confrim Your Cart? Click <a href='http://localhost/ShoppingApp/Confirm.php'>Here</a>");
		$_SESSION["total"]=$total;
	}
	else 
	{
		echo("<br/><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Cannot Confirm Your Cart Login First&emsp;&emsp;&emsp;<button  onclick=document.location='http://localhost/ShoppingApp/Loginpage.php' class='btn btn-primary'>Login Here</button>");
	}

echo("<br/><br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Want Explore More? Click <a href='http://localhost/ShoppingApp/categories.php'>Here</a>");

?>