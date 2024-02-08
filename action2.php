<?php
    include 'conn.php';

   if(isset($_GET['id'])){
    $id= $_GET['id'];
    echo $id;
    $sql= "DELETE FROM `task` WHERE `id` = $id ";
    $conn->query($sql);
    header("Location: index.php");
   }
 
?>

