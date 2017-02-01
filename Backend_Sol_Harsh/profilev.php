 <html><?php
 include('config.php');
 session_start();  
$myusername=$_SESSION['user'];
$sql = "SELECT * FROM login WHERE user = '$myusername' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION["name"]=$row["name"];
$_SESSION["address"]=$row["address"];
$_SESSION["phone"]=$row["phone"];
$_SESSION["college"]=$row["college"];
?>
<title>PROFILE</title>
<body>
<h1 align="centre">PROFILE</h1>
<table border="1"  >
<tr>
<th>Item</th>
<th>value</th>
</tr>
<tr>
<th>name</th>
<th><?php echo $_SESSION["name"];?></th>
</tr>
<tr>
<th>adderss</th>
<th><?php echo $_SESSION["address"];?></th>
</tr>
<tr>
<th>phone</th>
<th><?php echo $_SESSION["phone"];?></th>
</tr>
<tr>
<th>college</th>
<th><?php echo $_SESSION["college"];?></th>
</tr>
</table>
<hr>
<a href='page.php'>GO BACK</a></body>
</html>