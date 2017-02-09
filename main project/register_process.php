<?php
include "database_creat.php";
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$user_id=$_POST["user_id"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$sql="INSERT INTO register(firstname,lastname,email,user_id,password,repassword) VALUES('$firstname','$lastname','$email','$user_id','$password','$repassword')";
mysql_query($sql);
echo "registration completed"; 
?>