<?php
include "database_creat.php";
$name=$_POST["name"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$type=$_POST["type"];
$display_size=$_POST["display_size"];
$screen_type=$_POST["screen_type"];
$brightness=$_POST["brightness"];
$screen_resolution=$_POST["screen_resolution"];
$contrast_ratio=$_POST["contrast_ratio"];
$hdmi_port=$_POST["hdmi_port"];
$speaker=$_POST["speaker"];
$sql="INSERT INTO monitor_description(name,brand,model,type,display_size,screen_type,brightness,screen_resolution,contrast_ratio,hdmi_port,speaker) VALUES('$name','$brand','$model','$type','$display_size','$screen_type','$brightness','$screen_resolution','$contrast_ratio','$hdmi_port','$speaker')";
mysql_query($sql);
 header('Location:monitor.php');
?>