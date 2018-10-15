<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<!-- Message box-->
<div id="main">
<h1>Message Box</h1>
<div id="login">
<h2>Message</h2>
<form action="" method="get">
<label>Message :</label>
<input id="name" name="message" placeholder="message" type="text">
<input name="submit" type="submit" value=" Send ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>

</body>
</html>
