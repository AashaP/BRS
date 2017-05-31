<?php
include("connection.php");
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM register WHERE Username='$Username' and Password='$Password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
// Register $username, $password and redirect to file "login_success.php"
$_SESSION['username'] = 'root';
$_SESSION['password'] = '';
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>