<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
$currentPage = 'newslettersetup.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Setup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="styles.css" class="rel">
</head>
<body>
<div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
    <header>
    
        <nav>
            <ul>
            <li <?php echo ($currentPage == 'adminhome.php') ? 'class="active"' : ''; ?>>
            <a href="adminhome.php">Admin Home</a>
            </li>
            <li <?php echo ($currentPage == 'newslettersetup.php') ? 'class="active"' : ''; ?>>
            <a href="newslettersetup.php">Newsletter Articles</a>
            </li>
            <li <?php echo ($currentPage == 'education.php') ? 'class="active"' : ''; ?>>
            <a href="education.php">Online Safety Education</a>
            </li>
            <li <?php echo ($currentPage == 'socialmedia.php') ? 'class="active"' : ''; ?>>
            <a href="socialmedia.php">Social Media Profile</a>
            </li>
            <li <?php echo ($currentPage == 'membership.php') ? 'class="active"' : ''; ?>>
            <a href="membership.php">Membership</a>
            </li>
            <li <?php echo ($currentPage == 'admincontact.php') ? 'class="active"' : ''; ?>>
            <a href="admincontact.php">Admin Contact</a>
            </li>
            <li <?php echo ($currentPage == 'webservice.php') ? 'class="active"' : ''; ?>>
            <a href="webservice.php">Web Service</a>
            </li>
            <li <?php echo ($currentPage == 'logout.php') ? 'class="active"' : ''; ?>>
            <a href="login.php">Logout</a>
            </li>
            </ul>
        </nav>
    </header>
    <?php 
        if(isset ($_GET['ID'])){
            $ID = $_GET['ID'];
            $sql = "SELECT * from newsletter_feature where NewsletterID= '$ID'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        }
    ?>
    <section class="contact-container">
        <h2>Newsletter Setup Update Form</h2>
        
      
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"> </label>
                <input type="hidden" value="<?php echo $row['NewsletterID']; ?>" id="" name="title" required>

                <label for="name"> Title</label>
                <input type="text" value="<?php echo $row['Title']; ?>" id="" name="title" required>

                <label for="name"> Content</label>
                <input type="text" value="<?php echo $row['Content']; ?>" name="content" required>

                <label for="email">Publication Date</label>
                <input type="date" value="<?php echo $row['Publication_Date']; ?>" id="" name="date" required>

                <label for="email">Subscribers</label>
                <input type="text" value="<?php echo $row['Subscribers']; ?>" id="" name="sub" required>

                <label for="email">User ID</label>
                <input type="text" value="<?php echo $row['User_ID']; ?>" id="" name="user" required>

                <label for="email">Subscription Status</label>
                <input type="text" value="<?php echo $row['Subscription_Status']; ?>" id="" name="status" required>

                <input class="colorbox" type="submit" value="Update" name="updatebtn">
            </form>
        </div>
        <?php        
        if(isset($_POST['updatebtn'])){           
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = $_POST['date'];
            $sub = $_POST['sub'];
            $user = $_POST['user'];
            $status = $_POST['status'];   
            $sql = "UPDATE newsletter_feature set  Title='$title',Content='$content',Publication_Date='$date',Subscribers='$sub',User_ID='$user',Subscription_Status='$status'
                    where NewsletterID= '$ID'";
            if(mysqli_query($conn,$sql)){
                echo "update successful!";
                header ("location:newslettersetup.php");
            }else{
              echo "ERROR".$sql."<br>".$conn->error;
            }
        
    }
   ?> 
    </section>
  <br><br><br> <br><br><br> 
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltds). All rights reserved. | You are here: <a href="newsletteredit.php">Newsletter</a></p>
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
