<?php
session_start();
session_destroy();
 setcookie('remember_me',$user_id,time()-100);
header('Location:home.php');