<?php
 include 'dbconnect.php';
 $ID = $_GET['ID'];
 $sql = "DELETE from educational_content where Article_ID='$ID'";
 $result = mysqli_query($conn,$sql);
 echo  'deleted';
header("location:education.php");
?>