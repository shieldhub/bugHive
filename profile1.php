<?php
include('session.php');
include('header.php');
include('write1.php');
$token = session_id();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Message box-->
<div id="main">
<h1>Message Box</h1>
<div id="login">
<h2>Message</h2>
<form action="" method="post">
<label>Message :</label>
<input id="name" name="message" placeholder="message" type="text">
<input name="token" type="hidden" value="<?php echo $token; ?>">
<input name="submit" type="submit" value="Send">
<span><?php echo $error; ?></span>
</form>
</div>
</div>

</body>
</html>
