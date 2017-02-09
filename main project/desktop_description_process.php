<?php
include "database_creat.php";
$name=$_POST["name"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$processor=$_POST["processor"];
$chipset=$_POST["chipset"];
$display_type=$_POST["display_type"];
$ram=$_POST["ram"];
$hdd=$_POST["hdd"];
$monitor_size=$_POST["monitor_size"];
$monitor_type=$_POST["monitor_type"];
$audio=$_POST["audio"];
$speaker=$_POST["speaker"];
$keyboard=$_POST["keyboard"];
$mouse=$_POST["mouse"];
$product_id=$_POST["product_id"];

$sql="INSERT INTO desktop_description(name,brand,model,processor,chipset,display_type,ram,hdd,monitor_size,monitor_type,audio,speaker,keyboard,mouse,product_id) VALUES('$name','$brand','$model','$processor','$chipset','$display_type','$ram','$hdd','$monitor_size','$monitor_type','$audio','$speaker','$keyboard','$mouse','$product_id')";
mysql_query($sql);
 header('Location:desktop.php');
?>