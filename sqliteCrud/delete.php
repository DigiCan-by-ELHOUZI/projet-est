<?php

$id= $_GET['u_id'];

include('conndb.php');


$query="DELETE FROM event WHERE event_id='$id'";

if($db->exec($query)){
    header("Location:index.php"); 
}
else {
    
    echo "error in query ....";
}
?>