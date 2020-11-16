<?php  include("header.php")  ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body style="background-color:lightsteelblue">
    <!--<div style="border: 1px solid black; background-color: lightskyblue; position: absolute; top: 250px; left: 350px; width: 500px; height: 400px">-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-3">
            <h1 style="text-align: center;"> Login </h1>
            <br /><br />
            <?php echo("<br />");
    	        if(isset($_COOKIE["invalid"])){
                    echo("<p style='color:red'>".$_COOKIE["invalid"]."</p>");
            }?>
        </div>
        <div class="col-md-5"></div>
    </div>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-3">
            <form class="form-inline" action="https://aakashptl325.github.io/OnlineShopping.github.io/Logincheck.php">
                <div class="form-group">
                    <label for="user"> User ID </label>&emsp;&emsp;
                    <input type="text" name="user" id="user" class="form-control form-control-lg" />
                </div><br/><br/>
                <div class="form-group">
                    <label>Password </label>&emsp;
                    <input type="password" name="pass" class="form-control form-control-lg" />
                </div><br/><br/><br/><br/>
                <div>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" value="Login" class="btn btn-primary btn-lg" />
                </div>
            </form>
            
            <div>
                <br />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button onclick="document.location='http://localhost/ShoppingApp/index.php'" class="btn btn-primary btn-lg">Home Page</button>
            </div>
            <div>
                <br /><a href="https://aakashptl325.github.io/OnlineShopping.github.io/CreateAcc.html">New User? Create New Account</a>
            </div>
            
        </div>
        <div class="col-md-5"></div>
    </div>
</body>
</html>