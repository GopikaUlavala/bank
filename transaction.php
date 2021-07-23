	<?php
$url = '3.jpg';
?>
<html>
<head>
<title>Transaction history</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<style>
table, td, th {
  border: 2px solid black;
}

table {
  border-collapse: collapse;
  width: 60%;
  border:5px;
}

td,th {
  text-align: center;
  font-size: 25px;
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
.nav{
	color:black;
	font-size: 20px;
	list-style-type: none;
}
li a:hover{
	background-color:#00FF00;
	font-size: 30px;
}
</style>
<body>
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php">Home</a></li>
      <li><a href="customers.php">View Customers</a></li>
      <li><a href="transaction.php">Transactions</a></li>
    </ul>
  </div>
</nav>
<?php
	include("database.php");
	$query="select * from transactions";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)>0)
	{ 
		echo "<center><div>";
		echo "<table>";
		echo "<tr>";
			echo "<th colspan='5'><h2>Transaction History</h2></th>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>sender</th>";
			echo "<th>receiver</th>";
			echo "<th>amount</th>";
			echo "<th>time</th>";
		echo "</tr>";
			while($row=mysqli_fetch_assoc($result))
			{
			echo "<tr>
				<td>".$row['sender']."</td>
				<td>".$row['receiver']."</td>
				<td>".$row['amount']."</td>
				<td>".$row['time']."</td>
			</tr>";
			}
			echo "</table></div></center>";
		}
		else
			echo "0 results";
		mysqli_close($con);
		?>
</body>
</html>