<?php  include("header.php")  ?>

<?php
echo("<style>.info:hover {
  background: #2196F3;
  color: blue;
}</style>");

echo("<br/><h1 class='text-center'>Categories</h1>");

$con=mysqli_connect("localhost:3306","root","","shoppingdb");
$query="select * from category";
$result=mysqli_query($con,$query);
echo("<div class='row container-fluid'>");
while($row=mysqli_fetch_assoc($result))
{
	$cid=$row["c_id"];
	$desc=$row["c_description"];
	$cname=$row["c_name"];
	echo("<div class='col'>");
	echo("<br/><br/><button  onclick=document.location='https://aakashptl325.github.io/OnlineShopping.github.io/SelectProduct.php?cid=$cid' class='btn info' title='$desc'><img src='Categories/$cname.jpg' width='400' height='300' class='rounded' /><br/>$cname</button>");
	echo("</div>");
}
echo("</div>");

if(isset($_SESSION["u_id"]))
{
	echo("<br/><br/>&emsp;&emsp;&emsp;&emsp;<button  onclick=document.location='https://aakashptl325.github.io/OnlineShopping.github.io/Logout.php' class='btn btn-primary'>Logout</button><br/>");
}
else
{
	echo("<br/><br/>&emsp;&emsp;&emsp;&emsp;<button  onclick=document.location='https://aakashptl325.github.io/OnlineShopping.github.io/Loginpage.php' class='btn btn-primary'>Login Here</button>");
}
?>