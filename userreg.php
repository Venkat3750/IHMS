
<html>
    <head>
        <title> Register an account </title>
        <script src="JQuery/jquery-3.0.0.js"></script>
        <script>
        function validateForm()
        {
            
        
           if($("#uname").val().length< 5 || $("#uname").val().length > 25)
            {
            
            alert("username must be between 5 and 25 characters");
            return false;
            
            
            }
           if($("#pwd").val().length< 6)
            {
             alert("password must be longer than 6 characters");
             return false;
            }
                
          if($("#pwd").val() != $("#cpwd").val())
            {
                alert("password and confirm password does not match");
                $(".passwd").css("background-color","red");
                return false;

            }
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            var email=document.getElementById("email").value;
            if(!expr.test(email))
            {
                 alert("Invalid email address.");
                 return false;
            }
        
            var pattern=/^\d{10}$/;
            if(!pattern.test(($("#mobno").val())))
            {
                 alert("Invalid mobile no");
                 return false;
            }
            
        };
        

        </script>
    </head>
    <body> 
        <form method="POST" action="userreg.php" onsubmit="return validateForm();">

            Username:<input required id="uname" type="text" name="username"><br><br>
            Password:<input required id="pwd" class="passwd" type="password" name="password"><br><br>
            Confirm Password:<input id="cpwd" required type="password" class="passwd" name="repassword"><br><br>
            Place:<input required type="text" name="place"><br><br>
            Email:<input required type="text" id="email" name="email"><br><br>
            Age:<input required type="text" name="age"><br><br>
            MobileNo:<input required type="text" name="mobno" id="mobno" value=""><br><br>
            Gender:<input type="radio" name="gender" value="Male" > Male
            <input type="radio" required name="gender" value="Female" > Female
            <input type="submit" required name="submit" value="sign up!" >
        </form>
     </body>
</html>
<?php
 

include ('connect.php');

$x=0;
$username = @$_POST['username'];
$password = @$_POST['password'];
$repass = @$_POST['repassword'];
$place = @$_POST['place'];
$email=@$_POST['email'];
$age=@$_POST['age'];
$gender=@$_POST['gender'];
$mobno=@$_POST['mobno'];
$date = date("y-m-d");
$color = "color";
$myquery="select * from users";
$r = mysqli_query($connect,$myquery);
$x=mysqli_num_rows($r);
$uid='user'.$x;  
$x++;
         if($username&&$password&&$email)
        {
            $insert = mysqli_query($connect, "INSERT INTO `users` ( `username`, `password`, `place`,`email`,`age`,`gender`,`mobno`,`uid`) VALUES ( '".$username."', '".$password."', '".$place."','".$email."','".$age."','".$gender."','".$mobno."','".$uid."');");
            
        if($insert){
              header("Location: /nex/success.html");
           
            } 
        else {
           
             header("Location: /nex/fail.html");
            }   
        }
        

?>