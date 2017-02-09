<?php
ob_start();
session_start();


$catagorics=$_POST["catagories"];
        

if($catagorics=="desktop"){
     header('Location:desktop_description.php');}
else if($catagorics=="notebook"){
     header('Location:notebook_description.php');}
else if($catagorics=="antivirus"){
     header('Location:antivirus_description.php');}
else if($catagorics=="printer"){
     header('Location:printer_description.php');}
else if($catagorics=="monitor"){
     header('Location:monitor_description.php');}
else
     header('Location:office.php');

    
?>