<?php
session_start();
$name=$_GET['link'];
include "database_creat.php";
?> 

  <link href="details.css" type="text/css" rel="stylesheet">
<?php
    $s="SELECT * FROM  add_product WHERE (productname=$name) ";
    $result=mysql_query($s) or die(mysql_error());
while ($row=mysql_fetch_array($result)){
?>
   <div id="photo_show">
    <div id="image">   
    <img id="img_size" src="<?php echo $row['image_link']; ?>" alt="" /></div>
  
    <div id ="discription">
    <?php
 if($row['catagorics']=='notebook'){

    $sq="SELECT * FROM  notebook_description WHERE (name=$name) ";
    $re=mysql_query($sq) or die(mysql_error());
    while($rows=mysql_fetch_array($re)){
    ?>
   
      <div class="table">
    <table border="1">
      <caption><h1>Product Description</h1></caption>
	
	<tr>
	  <td><h2> Product name:</h2></td>
	  <td><h3> <p><div id ="dis"> <?php echo $rows['name'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Brand:</h2></td>
	  <td><h3> <p><div id ="dis1"> <?php echo $rows['brand'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Model:</h2></td>
	  <td><h3> <p> <div id ="dis2"><?php echo $rows['model'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Ram:</h2></td>
	  <td><h3> <p> <div id ="dis3"><?php echo $rows['ram'];
          ?></div></p></h3></td>
	</tr>

<tr>
	  <td><h2>Display Size:</h2></td>
	  <td><h3> <p> <div id ="dis4"><?php echo $rows['display_Size'];
          ?></div></p></h3></td>
	</tr>

	  <td><h2>Display type:</h2></td>
	  <td><h3> <p> <div id ="dis5"><?php echo $rows['display_type'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Graphics chipset:</h2></td>
	  <td><h3> <p> <div id ="dis6"><?php echo $rows['graphics_chipset'];
          ?></div></p></h3></td>
	</tr>
    <tr>
	  <td><h2>Battary:</h2></td>
	  <td><h3> <p> <div id ="dis7"><?php echo $rows['battary'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Backup time:</h2></td>
	  <td><h3> <p> <div id ="dis8"><?php echo $rows['backup_time'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Weight:</h2></td>
	  <td><h3> <p> <div id ="dis9"><?php echo $rows['weight'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Color:</h2></td>
	  <td><h3> <p> <div id ="dis0"><?php echo $rows['color'];
          ?></div></p></h3></td>
	</tr>
<tr>
	</table> 
        </div>  
     </div>
         </div>
<?php
 }   
 ?>
<?php
}
?>

 <?php
 if($row['catagorics']=='desktop'){
  $sq2="SELECT * FROM  desktop_description WHERE (name=$name) ";
    $re2=mysql_query($sq2) or die(mysql_error());
    while($rows=mysql_fetch_array($re2)){
    ?>
     <div class="table1">
    <table border="1">
      <caption><h1>Product Description</h1></caption>
	
	<tr>
	  <td><h2> Product name:</h2></td>
	  <td><h3> <p> <?php echo $rows['name'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Brand:</h2></td>
	  <td><h3> <p><?php echo $rows['brand'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Model:</h2></td>
	  <td><h3> <p><?php echo $rows['model'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Processor:</h2></td>
	  <td><h3> <p> <?php echo $rows['processor'];
          ?></div></p></h3></td>
	</tr>

<tr>
	  <td><h2>Chipset:</h2></td>
	  <td><h3> <p><?php echo $rows['chipset'];
          ?></div></p></h3></td>
	</tr>

	  <td><h2>Display type:</h2></td>
	  <td><h3> <p><?php echo $rows['display_type'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Ram:</h2></td>
	  <td><h3> <p> <?php echo $rows['ram'];
          ?></div></p></h3></td>
	</tr>
    <tr>
	  <td><h2>HDD:</h2></td>
	  <td><h3> <p><?php echo $rows['hdd'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Monitor Size:</h2></td>
	  <td><h3> <p> <?php echo $rows['monitor_size'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Monitor Type:</h2></td>
	  <td><h3> <p> <?php echo $rows['monitor_type'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Audio:</h2></td>
	  <td><h3> <p> <?php echo $rows['audio'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Speaker:</h2></td>
	  <td><h3> <p> <?php echo $rows['speaker'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Keyboard:</h2></td>
	  <td><h3> <p> <?php echo $rows['keyboard'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Mouse:</h2></td>
	  <td><h3> <p> <?php echo $rows['mouse'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Product ID:</h2></td>
	  <td><h3> <p> <?php echo $rows['product_id'];
          ?></div></p></h3></td>
	</tr>
	</table> 
        </div>  
     
<?php
 }   
 ?>
<?php
}
?>
<?php
 if($row['catagorics']=='antivirus'){
  $sq2="SELECT * FROM  antivirus_description WHERE (name=$name) ";
    $re2=mysql_query($sq2) or die(mysql_error());
    while($rows=mysql_fetch_array($re2)){
    ?>
     <div class="table1">
    <table border="1">
      <caption><h1>Product Description</h1></caption>
	
	<tr>
	  <td><h2> Product name:</h2></td>
	  <td><h3> <p> <?php echo $rows['name'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Brand:</h2></td>
	  <td><h3> <p><?php echo $rows['brand'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Model:</h2></td>
	  <td><h3> <p><?php echo $rows['model'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Software Type:</h2></td>
	  <td><h3> <p> <?php echo $rows['software_type'];
          ?></div></p></h3></td>
	</tr>

<tr>
	  <td><h2>Protection Type:</h2></td>
	  <td><h3> <p><?php echo $rows['protection_type'];
          ?></div></p></h3></td>
	</tr>

	  <td><h2>Protection Against:</h2></td>
	  <td><h3> <p><?php echo $rows['protection_against'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Supporting OS:</h2></td>
	  <td><h3> <p> <?php echo $rows['Supporting_OS'];
          ?></div></p></h3></td>
	</tr>
    <tr>
	  <td><h2>User limit:</h2></td>
	  <td><h3> <p><?php echo $rows['user_limit'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>System Req Processor:</h2></td>
	  <td><h3> <p> <?php echo $rows['System_Req_Processor'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Display:</h2></td>
	  <td><h3> <p> <?php echo $rows['Display'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Product ID:</h2></td>
	  <td><h3> <p> <?php echo $rows['Product_ID'];
          ?></div></p></h3></td>
	</tr>
	</table> 
        </div>  
     
<?php
 }   
 ?>
<?php
}
?>

<?php
 if($row['catagorics']=='printer'){
  $sq2="SELECT * FROM  printer_description WHERE (name=$name) ";
    $re2=mysql_query($sq2) or die(mysql_error());
    while($rows=mysql_fetch_array($re2)){
    ?>
     <div class="table1">
    <table border="1">
      <caption><h1>Product Description</h1></caption>
	
	<tr>
	  <td><h2> Product name:</h2></td>
	  <td><h3> <p> <?php echo $rows['name'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Brand:</h2></td>
	  <td><h3> <p><?php echo $rows['brand'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Model:</h2></td>
	  <td><h3> <p><?php echo $rows['model'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Function:</h2></td>
	  <td><h3> <p> <?php echo $rows['function'];
          ?></div></p></h3></td>
	</tr>

<tr>
	  <td><h2>Printer Type:</h2></td>
	  <td><h3> <p><?php echo $rows['printer_type'];
          ?></div></p></h3></td>
	</tr>

	  <td><h2>Speed PPM black:</h2></td>
	  <td><h3> <p><?php echo $rows['speed_PPM_black'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Print_resolution:</h2></td>
	  <td><h3> <p> <?php echo $rows['print_resolution'];
          ?></div></p></h3></td>
	</tr>
    <tr>
	  <td><h2>Paper:</h2></td>
	  <td><h3> <p><?php echo $rows['paper'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Interface:</h2></td>
	  <td><h3> <p> <?php echo $rows['interface'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Memory:</h2></td>
	  <td><h3> <p> <?php echo $rows['memory'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>OS Compatibility:</h2></td>
	  <td><h3> <p> <?php echo $rows['OS_compatibility'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Dimensions:</h2></td>
	  <td><h3> <p> <?php echo $rows['dimensions'];
          ?></div></p></h3></td>
	</tr>
<tr>
    <td><h2>Weight:</h2></td>
	  <td><h3> <p> <?php echo $rows['weight'];
          ?></div></p></h3></td>
	</tr>

<tr>
    <td><h2>Product ID:</h2></td>
	  <td><h3> <p> <?php echo $rows['product_id'];
          ?></div></p></h3></td>
	</tr>
	</table> 
        </div>  
     
<?php
 }   
 ?>
<?php
}
?>
 <?php
 if($row['catagorics']=='monitor'){
  $sq2="SELECT * FROM  monitor_description WHERE (name=$name) ";
    $re2=mysql_query($sq2) or die(mysql_error());
    while($rows=mysql_fetch_array($re2)){
    ?>
     <div class="table1">
    <table border="1">
      <caption><h1>Product Description</h1></caption>
	
	<tr>
	  <td><h2> Product name:</h2></td>
	  <td><h3> <p> <?php echo $rows['name'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Brand:</h2></td>
	  <td><h3> <p><?php echo $rows['brand'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Model:</h2></td>
	  <td><h3> <p><?php echo $rows['model'];
          ?></div></p></h3></td>
	</tr>
    
    <tr>
	  <td><h2>Type:</h2></td>
	  <td><h3> <p> <?php echo $rows['type'];
          ?></div></p></h3></td>
	</tr>

<tr>
	  <td><h2>Display Size:</h2></td>
	  <td><h3> <p><?php echo $rows['display_size'];
          ?></div></p></h3></td>
	</tr>

	  <td><h2>Screen Type:</h2></td>
	  <td><h3> <p><?php echo $rows['screen_type'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Brightness:</h2></td>
	  <td><h3> <p> <?php echo $rows['brightness'];
          ?></div></p></h3></td>
	</tr>
    <tr>
	  <td><h2>Screen Resolution:</h2></td>
	  <td><h3> <p><?php echo $rows['screen_resolution'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>Contrast Ratio:</h2></td>
	  <td><h3> <p> <?php echo $rows['contrast_ratio'];
          ?></div></p></h3></td>
	</tr>
<tr>
	  <td><h2>HDMI Port:</h2></td>
	  <td><h3> <p> <?php echo $rows['hdmi_port'];
          ?></div></p></h3></td>
	</tr>

<tr>
    <td><h2>Speaker:</h2></td>
	  <td><h3> <p> <?php echo $rows['speaker'];
          ?></div></p></h3></td>
	</tr>

	</table> 
        </div>  
     
<?php
 }   
 ?>
<?php
}
?>
<?php
}    
?>