<?php
include "connection.php";
include "header.php";
?>
<!doctype>
<html>
<head>
<title>Login</title>
<body>
</body>
</head>
</html>
<form name="Register" method="post" action=""> 
<br>
Username: <input type="text"  name="uname" required/>
</br>
<br>
Password: <input type="password" name="password" required/>
</br>
<br>
Email: <input type="email" name="email" required/>
</br>
<input type="submit" type="submit" name="btnsubmit" value="Register"/></form></b> 
<?php
if(isset($_POST['btnsubmit'])=='Register')
{
$Username=$_POST['uname'];
$Password=$_POST['password'];
$Email=$_POST['email'];
$query="Insert into register values('$Username','$Password','$Email')";
$insert=mysqli_query($connect,$query);
if($insert)
{
	header('location:book.php');
    echo"Successfull";
}
else{
    echo"Failed";
}
}