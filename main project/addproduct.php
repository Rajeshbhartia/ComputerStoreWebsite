
<?php

include 'home1.php';

if($_SESSION['id']!='admin')
{
header('Location:home1.php');
 die();
}
?>
<?php

?>
<html>
<head>
     <link href="addproduct.css" type="text/css" rel="stylesheet">
    
    
    </head>
    <body>
        <div class="login">
            
            <form action="add_product_process.php" method="post"  enctype="multipart/form-data">
            
<h3 style="color:black">product name:</h3>
<input type="text" name="productname"/></h3>
     
       
    <br/>  <br/> <h3 style="color:black">price: </h3>
<input type="number" name="price"/><br/>
        <h3 style="color:black">avaiability:</h3>
    <input type="number" name="avil" /><br/>
        <h3 style="color:black">model:</h3>
    <input type="text" name="model" /><br/>
             <h3 style="color:black">catagories:</h3>
    <input type="text" name="catagories" /><br/>
            
    <h3 style="color:black">use an image :</h3><br/>
      <input type="file" name="image_link"/>       
    <input type="submit" value="Add product"/><br/><br/>
       
   
</div>
     <div class="discription"><a href="notebook_description.php">ADD Details</a></div>
</body>
</html>