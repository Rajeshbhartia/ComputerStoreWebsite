 <?php

include "database_creat.php";
$r="office equipment";
?>
<?php include 'home1.php'?>
  <link href="style.css" type="text/css" rel="stylesheet">

<?php
    $sql="SELECT * FROM  add_product WHERE catagorics='$r'";
    $result=mysql_query($sql);
$i=1;
?>
<div id="photo_show">
<?php
while ($row=mysql_fetch_array($result)){    
   ?>

    <div id="image">  
         <form action="details.php?link='<?php echo $row['productname'];?>' " method="post" >
    <img id="img_size" src="<?php echo $row['image_link'];?>" alt="" />
         <div id="name"><h3>  <?php echo $row['productname'];?></h3>
             <div id="price"><h3><?php echo $row['price'];?></h3></div>
             <div id= "submit"><input type="submit" value="details"/></div> 
                 <form action="#" method="post" >
             <div id= "Add_to_cart"><input type="submit" value="ADD to cart"/></div>
        </div>
             </form>
            </form>
     </div>
<?php
    }
?>
       
    </div>