<?php session_start(); 

if(isset($_GET['page'])){
  $page = $_GET['page'].".php";
}else{
  $page = 'mydata.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PGD 107 Final Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="libs/bootstrap.min.css">
  <script src="libs/jquery.min.js"></script>
  <script src="libs/popper.min.js"></script>
  <script src="libs/bootstrap.min.js"></script>
</head>    
<body>
   <div class="container bg-secondary text-white">
  <h3>INSTITUTE OF INFORMATION TECHNOLOGY</h3>
  <p>First Ecolone of IT</p>




<nav class="navbar navbar-expand-sm bg-secondary navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" width="80px"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">ABOUT US</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        STUDENT CORNER
      </a>
      <div class="dropdown-menu">
       
  <?php
if (!isset($_SESSION['login'])) {   ?> 
     <a class="dropdown-item" href="?page=apply">APPLY</a>   
        <a class="dropdown-item" href="?page=login">LOGIN</a>
         <?php
       }else{  ?>
        <a class="dropdown-item" href="?page=testimonial">TESTIMONIAL</a>
        <a class="dropdown-item" href="action.php?logout">LOG OUT</a>
         <?php }  ?>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin CORNER
      </a>
      <div class="dropdown-menu">        
        
   <?php
if (!isset($_SESSION['admin_login'])) {    ?>   
        <a class="dropdown-item" href="?page=admin_signup">ADMIN SIGNUP</a>
        <a class="dropdown-item" href="?page=admin_login">ADMIN LOGIN</a>
         <?php
       }else{  ?>
        
        <a class="dropdown-item" href="?page=approve">ALL DATA</a>
        <a class="dropdown-item" href="action.php?admin_logout">LOG OUT</a>
         <?php }  ?>
      </div>
    </li>
  </ul>
  <?php
if (isset($_SESSION['login'])) {
 echo 'User Email:  ' .$_SESSION['email'];
}elseif (isset($_SESSION['admin_login'])) {
 echo 'Admin Email: ' .$_SESSION['admin_email'];
}
  ?>

</nav>
</div>

<hr>
  
<div class="container">

 
  <h3>This is my HOME Page</h3>
  <p>This is an assignment of PGD-20 of Course PGD-107</p>
  <p style="color: blue"><?php
if (isset($_SESSION['apply_message'])) {
 echo $_SESSION['apply_message'];
}
  ?></p>
 <?php  
  include $page;
  ?>
  
   
</div>

</body>
</html>