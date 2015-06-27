<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/fav.png"  type="image/png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-show-password.min.js"></script>

<!--
<link rel="stylesheet" href="css/animsition.min.css">
<script src="js/jquery.animsition.min.js"></script>
<script src="js/script.js"></script> -->


<title>Placement Portal - Sahrdaya</title>
</head>
<body>

  <div id="topline">
  </div>

  <!-- -------------------------HEADER------------------------ -->

  <div  id="wrapper" class="container">

   <div class="row">
    <div class="col-md-3 col-sm-12">
      <a href="http://www.sahrdaya.ac.in/"><img src="img/sahheadnew.png" /></a>
    </div>
    
    <div class="col-md-6 col-sm-12 hidden-xs text-center headtext">
     Placement Portal
   </div>

   <div class="col-md-3 col-sm-12 text-right" style="padding:10px">
    NAAC Accreditted<br>
    ISO 9001 2009 CERTIFIED
  </div>

</div>

<!-- ---------------------------------------TOPBAR--------------------------------- -->
<div class="animsition"> 
  <div class="row" id="topbar">

    <div class="navbar-header navbar-default">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs-block" href="index.php">Placement Portal</a>
    </div> 
    <ul id="mynav" class="nav navbar-default nav-pills nav-justified collapse navbar-collapse" > <!--  navbar-fixed-top --> 
     <li role="presentation" <?php if($route=='home') echo 'class="active"' ?> ><a class="animsition-link" href="index.php">Home</a></li>
     <li role="presentation" <?php if($route=='about') echo 'class="active"' ?> ><a class="animsition-link" href="about.php">About</a></li>
     <li role="presentation" <?php if($route=='industry') echo 'class="active"' ?> ><a class="animsition-link" href="industry.php">Industry&nbspLinkages</a></li>
         <li role="presentation" <?php if($route=='status') echo 'class="active"' ?> ><a class="animsition-link" href="status.php">Placements</a></li>
     <li role="presentation" <?php if($route=='courses') echo 'class="active"' ?> ><a class="animsition-link" href="courses.php">Courses</a></li>
     <li role="presentation" <?php if($route=='faculty') echo 'class="active"' ?> ><a class="animsition-link" href="faculty.php">Faculty</a></li>
     <li role="presentation" <?php if($route=='opportunity') echo 'class="active"' ?> ><a class="animsition-link" href="opportunity.php">Opportunities</a></li>
          
     <li role="presentation" class="dropdown" > 
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Faculty/Alumini Form</a></li>
        <li><a href="#">Job Announcement Form</a></li>
      </ul>
    </li>

     <?php if(isset($_SESSION['UID'])) { if($_SESSION["Admin"]==1){?>
     <!-- Admin header -->
     <li role="presentation" <?php if($route=='admin') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?> > 
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="administrator/users.php">Users</a></li>
        <li><a href="administrator/students.php">Students</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </li>
    <?php }else {?>
    <!-- Student header -->
    <li role="presentation" <?php if($route=='login') echo 'class="dropdown active"'; else echo 'class="dropdown"'; ?> > 
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['fname']===""? "Student" : $_SESSION['fname']; ?></a>
      <ul class="dropdown-menu dropdown-menu-right" role="menu">
        <li><a href="placements.php">Student Details</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </li>
    <?php }}else{?>
    <!-- Login header -->
    <li role="presentation" <?php if($route=='login') echo 'class="active"' ?> ><a  class="animsition-link" href="placements.php">Students&nbspLogin</a></li>
    <?php } ?>  
  </ul>
</div>
