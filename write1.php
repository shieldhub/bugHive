<?php
//session_start();
if(isset($_POST['submit'])){
$msg = $_POST['message'];
$token = $_POST['token'];

if($token != session_id()){
$error =  "error";
}else{

//echo $token;
$conn = mysqli_connect('localhost', 'root', 'mutillidae', 'company');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$user = $_SESSION['login_user'];
$sql = "INSERT INTO message (message, user)
VALUES ('$msg', '$user')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//}else{}*/


}}

?>
