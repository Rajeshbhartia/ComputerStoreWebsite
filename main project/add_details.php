
<?php

include 'home1.php';

if($_SESSION['id']!='admin')
{
header('Location:home1.php');
 die();
}
?>

<html>
<head>
     <link href="adddetails.css" type="text/css" rel="stylesheet">
</head>
    <body>
              
 <form action="add_details_process.php" method="post" >
  <h2 style="color:black">catagories:</h2>
<div class="details1"> <input type="text" name="catagories" />  </div>   
 <div class="details2"  >   <input type="submit" value="Submit"/></div>
       
</div>
</body>
</html>