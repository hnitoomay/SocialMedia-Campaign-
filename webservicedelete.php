<?php
    include 'dbconnect.php';
    $ID = $_GET['ID'];
    $sql = "DELETE from web_service where ID='$ID'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    echo  'deleted';
    header("location:webservice.php");
?>