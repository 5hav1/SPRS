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
  <?php
    include("reservation.php");
   ?>
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
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="customer-profile.php">My Profile</a></li>
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

    <section id="services">
        <div class="container" style="padding-top: 3%;">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <button class="home-icons" href="reservation.php" onclick="openNav1()">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="../images/home/icon1.png" alt="">
                        </div>
                        <h2>Reserve Now!</h2>
                    </div>
                  </button>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                  <button class="home-icons" href="update-reservation.php" onclick="openNav2()">
                    <div class="single-service">
                      <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                          <img src="../images/home/icon2.png" alt="">
                      </div>
                      <h2>Update Reservations</h2>
                    </div>
                  </button>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                  <button class="home-icons" href="cancel-reservation.php" onclick="openNav3()">
                    <div class="single-service">
                      <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                          <img src="../images/home/icon3.png" alt="">
                      </div>
                      <h2>Cancel Reservations</h2>
                    </div>
                  </button>
                </div>
            </div>
        </div>
    </section>

    <div id="myNav1" class="overlay">

      <!-- Button to close the overlay navigation -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>

      <div class="col-md-8 col-sm-12">
            <div style="padding-top: 17%; padding-left: 15%">
                <form id="reservation-form" name="reservation-form" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="dname" id="fname" reqquired="required" placeholder="Driver Name"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" id="pwd" placeholder="Contact Number"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="vehicle" id="vehicle" placeholder="Vehicle Number"><br>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD"><br>
                    <div class="form-group">
                      <span style="margin-left:40%;">Start Time:</span><br>
                      <select name="stime" class="form-control" multiple size="1">
                        <option value="7">07:00</option>
                        <option value="8">08:00</option>
                        <option value="9">09:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                      </select><br>
                    </div>
                    <div class="form-group">
                      <span style="margin-left:40%;">End  Time:</span><br>
                      <select name="etime" class="form-control" multiple size="1">
                        <option value="8">08:00</option>
                        <option value="9">09:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="reservation" class="btn btn-submit" value="Submit" style="margin-top:5%;">
                    </div>
                </form>
            </div>
        </div>

    </div>
  </div>

  <div id="myNav2" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

    <div class="col-md-8 col-sm-12">
          <div style="padding-top: 11%; padding-left: 15%">
              <form id="update-form" name="update-form" method="post">
                  <div class="form-group">
                      <input type="text" class="form-control" name="pin" id="pin" reqquired="required" placeholder="PIN number"><br>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="dname" id="fname" reqquired="required" placeholder="Driver Name"><br>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="contact" id="pwd" placeholder="Contact Number"><br>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="vehicle" id="vehicle" placeholder="Vehicle Number"><br>
                  </div>
                  <div class="form-group">
                      <input type="date" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD"><br>
                  <div class="form-group">
                    <span style="margin-left:40%;">Start Time:</span><br>
                    <select name="stime" class="form-control" multiple size="1">
                      <option value="7">07:00</option>
                      <option value="8">08:00</option>
                      <option value="9">09:00</option>
                      <option value="10">10:00</option>
                      <option value="11">11:00</option>
                      <option value="12">12:00</option>
                      <option value="13">13:00</option>
                      <option value="14">14:00</option>
                      <option value="15">15:00</option>
                      <option value="16">16:00</option>
                      <option value="17">17:00</option>
                      <option value="18">18:00</option>
                      <option value="19">19:00</option>
                    </select><br>
                  </div>
                  <div class="form-group">
                    <span style="margin-left:40%;">End  Time:</span><br>
                    <select name="etime" class="form-control" multiple size="1">
                      <option value="8">08:00</option>
                      <option value="9">09:00</option>
                      <option value="10">10:00</option>
                      <option value="11">11:00</option>
                      <option value="12">12:00</option>
                      <option value="13">13:00</option>
                      <option value="14">14:00</option>
                      <option value="15">15:00</option>
                      <option value="16">16:00</option>
                      <option value="17">17:00</option>
                      <option value="18">18:00</option>
                      <option value="19">19:00</option>
                      <option value="20">20:00</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <input type="submit" name="update" class="btn btn-submit" value="Submit" style="margin-top:5%;">
                  </div>
              </form>
          </div>
      </div>

    </div>
  </div>

  <div id="myNav3" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>

    <div class="col-md-8 col-sm-12">
          <div style="padding-top: 77%; padding-left: 15%">
              <form id="signup-form" name="signup-form" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="pin-cancel" id="pin-cancel" required="required" placeholder="PIN number"><br>
                </div>
                <div class="form-group">
                    <input type="submit" name="cancellation" class="btn btn-submit" value="Submit">
                </div>
              </form>
      </div>

    </div>
  </div>
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/lightbox.min.js"></script>
        <script type="text/javascript" src="../js/wow.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>
        <script type="text/javascript" src="../js/overlay.js"></script>
  </body>
</html>
