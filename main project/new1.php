
<?php
session_start();
include "database_creat.php";
if(isset($_SESSION['id']))
$name_id=$_SESSION['id'];



$q = intval($_GET['q']);


$sql2="SELECT * FROM `add_product`  WHERE user_id = '".$q."'";
$result1 = mysql_query($sql2);


if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if (mysql_num_rows($result1) > 0) {
while($row = mysql_fetch_assoc($result1)) {
   
    $productname=$row['productname'] ;
   
    $price=$row['price'];
    
   }
   
}
$sqlw="INSERT INTO `new_order_table`(`id`, `user_id`, `productname`, `price`) VALUES ('$name_id','$q','$productname','$price')";
mysql_query($sqlw);

echo '<h1 id=hh>'.'Currnt Ordered Items'.'</h1>';
 $sqli="SELECT * FROM `new_order_table` WHERE id = '$name_id'";
 $resulti = mysql_query($sqli);

 while($row = mysql_fetch_assoc($resulti)) {
echo '<hr/>';
 $food_name=$row['productname'];
      echo '<p style="padding-left:7px;">'.'Productname: '.$row['productname'].'</p>';
       $price=$row['price'];
      echo '<p style="padding-left:7px;">'.' Price: '.$row['price'].'<br>'.'<hr/>';
    
}
?>
