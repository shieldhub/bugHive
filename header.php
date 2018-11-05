<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">

<b id="welcome">Welcome <i><?php
if (isset($_SESSION['login_user']) ){
	echo ": " . $_SESSION['login_user']; } else { echo "to BugHive";} ?>
</i></b>
<?php if(isset($_SESSION['login_user'])) :  ?>
<b id="logout"><a href="logout.php">Log Out</a></b>
<b id="logout"><a href="profile.php">Profile</a></b>
<?php endif; ?>
<b id="guestbook"><a href="guestbook.php">Guestbook</a></b>
</div>

</body>
</html>
