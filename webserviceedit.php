<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
$currentPage = 'webservice.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Service</title>
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
        if(isset($_GET['ID'])){
            $ID = $_GET['ID'];
            $ssql= "SELECT * from web_service where ID = '$ID' ";
            $result = $conn->query($ssql);
            $row = $result->fetch_assoc();
        }
    ?>
    <section class="contact-container">
        <h2>Web Service Update Form</h2>
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"></label>
                <input type="hidden" value="<?php echo $row['ID']; ?>" id="" name="ID" required>
                <label for="name"> Title</label>
                <input type="text" value="<?php echo $row['Title']; ?>" id="" name="title" required>
                <label for="name"> Content</label>
                <textarea name="content" value="<?php echo $row['Content']; ?>" id="" cols="30" rows="10"></textarea>

                <label for="name">Picture Image</label>
                <input type="file" value="<?php echo $row['Picture']; ?>" id="c" name="s_pic" required>

                <label for="name">Info</label>
                <input type="text" value="<?php echo $row['Info']; ?>" id="" name="info" required>

                <input class="colorbox" type="submit" value="Update" name="btn_update">
            </form>
        </div>

        <?php
        if(isset($_POST['btn_update']))
        {

            if(isset($_FILES['s_pic']) && $_FILES['s_pic']['error'] == 0)
            {
                $filename = $_FILES['s_pic']['name'];
                $filepath = $_FILES['s_pic']['tmp_name'];
            
                $title = $_POST['title'];
                $content = $_POST['content'];
                $info = $_POST['info'];
                 $sql = "UPDATE web_service set Title='$title', Content='$content',  Picture='$filename', Info='$info'  where ID ='$ID'";
          
                //querying
                if($conn->query($sql) == True){
                    echo "Update Row Successful";
                    move_uploaded_file($filepath,"images/".$filename);
                    header("location:webservice.php");
                }
                else
                {
                    echo "ERROR".$sql."<br>".$conn->error;
                }
            }
        }  
    ?>
   
    </section>
  <br><br><br> <br><br><br>
  
    
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="webservice.php">Web Service</a></p>
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
