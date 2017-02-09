
<?php

include "database_creat.php";
$t="monitor";
?>
<?php include 'home1.php'?>
  <link href="style.css" type="text/css" rel="stylesheet">
  <link href="cart_info.css" type="text/css" rel="stylesheet">

<script type="text/javascript">
  function showUser(str) {
    
    if (str == "") {
        document.getElementById("").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("cart_info").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","new1.php?q="+str,true);
        xmlhttp.send();
    }
}

</script> 



<?php
    $sql="SELECT * FROM  add_product WHERE catagorics='$t'";
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
                
          <!--<div id= "Add_to_cart"><input type="submit" value="ADD to cart"/></div>-->
  
                     
        </div>
             </form>
            <button id= "Add_to_cart" name="cart_name" onclick="showUser(this.value)" value="<?php echo $row['user_id']; ?>">ADD to cart</button>
     </div>
    
<?php
    }

?>
  <div class="cart" id="cart_info">
 <!--  echo '<h1 id=hh>'.'Old Ordered Items'.'</h1>'; -->
 <h1>Current Ordered Items</h1>
</div>    
    </div>