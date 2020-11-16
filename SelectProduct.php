<?php  include("header.php")  ?>

<?php
echo("<script src='jquery/jquery-3.5.1.min.js'></script>");
echo("<script src='http://localhost/ShoppingApp/ProdDetails.js'></script>");
$con=mysqli_connect("localhost:3306","root","","shoppingdb");
$cid=$_REQUEST["cid"];

$query="select * from product where cat_id=$cid";
$result=mysqli_query($con,$query);

echo("<br/><br/>");

echo("<b style='margin-left:35px'>Select Product :</b>&emsp;&emsp;");
echo("<ol>");
while($row=mysqli_fetch_assoc($result))
{
	$pid=$row["p_id"];
	$pname=$row["p_name"];
	$pr=$row["p_price"];
	$desc=$row["p_description"];
	echo("<li>$pname</li>");
	echo("<br/><input type='button' value='Show/Hide Details' >");
	echo("<div style='display:none'>");
	echo("<br/><b style='margin-left:80px'>PRICE = $pr</b><br/>");
	echo("<br/><b style='margin-left:80px'>DESCRIPTION = $desc</b><br/>");
	echo("<br/><br/>");
//	if(isset($_SESSION["u_id"]))
	//{
		echo("<a href='http://localhost/ShoppingApp/AddToCart.php?product=$pid'>AddToCart</a>&emsp;&emsp;&emsp;&emsp;");
/*	}
	else 
	{
		echo("Cannot Add To Cart Login First&emsp;&emsp;&emsp;<button  onclick=document.location='http://localhost/ShoppingApp/Loginpage.php' class='btn-primary btn-lg'>Login Here</button>");
	}
	*/echo("</div>");
	echo("<input style='display:none' type='button' value='Hide Details' id='hide' >");
	echo("<br/><br/><hr/>");
}
echo("</ol>");
echo("<br/>Want to check another Product in Another Category? Click <a href='http://localhost/ShoppingApp/categories.php'>Here</a>");

?>