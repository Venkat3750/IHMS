
<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{

require_once 'connect.php';

$username=htmlspecialchars($_POST['username'],ENT_QUOTES,"UTF-8");

//$password=htmlspecialchars($_POST['password'],ENT_QUOTES,"UTF-8");
$password =  $_POST['password'];

$p=md5($password);
//connect to database

//execute query

$query ="SELECT * from `usrs` where username='".$username."' and password='".$password."'";

$result=mysqli_query($connect,$query);


while($row = mysqli_fetch_array($result))
{
    
    if($p==$row['password'])
    {
    
        $_SESSION['username']=$username;
        header("Location: /nex/user.php");
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("You got credentials wrong")';
        echo '</script>';
        
    }
}
echo '<script language="javascript">';
echo 'alert("Wrong or Invalid credintials\nPlease enter the credentials again")';
echo '</script>';

}


?>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Nex - Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->  
            <style>
            #user{
                float: right;
                width: 340px;
                position:relative;
            }
            #staff{
                float: left;
                width: 340px;
            }
            #staff-lg-btn {
                float: right;
            }
            #lg-btn{
                float: right;
            }
      
}
        </style>                                   
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                <div id="staff">
                    <div class="login-title"><strong>Staff</strong>&nbsp Login</div>
                    <form method="post" action="log_staff.php" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="passwd" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div id="staff-lg-btn" class="col-md-6">
                        <input type="submit" name="btn-login" class="btn btn-info btn-block" value="Log In" />
                        </div>
                    </div>
               
                    </form>

                    </div>
                        <img src="img/line.png" style="padding-left: 5px;">
                    <div id="user">

                     <div class="login-title"><strong>User</strong>&nbsp Login</div>
                    <form   method="post" class="form-horizontal"  action="<?php htmlspecialchars("PHP_SELF", ENT_QUOTES,"UTF-8"); ?>" >
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-6">
                        <input type="submit" id="lg-btn" name="btn-login" class="btn btn-info btn-block" value="Log In" />
                        </div>
                    </div>
                   
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
                    </form>
                    </div>
                
                </div>
               

                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 Nex Hospitals
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Services</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






