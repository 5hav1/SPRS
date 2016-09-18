<?php

  session_start();
    //echo $_SESSION["id"];
    $user= $_SESSION["id"];

  if(isset($_POST["reservation"])){
          $dname = $_POST["dname"];
  		    $contact = $_POST["contact"];
          $vehicle = $_POST["vehicle"];
          $date = $_POST["date"];
          $stime = $_POST["stime"];
          $etime = $_POST["etime"];
          $status = "Not checked in";

          function GeneratePinCode($chars){
                  $pin="";
                  while ($chars!=0){
                    $pin .=rand(0,9);
                    $chars--;
                  }
                  return $pin;
                }

          $pin= GeneratePinCode(10);


          include("../dbase.php");

  		$sql = "insert into reservation(dname,userID,contact,vehicle_no,ddate,start_time,end_time,status,pin) values('$dname','$user','$contact','$vehicle','$date','$stime','$etime','$status','$pin')";

  		if(mysqli_query($con,$sql)){
         echo "Your PIN number is:".$pin;
  		}
  		else{
  			 echo "Something Went Wrong!";
  		}
  }

  if(isset($_POST["update"])){
            $pin = $_POST["pin"];
            $dname = $_POST["dname"];
            $contact = $_POST["contact"];
            $vehicle = $_POST["vehicle"];
            $date = $_POST["date"];
            $stime = $_POST["stime"];
            $etime = $_POST["etime"];

            include("../dbase.php");

            $sql="UPDATE reservation SET dname='$dname', contact='$contact', vehicle_no='$vehicle', ddate='$date', start_time='$stime', end_time='$etime' WHERE pin='$pin'";

                   if(mysqli_query($con,$sql)){
                     echo "Updated";
			              }
                    else{
			               echo "Something Went Wrong!";
		                }
    }

    if(isset($_POST["cancellation"])){
          $pin = $_POST["pin-cancel"];

          include("../dbase.php");

          if (mysqli_query($con,"DELETE FROM reservation WHERE pin='$pin'")){
                    echo "Reservation cancelled";
                }else{
    			 echo "Something Went Wrong!";
    		}
  }
	?>
