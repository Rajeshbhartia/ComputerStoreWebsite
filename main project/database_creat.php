<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("database_1",$con);
if(!$con){
    echo "not"; 
}
?>