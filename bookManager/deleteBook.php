<?php
    require_once '../connection.php';
    $id = $_GET['sid'];
    $deletesql = "DELETE FROM sach WHERE MaSach ='$id'";
    if(mysqli_query($conn,$deletesql)){
        header("location: bookView.php");
    }
    
