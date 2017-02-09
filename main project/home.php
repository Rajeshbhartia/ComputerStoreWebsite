<?php 
session_start();
include "database_creat.php";
?>
<html>   
<head>
      <link href="style.css" type="text/css" rel="stylesheet">
 <?php

    if(isset($_COOKIE['remember_me']))
        {
                   header('Location:home2.php');
        }
else if(isset($_SESSION['id']))
{
header('Location:home1.php');
}
?> 
    <link href="home.css" type="text/css" rel="stylesheet">
    <script src="home1.js" language="javascript" type="text/javascript"> </script>
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
        <div class="left4"><a href="login.php">sign in</a></div>
        <div class="left2"><a href="register.php">Register</a></div>
    </div>
    
   <ul id="sddm">
    <li ><a href="#" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">Home</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
        <a href="#">HTML/CSS</a>
        <a href="#">DHTML Menu</a>
        <a href="#">JavaScript</a>
        </div>
    </li>
       
       
    <li><a href="#" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">Notebook</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">DELL</a>
        <a href="#">HP</a>
        <a href="#">APPLE</a>
          
        </div>
    </li>
       
    <li id ="sddm"><a href="#" 
        onmouseover="mopen('m3')" 
        onmouseout="mclosetime()">Desktop</a>
        <div id="m3" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">DELL</a>
        <a href="#">HP</a>
        <a href="#">APPLE</a>
          
        </div>
    </li>
    
    <li><a href="#">Office Equipment</a></li>
    <li><a href=""> Monitor Hardisk</a></li>
    <li><a href="">Printer</a></li>
    <li><a href="#">Contact</a></li>
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