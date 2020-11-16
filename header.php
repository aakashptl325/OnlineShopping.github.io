<?php session_start(); ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-4.5.2-dist/jss/bootstrap.min.js"></script>
</head>

<?php
echo("<div class='bg-primary'>");
    echo("<br/>");
    echo("<div class='row bg-primary container-fluid'>");
        echo("<div height='120' class='col-md-2' >");
            echo("<img src='ProfilePic/logo.jpg' height='110' class='rounded-circle mx-auto d-block' />");
        echo("</div>");
    
        if(isset($_SESSION["name"]))
        {   
            echo("<div height='120' class='col-md-8'>");
                echo("<br/>");
                echo("<h1>WELCOME  ".($_SESSION["name"])."</h1>");
            echo("</div>");
        }
        else
        {
            echo("<div height='120' class='col-md-8'>");
                echo("<br/>");
                echo("<h1>WELCOME GUEST</h1>");
            echo("</div>");
        }
    
        if(isset($_SESSION["u_id"]))
        {
            $name=$_SESSION["u_id"].".jpg";
            echo("<div height='120' class='col-md-2' >");
                echo("<img src='ProfilePic/$name' height='110' class='rounded-circle mx-auto d-block' />");
            echo("</div>");
        }
        else 
        {
	        echo("<div height='120' class='col-md-2' >");
                echo("<img src='ProfilePic/Guest.jpg' height='110' class='rounded-circle mx-auto d-block' />");
            echo("</div>");
        }
    echo("</div>");
    echo("<br/>");
echo("</div>");
?>