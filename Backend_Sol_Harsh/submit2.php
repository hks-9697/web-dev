 <?php
 include("config.php");
session_start();  
$myusername=$_SESSION['user'];
$add=$_POST['address'];
$p=$_POST['phone'];
$c=$_POST['college'];
$sql = "UPDATE login SET address='$add',phone='$p',college='$c' WHERE login.user='$myusername'";
#$sql="UPDATE login SET address = 'mahamaya,jjlal', college = 'nitkas' WHERE login.user = 'harsh';";
$result = mysqli_query($db,$sql);
$sql = "SELECT * FROM login WHERE user = '$myusername' ";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION["name"]=$row["name"];
$_SESSION["address"]=$row["address"];
$_SESSION["phone"]=$row["phone"];
$_SESSION["college"]=$row["college"];
echo "updated"; ?>
<html>
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
<a href='page.php'>GO BACK</a>
</html>