<?php 
session_start();
include'chack.php';
if($_SESSION['id']){
    $name= $_SESSION['id'];
?>

<html>   
<head>
    <link href="home.css" type="text/css" rel="stylesheet">   
    <script src="home.js" language="javascript" type="text/javascript"> </script>
    <script type="text/javascript" src="JS\home.js"></script>
    <script type="text/javascript">
    var imageCount=1;
    var total=4;
     function slide (x) {
          var image = document.getElementById('image');
  imageCount = imageCount + x;
  if(imageCount > total){imageCount = 1;}
  if(imageCount < 1){imageCount = total;} 
  image.src = "Images/img"+ imageCount +".jpg";
  }
  window.setInterval(function photoA() {
  var image = document.getElementById('image');
  imageCount = imageCount + 1;
  if(imageCount > total){imageCount = 1;}
  if(imageCount < 1){imageCount = total;} 
  image.src = "Images/img"+ imageCount +".jpg";
  },5000);
        </script>
     </head>
<body>
    <div class="main">
    <div class="header">
        
    <h1>EXCLUSIVE </h1>
        <div class="left"><h2>computers</h2></div>
        <div class="left1">
    <?php
    echo 'hello ';
    echo $name; 
    ?>
        
        </div>
        <div class="left2"><a href="logout.php">logout</a></div>
    </div>
    

        

<ul id="sddm">
    <li><a href="home1.php">Home</a></li>
    <li><a href="notebook.php?q=notebook">Notebook</a></li>
    <li><a href="desktop.php?p=desktop">Desktop</a></li> 
    <li><a href="monitor.php"> Monitor Hardisk</a></li>
    <li><a href="printer.php">Printer</a></li>
     <li><a href="antivirus.php">Antivirus</a></li>

    <li ><a href="#" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">Account</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
        <a href="#">hi, <?php
    echo $name; 
    ?></a>
        <a href="logout.php">logout</a>
       
        <?php   if(($_SESSION['id']=='admin'))
    {
    echo '<a href="addproduct.php">Add Product</a>';
    }
    ?>
         <?php   if(($_SESSION['id']=='admin'))
    {
    echo '<a href="add_details.php">Add Details</a>';
    }
    ?>
            
            </a>
        </div>
    </li>   
    
</ul>
<div style="clear:both"></div>
<div class="container">
      <img src="Images\\img1.jpg" id="image">
      <div class="left_holder"><img onClick="slide(-1)" src="rsz_left.png" class="left"></div>
      <div class="right_holder"><img onClick="slide(1)" src="rsz_1right.png" class="right"></div>
    </div>
</div>
        
    </body>
       </html>
    
    <?php
}else{
    header('Location:login.php? error=yes');   
}
?>