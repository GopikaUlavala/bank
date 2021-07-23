<?php
include("database.php");
session_start();
$data=$_POST['name'];
$sql="select name from customers where NOT name='$data'";
$result=mysqli_query($con,$sql);
?>
<?php
$url = '3.jpg';
?>
<html>
<head>
	<title>Transfer Money</title>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
<style>
table.center {
  margin-left: auto; 
  margin-right: auto;
  width: 300px;
  height: 200px;
  margin-top: auto;
}
td,th{
	text-align:center;
}
.btn {
  background-color:black;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  position: absolute;
  left: 720px;
  top: 330px;
  border-radius: 20px;
}
.btn:hover{
	background-color: green;
}
body, html {
  height: 100%;
  margin: 0;
}
body
{
    background-image:url('<?php echo $url ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%; 

}
li a:hover{
	background-color:#00FF00;
	font-size: 30px;
}
.nav{
	color:black;
	font-size: 20px;
	list-style-type: none;
}
</style>
	<script type="text/javascript">
		function send() {
			// body...
			var a = document.getElementById("sender").value;
			var arr = ["sai","vineela","vamsi","chinna","nagamani","nayak","anji","neelima","gopika","divya"];
			var index = arr.indexOf(a);
    		if (index > -1) 
        		arr.splice(index, 1);
        	var str = "";
        	for (var i = 0; i < arr.length; i++) 
        		str = str +"<option value="+arr[i]+">"+arr[i]+"</option>";
        	
        	document.getElementById("receiver").innerHTML = str;
		}
	</script>
</head>
<body>
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php">Home</a></li>
      <li><a href="customers.php">View Customers</a></li>
      <li><a href="transaction.php">Transactions</a></li>
    </ul>
  </div>
</nav>

	<form method="post" action="update_amount.php">
	<table border="2" class="center">
	<th colspan="2" >Money Transaction</th>
	<tr><td><b>Receiver Name </b></td>
	<td>
		<select id="receiver" name="receiver" style="width: 150px; height: 30px; font-size: 18px;" required>
		<option selected>Select </option>
		<?php
			while ($row = $result->fetch_assoc()) 
			{
				$uname1 = $row['name'];
				echo "<option value=$uname1 name='name'>";
				echo $uname1;
				echo "</option>";
			}
		?>
	</select>
	</td>
	</tr>
	<tr><td><b>Amount </b></td>
		<td>
		<input type="number" min="1" name="transfer" placeholder="Enter Amount" style="width: 150px; height: 30px; font-size: 18px;" required>
		</td>
	</tr>
		<center><?php echo "<button name='sender' value=$data class='btn'>Send</button>";?></center>
	
</form>

</table>
</body>
</html>