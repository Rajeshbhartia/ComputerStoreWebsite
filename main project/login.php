<?php
ob_start();
session_start();
?>

<html>
    <head>
     <link href="login.css" type="text/css" rel="stylesheet">
    
    </head>    
    <body>  
<?php
$msg=$_GET['r'];
if($msg=='yes')
{
echo'Wrong Password';
}
?>
    <div class="body">
        <div class="h1">
        <h1>sign in</h1></div>
    <div class="section">
        
    
    <form action="login_process.php" method="post" >
    
    <div class="login">
    user id  :  <input type="text" name="user_id" placeholder="enter user id"/><br/><br/>
    password:<input type="password" name="password" placeholder="enter password"/></br><br/>
    <input type="submit" value="submit"/><br/><br/>
    <input type="checkbox" name="remember_me"><p class="text">remember me</p><br/>
            
            <br/>
        </div>
        </form></div>
        </div>
    </body>
</html>