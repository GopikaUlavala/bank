<?php

	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"bank");

	$sender = $_POST["sender"];
	$receiver = $_POST["receiver"];

	// Sender Amount 

	$sql = "SELECT amount FROM customers WHERE name = '$sender'";
	if(!mysqli_query($con,$sql))
	{
		echo "<script type='text/javascript'>alert('Data Invalid')</script>";
		die("");
	}

	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$sender_amount = $row["amount"];

	// Receiver Amount

	$sql = "SELECT amount FROM customers WHERE name = '$receiver'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$receiver_amount = $row["amount"];

	$amount = $_POST["transfer"];

	if($sender_amount >= $amount){

		$amount_of_sender = $sender_amount - $amount;
		$sql = "UPDATE customers set amount = $amount_of_sender where name = '$sender'";
		$result = mysqli_query($con,$sql);

		$amount_of_receiver = $receiver_amount + $amount;
		$sql = "UPDATE customers set amount = $amount_of_receiver where name = '$receiver'";
		$result = mysqli_query($con,$sql);

		$sql = "INSERT into transactions(sender,receiver,amount,time) values('$sender','$receiver',$amount,now())";
		$result = mysqli_query($con,$sql);

		$message = "Your transaction completed successfully";
		echo "<script type='text/javascript'>alert('$message')</script>";

		include 'customers.php';

	}else{

		$message = "Invalid Etnry amount";
		echo "<script type=text/javascript>alert('$message')</script>";

		include 'customers.php';

	}
?>
