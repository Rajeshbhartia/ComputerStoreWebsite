<?php
include "database_creat.php";
$name=$_POST["name"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$function=$_POST["function"];
$printer_type=$_POST["printer_type"];
$speed_PPM_black=$_POST["speed_PPM_black"];
$print_resolution=$_POST["print_resolution"];
$paper=$_POST["paper"];
$interface=$_POST["interface"];
$memory=$_POST["memory"];
$OS_compatibility=$_POST["OS_compatibility"];
$dimensions=$_POST["dimensions"];
$weight=$_POST["weight"];
$product_id=$_POST["product_id"];
$sql="INSERT INTO printer_description(name,brand,model,function,printer_type,speed_PPM_black,print_resolution,paper,interface,memory,OS_compatibility,dimensions,weight,product_id) VALUES('$name','$brand','$model','$function','$printer_type','$speed_PPM_black','$print_resolution','$paper','$interface','$memory','$OS_compatibility','$dimensions','$weight','$product_id')";
mysql_query($sql);
 header('Location:printer.php');
?>