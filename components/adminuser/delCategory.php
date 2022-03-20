<?php 
    $getID=$_GET['id'];
    $query ="delete from category where id='$getID'";
    query($query);
     $page = 'dashboard.php?page=addCategory&err=0&msg4=Success';
     header('Location: '.$page);
?>