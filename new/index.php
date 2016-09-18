<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SPRS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>
  <?php

  session_start();
  $_SESSION['id']="";


  if(isset($_POST["login"])){
    include('dbase.php');

    if(isset($_POST["login"])){
      $email=$_POST['email'];
      $pwd=$_POST['pwd'];

      $sql = "SELECT email,type FROM user WHERE email ='".$email."' AND password ='".$pwd."'";

      $result = mysqli_query($con,$sql);
      $count = mysqli_fetch_array($result);

      if(mysqli_num_rows($result)>0){
        if($count[1]==1){
          $_SESSION['email']=$email;

          $rel=mysqli_fetch_assoc(mysqli_query($con,"SELECT userID FROM user WHERE email='$email'"));
          $_SESSION['id']=$rel['userID'];


          header("Location: admin/admin-home.php");
          die();
        }

        elseif($count[1]==0){

          $_SESSION['email']=$email;

          $rel=mysqli_fetch_assoc(mysqli_query($con,"SELECT userID FROM user WHERE email='$email'"));
          $_SESSION['id']=$rel['userID'];
          header("Location: customer/home.php");
        }

        else{
          echo "User not found";
        }
      }
      else{
        echo "You're not signed up. DIE heretic!!!";
      }
    }
  }

      if(isset($_POST["signup"])){
              $fname = $_POST["fname"];
      		    $lname = $_POST["lname"];
              $email = $_POST["email"];
              $nic = $_POST["nic"];
              $license = $_POST["license"];
              $pwd = $_POST["pwd"];
              $type = 0;

              include('dbase.php');

      		$sql = "insert into user(fname,lname,email,nic,license,password,type) values('$fname','$lname','$email','$nic','$license','$pwd','$type')";


      		if(mysqli_query($con,$sql)){
      			 echo "User Insert!";

             $rel=mysqli_fetch_assoc(mysqli_query($con,"SELECT userID FROM user WHERE email='$email'"));
             $_SESSION['id']=$rel['userID'];
      			 header("Location: customer/home.php");
      		}
      		else{
      			 echo "Something Went Wrong!";
      		}
      };



      ?>
	<header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand" href="index.html">
                    	<h1><img src="images/logo.png" alt="logo"></h1>
                    </a>



    </header>
    <!--/#header-->

    <section id="home-slider">
        <div id="myNav2" class="overlay">

          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

          <div class="col-md-8 col-sm-12">
                <div style="padding-top: 45%; padding-left: 15%;">
                    <form id="login-form" name="login-form" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" class="form-control" required="required" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div id="myNav1" class="overlay">

          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>

          <div class="col-md-8 col-sm-12">
                <div style="padding-top: 17%; padding-left: 15%">
                    <form id="signup-form" name="signup-form" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" id="fname" required="required" placeholder="First Name"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lname" class="form-control" id="lname" required="required" placeholder="Last Name"><br>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" required="required" placeholder="Email"><br>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nic" class="form-control" id="nic" required="required" placeholder="NIC"><br>
                        <div class="form-group">
                            <input type="text" name="license" class="form-control" id="license" placeholder="License"><br>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password"><br>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd-con" placeholder="Confirm Password"><br>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="signup" class="btn btn-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>

        </div>
      </div>



        <div class="container">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>We Are Creative Nerds</h1>
                    <p>Boudin doner frankfurter pig. Cow shank bresaola pork loin tri-tip tongue venison pork belly meatloaf short loin landjaeger biltong beef ribs shankle chicken andouille.</p>


                    <a href="#" class="btn btn-common" onclick="openNav1()">SIGN UP</a>
                    <a href="#" class="btn btn-common" onclick="openNav2()">LOG IN</a>
                </div>
                <img src="images/home/slider/slide1/middle.png" class="img-responsive slider-house" alt="slider image">
                <!--
                <img src="images/home/slider/slide1/circle1.png" class="slider-circle1" alt="slider image">
                <img src="images/home/slider/slide1/circle2.png" class="slider-circle2" alt="slider image">
                <img src="images/home/slider/slide1/cloud1.png" class="slider-cloud1" alt="slider image">
                <img src="images/home/slider/slide1/cloud2.png" class="slider-cloud2" alt="slider image">
                <img src="images/home/slider/slide1/cloud3.png" class="slider-cloud3" alt="slider image">
              -->

                <img src="images/home/slider/slide1/title.png" class="slider-sun" alt="slider image">
                <img src="images/home/slider/slide1/car.png" class="slider-cycle" alt="">
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/overlay.js"></script>
</body>
</html>
