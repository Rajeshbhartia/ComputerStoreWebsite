<?php
session_start();
include "database_creat.php";
$sql="SELECT * FROM register";
$re=mysql_query($sql) or die(mysql_error());
?>


<html>
    <head>
        
    <script type="text/javascript">
     function checkForm(){
      var password=document.forms["MyForm"]["pass"].value;
      var Repassword=document.forms["MyForm"]["repass"].value;
      var user=document.forms["MyForm"]["user_id"].value;
      <?php
      while ($row=mysql_fetch_array($re)) {
      ?>
      if(user=='<?php echo $row['user_id'];?>'){
        alert("Username already exists. Enter new one.");
        document.forms["MyForm"]["user_id"].focus();
        document.forms["MyForm"]["user_id"].value="";
        return false;
      }
      <?php
      }
      ?>
      if(password!=Repassword){
        alert("Password doesn't match.");
        document.forms["MyForm"]["repass"].focus();
        document.forms["MyForm"]["repass"].value="";
        return false;
      }
     }
    </script>
        
    
     <link href="register.css" type="text/css" rel="stylesheet" >
    </head>
    
    
<body>
     <div class="body">
        <div class="h1">
        

        
    <h1>Register</h1>
            
     <div class="section">
    <form action="register_process.php" method="POST" name="MyForm" onsubmit="return checkForm();">
    
   <div class="login"> 
 <div class="input6">First name:</div> <div class= "input"><input type="text" name="firstname" placeholder="enter firstname"  required=""><br/></div>
   <br/> <div class="input6">  last name:</div>   <div class= "input1"><input type="text" name="lastname" placeholder="enter lastname" ><br/></div>
       
     <br/>  <div class="input6">  email:</div>   <div class= "input2"><input type="text" name="email" placeholder="enter email"  required=""><br/></div>
      <br/>  <div class="input6">  user id:</div> <div class= "input3"><input type="text" name="user_id" placeholder="enter user id" required=""><br/></div>
    <br/> <div class="input8">  password:</div>  <div class= "input4"> <input type="password" name="pass" placeholder="enter password" required=""></div>
      <br/> <div class="input7">   Re-Enter password: </div><div class= "input5"> <input type="password" name="repass" placeholder="re-enter password" required=""></div>
       
        <input type="submit" value="submit" required=""><br/>
            </div>
       
         
        </form>
           </div>
    </div>
    </body>
</html>