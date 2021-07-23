<?php
	$con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"bank");
    if(!$con){
        die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
    }

?>