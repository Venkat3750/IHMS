<?php

session_start();

//include_once 'admin_menu.php';
 
?>
<!DOCTYPE html>
<html>
<head>
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

 th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 20px;
    width:30%;
}
 td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 20px;
    width:10%;
    
}
tr{background-color: #f2f2f2}



</style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NEX | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NEX</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NEX</b>Hospitals</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Staff</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Staff</p>
          <a href="#"><i class="fa fa-circle text-success"></i> </a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/app/uda.php"><i class="fa fa-circle-o"></i> User defined</a></li>
          </ul>
        </li>
       
  
          <li class="treeview">
          <a href="prevstaff.php">
            <i class="fa fa-user"></i> <span>Previous requests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>
        <li class="treeview">
          <a href="pages/forms/request.php">
            <i class="fa fa-user"></i> <span>Emergency Request</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="schedule.php">
            <i class="fa fa-user"></i> <span>schedule</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class=""></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hello</span>
              <?php
      include ('connect.php');
     $sid=$_SESSION['sid'];
     $myquery ="SELECT * from `staff` where sid='".$sid."'";
     $result = mysqli_query($connect,$myquery);
     $num_rows=mysqli_num_rows($result);
      if($num_rows>0){
        $row = mysqli_fetch_array($result);
        echo $row['sname'];
      }
?>
              <span class="info-box-number"> 
  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class=""></i></span>

            <div class="info-box-content">
              <span class="info-box-text">UDA Count</span>
              <?php
      include ('connect.php');
      $sid=$_SESSION['sid'];
      $myquery ="SELECT * from `staff` where sid='".$sid."'";
     $result = mysqli_query($connect,$myquery);
     $num_rows=mysqli_num_rows($result);
      if($num_rows>0){
        $row = mysqli_fetch_array($result);
      $sname=$row['sname'];
    }
     $myquery="select * from udapp Where status='pending' and udname='$sname'";
   $r = mysqli_query($connect,$myquery);
   $x=mysqli_num_rows($r);
   $appno='udappno'.$x;  
  
  echo $x;
?>
              <span class="info-box-number">
              </span> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">EMR STATUS</span>
              <span class="info-box-number"></span>
              <?php
      /*include ('connect.php');
      $sid=$_SESSION['sid'];
     $myquery="select * from doctors Where doctid='$sid'";
   $r = mysqli_query($connect,$myquery);
   $num_rows=mysqli_num_rows($r);
   if($num_rows>0){
        $row = mysqli_fetch_array($r);
        echo $row['emrstatus']; 
      }*/
  
      include ('connect.php');
    //  session_start();
     $doctid=$_SESSION['sid'];
   /*  if(!@$_POST['submit'])
     {*/
     // $status=$_SESSION['status'];
     // $userid=$_SESSION['uid'];
      $des=@$_POST['rid'];
      if($des)
      {
     $myquery ="SELECT * from `request` where docid='$doctid' and rid='$des'";
    
     $result = mysqli_query($connect,$myquery);
     $num_rows=mysqli_num_rows($result);
      if($num_rows>0){
      $row = mysqli_fetch_array($result);
      $rid=$row['rid'];
      }
     $myquery ="SELECT * from `request` where docid='$doctid' and rid='$des'";
     if($myquery)
     {

     $result = mysqli_query($connect,$myquery);
     $num_rows=mysqli_num_rows($result);
      if($num_rows>0){
        $row = mysqli_fetch_array($result);
        echo $row['emrstatus'];
      }
    }
  }
  
  else
  {
    echo "";
  }
  
?>

  
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class=""></i></span>

            <div class="info-box-content">
              <span class="info-box-text">EMR ID</span>
              <span class="info-box-number"></span>
                             <?php
      include ('connect.php');
    //  session_start();
     $doctid=$_SESSION['sid'];
     $myquery ="SELECT * from `request` where docid='$doctid' and emrstatus='pending'";
     $result = mysqli_query($connect,$myquery);
     if($result)
     {
     $num_rows=mysqli_num_rows($result);
      if($num_rows>0){
        $row = mysqli_fetch_array($result);
        echo $row['rid'];
      }
    }
    else if(!$result)
    {
      echo "Des your problem";
    }
    
    


      
?>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->





             <div class="col-md-60">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                 <h3>Emergency Requests</h3>
                 To know the status of Emerngency Request:<form action="#" method="post" >
  <td><input type="text" required placeholder="Rid No" name='rid'></td>
  <td><input type="submit" required  value='Get EMR Status'name='Get Status'> </td>

  </form>

                 <?php

//session_start();
include ('connect.php');
$query ="SELECT * from `request` where emrstatus='pending'and DATE(`date`) = CURDATE()";
$result=mysqli_query($connect,$query);
$rows = mysqli_num_rows($result);
if($rows > 0) 
while($row = mysqli_fetch_array($result))
{?> 


    <html>  
      
    

        <?php
        
          if(strlen($row['doctid']) ==0)
            $dname = "";
        else if(strlen($row['doctid']) !=0 )
        {
           $myquery="select dname from doctors where doctid='".$row['doctid']."'";
             $r = mysqli_query($connect,$myquery);
                   $row2 = mysqli_fetch_assoc($r);
                   $dname = $row2['dname'];

        }?>
       
        
 <?php       
     include ('connect.php');     

 echo "<br>";
  //include_once("admin_header.php");
  $status=@$_POST[$row['rid']];
  if($status)
  {
    //$name=$row['upname'];
    $doctid=$row['doctid'];
     $rid=$row['rid'];
  
    $sql="update doctors set emrstatus='$status' where doctid='$doctid' " ;
        $insert = mysqli_query($connect, $sql);
        $sql="update request set emrstatus='$status' where rid='$rid' " ;
        $insert = mysqli_query($connect, $sql);
       /* if($insert)
       {
        header("Location: /temp/dlogin?status=reg-success");
       }  
       else
       {
       header("Location: /temp/dlogin?status=reg-failed");
       }*/
            
  }
  
}


?>
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
         
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
