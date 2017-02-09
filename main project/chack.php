<?php

include "database_creat.php";
?>
<?php
function username($id){
    $sql="SELECT * FROM  register WHERE user_id='$id'";
    $result=mysql_query($sql);
    while ($row=mysql_fetch_array($result)){
      return $row['user_id'];
    }
}
   
function is_admin($id){
    if (username($id)=='admin')
    { return true;}
    else
    {    return false;}
}




?>
   