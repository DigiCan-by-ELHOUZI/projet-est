<?php

include('conndb.php');

$uid=$_POST['id'];

$uname=$_POST['name'];

$uempers=$_POST['person'];

$uemproj=$_POST['project'];


$query="UPDATE event SET event_name ='$uname', person_id ='$uempers' , project_id = '$uemproj' WHERE event_id = '$uid'";

if($db->exec($query)){

    header("Location:index.php");  

}
else{
    echo "error in query ....";
}
?>
