<?php
$url = '3.jpg';
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
<title>Banking System</title>
<style type="text/css">
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
.a{
  position: absolute;
  top: 30%;
  left:49%;
  transform: translate(-40%, -50%);
  -ms-transform: translate(-40%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 20px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
  text-align: center;
}
.b{
  position: absolute;
  top: 45%;
  left:50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 20px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 30px;
  text-align: center;
}
.a:hover{
  background-color: green;
  color: white;
}
.b:hover{
  background-color: green;
  color: white;
}
h2{
  font-style: italic;
  text-align: center;
  font-size: 50px;
  color: white;

}
#demo:hover{
  color: red;
}
</style>
</head>
<body>
<!--<div class="jumbotron text-center">-->
<marquee  direction="left" height="100px" scrollamount="15">
  <h2 id="demo">--Sparks Banking System--</h2>
</marquee>  

<form method="POST" action="customers.php">
<button class="a">View customers</button><br>
</form>

<form method="POST" action="transaction.php">
<button class="b">Transactions</button><br>
</form>


</body>
</html>