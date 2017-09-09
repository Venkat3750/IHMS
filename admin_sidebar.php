
<!DOCTYPE html>
<html lang="en">
  <head>
     <!-- Bootstrap CSS -->    
    <link href="admin_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin_assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin_assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin_assets/css/font-awesome.min.css" rel="stylesheet" />    
    
    <!-- Custom styles -->

    <link href="admin_assets/css/style.css" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" onclick="check();" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Add User</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Staff</a></li>                          
                          <li><a class="" href="form_validation.html">User</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Apointments</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">General</a></li>
                          <li><a class="" href="http://localhost/temp/pra.php">User Defined</a></li>
                      </ul>
                  </li>       
                  
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Staff/User Details</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Billing</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Appointments</span>
                          
                      </a>
                                         
                  </li>
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <div id="main"></div>

             <!-- javascripts -->
             <script>function check(){
$('#main').load('index.php');
}</script>
    <script src="admin_assets/js/jquery.js"></script>
    <script src="admin_assets/js/jquery-1.8.3.min.js"></script>
    <script src="admin_assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="admin_assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin_assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin_assets/js/jquery.customSelect.min"></script>
    <!-- custom chart script for this page only-->
    <script src="admin_assets/js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="admin_assets/js/scripts.js"></script>
    </section>
    </body>
    </html>
    