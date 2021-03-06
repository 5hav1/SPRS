<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | SPRS</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#">
                    	<h1><img src="../images/logo.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="customer-profile.php">My Profile</a></li>
                        <li class="dropdown"><a href="#">About Us<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="vision.html">Vision</a></li>
                                <li><a href="mission.html">Mission</a></li>
                                <li><a href="guidance.html">Our Guidance</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.html">Citations<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="rules.html">Rules & Regulations</a></li>
                                <li><a href="violations.html">Parking Violations</a></li>
                            </ul>
                        </li>
                        <li><a href="Map.php">Map</a></li>
                        <li><a href="charges.html">Charges</a></li>
                        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
      <div class="profile-space">
        <img src="../images/profile.png" class="profile-default">
      </div>
      <div class="profile-detail">
        <?php

              session_start();

              include('../dbase.php');

              $uid = $_SESSION['id'];
              $sql1 = "select * from user where userID=$uid";
              $res1 = mysqli_query($con,$sql1);
              $row1 = mysqli_fetch_array($res1);

              if(mysqli_num_rows($res1)>0){
                echo "<table class='table' style='text-align:center'>
                      <tr><td>User ID </td><td>".$row1['userID']."</td></tr>
                      <tr><td>First Name </td><td>".$row1['fname']."</td></tr>
                      <tr><td>Last Name </td><td>".$row1['lname']."</td></tr>
                      <tr><td>Email </td><td>".$row1['email']."</td></tr>
                      <tr><td>NIC </td><td>".$row1['nic']."</td></tr>
                      <tr><td>License </td><td>".$row1['license']."</td></tr>
                      <tr><td>First Name </td><td>".$row1['password']."</td></tr>";
                echo "</table>";
              }
              else{
                echo "User not found";
              }

         ?>
    </div>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/lightbox.min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/overlay.js"></script>
</body>
</html>
