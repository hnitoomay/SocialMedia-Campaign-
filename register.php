<!DOCTYPE html>
<html lang="en">
<?php
include 'dbconnect.php';
// $currentPage = 'contact.php';
// session_start();
// $email=$_SESSION['email']  ;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Registration</title>
    <link rel="stylesheet" href="styles.css" class="rel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
    
    <div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
  

    <section class="contact-container2">
        <h2>Membership Registration</h2>
      

        <div class="contact-form">
            <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">User Name</label>
                <input type="text" id="" name="username" required>

                <label for="name">Email</label>
                <input type="text" name="email" id="" cols="30" rows="10" required>

                <label for="email">Password</label>
                <input type="password" id="c" name="password" required>

                <label for="name">Full Name</label>
                <input type="text" id="" name="fullname" required>

                <label for="name">Date of Birth</label>
                <input type="date" id="" name="birth" rows="10" required>

                <label for="date">Registration Date</label>
                <input type="date" id="" name="regdate" rows="10" required>

                <label for="text">Subscription Status</label>
                <input type="text" id="message" name="status" rows="10" required>

                <label for="text">Newsletter Subscription</label>
                <input type="text" id="message" name="letter" rows="10" required>

                <div class="div-file">  
                <label for="file">Profile Image</label>
               <input type="file"  id="message" name="profile" rows="10" required>
               </div>
                
                <div class="btn-box">
                <input type="submit" value="Submit" class="blue-button" name="submitbtn">
               </div>
                
            </form>
            <?php 
    if(isset ($_POST['submitbtn'])){
       if(isset($_FILES['profile'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $birth = $_POST['birth'];
        $regdate = $_POST['regdate'];
        $status = $_POST['status'];
        $letter = $_POST['letter'];
        $type = $_POST['type'];
        
        $filename = $_FILES['profile']['name'];
        $filepath = $_FILES['profile']['tmp_name'];

        $sql = "INSERT into membership_section (User_ID,Username,Email,Password,Full_Name,Date_Of_Birth,Registration_Date,Subscription_Status,Newsletter_Subscription,Profile_Image,User_Type)
                Values('','$username','$email','$password','$fullname','$birth','$regdate','$status','$letter','$filename','User')";
        if(mysqli_query($conn,$sql)){
            echo "successful";
            move_uploaded_file($filepath,"images/".$filename);
            header('location:login.php');
        }else{
            echo "ERROR".$sql."<br>".$conn->error;
        }

    }
    }
    ?>  
        </div>
    </section>

  
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="contact.php">Contact</a></p>
        <div class="social-media-buttons">
            <a href="https://www.facebook.com/login/" target="_blank" title="Follow us on Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com/login" target="_blank" title="Follow us on Twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.pinterest.com/login/" target="_blank" title="Follow us on Pinterest"><i class="bi bi-pinterest"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank" title="Follow us on Instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>
    <script>
     window.addEventListener('scroll', function() {
    var logoDiv = document.querySelector('.logo-div');
    var nav = document.querySelector('nav');

    if (window.scrollY >= logoDiv.offsetHeight) {
        nav.style.position = 'fixed';
        nav.style.top = '0';
        logoDiv.style.marginBottom = nav.offsetHeight + 'px';
    } else {
        nav.style.position = 'static';
        logoDiv.style.marginBottom = '0';
    }
});
   </script>
</body>
</html>
