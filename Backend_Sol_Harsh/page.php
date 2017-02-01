<html>
<head>
<title>Welcome </title>
<h2><a href = "logout.php"><b>Sign Out</b></a></h2>
</head>
<body>
<h1>Welcome  
<?php
session_start();
echo $_SESSION['name'];?></h1> <br>
<form action = "script.php" method = "post">
                  <label>Name    :</label><input type = "text" name = "name" class = "box"/><br /><br />
                  <label>college :</label><input type = "text" name = "college" class = "box"/><br /><br />
                  <label>EVENT1  :</label><input type = "radio" name = "event1"  value=1<br/><br />
                  <label>EVENT2  :</label><input type = "radio" name = "event2"   value=1 <br/><br />
                  <label>EVENT3  :</label><input type = "radio" name = "event3"  value=1 <br/><br />
                  <input type = "submit" value = " Submit "/> <br> 
               </form>
               <br>
               <br>
               <a href="profile.php"><marquee>profile edit</marquee></a>
               <hr>
               <a href="profilev.php"><marquee>profile view</marquee></a>
</body>
</html>