<?php
ob_start();
session_start();
include "database_creat.php";
$productname=$_POST["productname"];

$price=$_POST["price"];
$avil=$_POST["avil"];
$model=$_POST["model"];
$catagorics=$_POST["catagories"];
$image_link="";


 
if ($_FILES['image_link']['error']>0)
{
echo 'error';
}else{
    $prefix= $_SESSION['id'].time();
    $link="upload/" .$prefix.$_FILES["image_link"]["name"];
move_uploaded_file($_FILES["image_link"]["tmp_name"],$link);
    $image_link="http://localhost/project/upload/" .$prefix.$_FILES["image_link"]["name"];
}

$sql="INSERT INTO add_product (productname,	price,avil,model,catagorics,image_link) VALUES('$productname','$price','$avil','$model','$catagorics','$image_link')";
mysql_query($sql);



 $sql="SELECT * FROM  add_product";
 $result=mysql_query($sql);
 while ($row=mysql_fetch_array($result)){
        

if($row['catagorics']=="desktop"){
     header('Location:desktop.php?p=desktop');}
else if($row['catagorics']=="notebook"){
     header('Location:notebook.php?q=notebook');}
else if($row['catagorics']=="antivirus"){
     header('Location:antivirus.php?r=antivirus');}
else if($row['catagorics']=="printer"){
     header('Location:printer.php?s=printer');}
else if($row['catagorics']=="monitor"){
     header('Location:monitor.php?t=monitor');}
else
     header('Location:office.php');

    }

