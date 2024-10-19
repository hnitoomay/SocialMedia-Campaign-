<?php 
    include 'dbconnect.php';
    $ID = $_GET['ID'];
    $sql = "DELETE from newsletter_feature where NewsletterID='$ID'";
    $result = mysqli_query($conn,$sql);
    echo  'deleted';
    header("location:newslettersetup.php");
?>