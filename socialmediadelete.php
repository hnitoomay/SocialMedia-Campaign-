<?php
    include 'dbconnect.php';
    $ID = $_GET['ID'];
    $sql = "DELETE from social_media_profiles where Profile_ID='$ID'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    echo  'deleted';
    header("location:socialmedia.php");
?>