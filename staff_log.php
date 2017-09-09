<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
 $email = $_POST['email'];
 $upass = $_POST['pass'];
 $res=mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: admin.php");
 
 }
 else 
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}

?>