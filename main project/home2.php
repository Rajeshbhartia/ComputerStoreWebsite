<?php 
session_start();
     if($_COOKIE['remember_me']){
     $name=$_COOKIE['remember_me'];
?>
<html>   
<head>
    <link href="home.css" type="text/css" rel="stylesheet">   
    <script src="home.js" language="javascript" type="text/javascript"> </script>
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
<?php include'body.php'?>
    </body>
   
    </html>
    
    <?php
}else{
    header('Location:home.php');   
}
?>