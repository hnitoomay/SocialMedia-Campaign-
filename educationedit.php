<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
$currentPage = 'education.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content Form</title>
    <link rel="stylesheet" href="styles.css" class="rel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    include 'dbconnect.php';
        if(isset ($_GET['ID'])){
            $ID = $_GET['ID'];
            $sql = "SELECT * from educational_content where Article_ID= '$ID'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        }
    ?>
<section class="contact-container">
        <h2>Online Safety Education Data Setup</h2>      
        <h2>Update Form</h2>
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"></label>
                <input type="hidden" value="<?php echo $row['Article_ID'];?>" id="" name="id" required>

                <label for="name">Article Title</label>
                <input type="text" value="<?php echo $row['Article_Title']; ?>" id="" name="articletitle" required>

                <label for="name">Article Content</label>
                <textarea name="articlecontent" value="<?php echo $row['Article_Content']; ?>" id="" cols="30" rows="10"></textarea>

                <label for="email">Category/Topic</label>
                <input type="text" value="<?php echo $row['Category']; ?>" id="c" name="category" required>

                <label for="name">Author</label>
                <input type="text" value="<?php echo $row['Author']; ?>" id="" name="author" required>

                <label for="name">Publication Date</label>
                <input type="date" value="<?php echo $row['Publication_Date']; ?>" id="" name="publication"  required>

                <label for="file">Images and Multimedia</label>
                <input type="file" value="<?php echo "images/".$row['Images_And_Multimedia']; ?>"  name="file1"  required>

                <label for="text">Article Status</label>
                <input type="text" value="<?php echo $row['Article_Status']; ?>" id="message" name="articlestatus"  required>

                <label for="text">User Ratings and Feedback</label>
                <input type="text" value="<?php echo $row['User_Ratings_And_Feedback']; ?>" id="message" name="rating"  required>

                <input class="colorbox" type="submit" value="Update" name="updatebtn">
            </form>
        </div>

        <?php 

        if(isset($_POST['updatebtn'])){
            if(isset($_FILES['file1'])){
    
            $filename = $_FILES['file1']['name'];
            $filepath = $_FILES['file1']['tmp_name'];
    
            $articletitle = $_POST['articletitle'];
            $articlecontent = $_POST['articlecontent'];
            $category = $_POST['category'];
            $author = $_POST['author'];
            $publication = $_POST['publication'];
            $articlestatus = $_POST['articlestatus'];
            $rating = $_POST['rating'];
    
            $sql = "UPDATE educational_content set Article_Title='$articletitle',Article_Content='$articlecontent', Category='$category', Author='$author', Publication_Date='$publication', Images_And_Multimedia='$filename', Article_Status='$articlestatus', User_Ratings_And_Feedback='$rating' 
                    where Article_ID= '$ID'";
            if(mysqli_query($conn,$sql)){
                echo "update successful!";
                header ("location:education.php");
            }else{
              echo "ERROR".$sql."<br>".$conn->error;
            }
        }
    }
   ?>
   
 
        
    </section>
  <br><br><br> <br><br><br>
  
    
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="educationedit.php">Educational Content</a></p>
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