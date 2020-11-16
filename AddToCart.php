<?php  include("header.php")  ?>

<?php

$sp=$_REQUEST["product"];

if(isset($_SESSION["cart"]))
{
	array_push($_SESSION["cart"],$sp);
}
else
{
	$_SESSION["cart"]=array($sp);
}

$con=mysqli_connect("localhost:3306","root","","shoppingdb");

$query="select * from product where p_id=$sp";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$pname=$row["p_name"];
echo("<br/>$pname is Added to the Cart");
echo("<br/>There are total ".count($_SESSION["cart"])." products in the cart");

echo("<br/>Want Explore More? Click <a href='http://localhost/ShoppingApp/categories.php'>Here</a>");
echo("<br/><a href='http://localhost/ShoppingApp/ViewCart.php'>View Cart</a>");
?>