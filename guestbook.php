<?php
session_start();
include('header.php');
if(isset($_SESSION['login_user'])){
//	include('addguestbook.php');
}
else{ header("location: index.php"); }


?>
<!DOCTYPE html>
<html>
<body>
<br><br><br>
<?php

$conn  = mysqli_connect("localhost", "root", "mutillidae", "company");

$sql = "select * from message";

$result = mysqli_query($conn, $sql);

//if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. " -Message :" . $row["message"]. "<br>";
    }
//} else {
  //  echo "0 results";
//}
mysqli_close($conn);
?>
</body>
</html>
