<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Management Home</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>

AWS DynamoDB Management Table Parameters will be displayed here...
<br>
AWS DynamoDB Update Scripts will be here...
<br>
All parameters (manTable.json) will be loaded when management Server is created.
<br>
<br>
This form will display retrieved data form dynamodb and let them be updated with a new written update.php action.
<br>
<form action="" method="post">
<label>Update Admin Email :</label>
<input id="email" name="email" placeholder="adminEmail" type="text">
<label>Update MyBB Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Update ">
<span><?php echo $error; ?></span>
<form>

<br>

Zabbix dashboard stats will be displayed in a frame...
<br><br>
<? 
// Zabbix dashboard url will be the source
?>
<frameset cols=”125,*” frameborder=”0”>
  <frame name=”main” src=”test.php” scrolling=”auto”>
 <noframes>
   <body>
    <h1>Oppps...Web istemcinizin frame desteği yok</h1>
   </body>
 </noframes>
</frameset>
</body>
</html>
