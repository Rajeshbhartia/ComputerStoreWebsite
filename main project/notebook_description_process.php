<?php
include "database_creat.php";
$name=$_POST["name"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$ram=$_POST["ram"];
$display_Size=$_POST["display_Size"];
$display_type=$_POST["display_type"];
$graphics_chipset=$_POST["graphics_chipset"];
$battary=$_POST["battary"];
$backup_time=$_POST["backup_time"];
$weight=$_POST["weight"];
$color=$_POST["color"];
$sql="INSERT INTO notebook_description(name,brand,model,ram,display_Size,display_type,graphics_chipset,battary,backup_time,weight,color) VALUES('$name','$brand','$model','$ram','$display_Size','$display_type','$graphics_chipset','$battary','$backup_time','$weight','$color')";
mysql_query($sql);
 header('Location:addproduct.php');
?>