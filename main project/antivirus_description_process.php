<?php
include "database_creat.php";
$name=$_POST["name"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$software_type=$_POST["software_type"];
$protection_type=$_POST["protection_type"];
$protection_against=$_POST["protection_against"];
$Supporting_OS=$_POST["Supporting_OS"];
$user_limit=$_POST["user_limit"];
$System_Req_Processor=$_POST["System_Req_Processor"];
$Display=$_POST["Display"];
$Product_ID=$_POST["Product_ID"];
$sql="INSERT INTO antivirus_description(name,brand,model,software_type,protection_type,protection_against,Supporting_OS,user_limit,System_Req_Processor,Display,Product_ID) VALUES('$name','$brand','$model','$software_type','$protection_type','$protection_against','$Supporting_OS','$user_limit','$System_Req_Processor','$Display','$Product_ID')";
mysql_query($sql);
 header('Location:addproduct.php');
?>