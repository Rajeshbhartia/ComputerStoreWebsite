<?php
session_start();
include "database_creat.php";

?> 

<?php
$user_id=$_POST['user_id'];
$password=$_POST['password'];

login($user_id,$password);
function login($user_id,$password)
{
    $sql="SELECT * FROM register WHERE user_id='$user_id' ";
    $result=mysql_query($sql);
    while ($row=mysql_fetch_array($result)){
        
    if($row['password']==$password)
    {
        if(isset($_POST['remember_me']))
        {
        setcookie('remember_me',$user_id,time()+50);
            header('Location:home2.php');
        }
        
    $_SESSION['id']=$row['user_id'];
    $_SESSION['name']=$row['firstname'];
       header('Location:home1.php');
    }
        else{
        header("Location:login.php?r=yes");
        }
    }
}




?>
   