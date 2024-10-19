<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
    $email= $_SESSION['email']  ;
?>
<?php
$currentPage = 'socialmedia.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media App Setup</title>
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
    <section class="contact-container">
        <h2>Social Media App Setup Redgisteration Form</h2>   
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"> Platform</label>
                <input type="text" id="" name="platform" required>

                <label for="name"> Profile_URL</label>
                <input type="text" name="url" required>

                <label for="email">Social Media Logo</label>
                <input type="file" id="" name="file" required>

                <input class="colorbox" type="submit" value="Submit" name="submitbtn">
            </form>
        </div>

           <?php 
        if(isset($_POST['submitbtn'])){
            if(isset($_FILES['file'])){
                $filename = $_FILES['file']['name'];
                $filepath = $_FILES['file']['tmp_name'];
                $platform = $_POST['platform'];
                $url = $_POST['url'];
                
            }
            $sql = "INSERT into social_media_profiles (Profile_ID,Platform,Profile_URL,Social_Media_Logo)
                    Values ('','$platform','$url','$filename')";
            if(mysqli_query($conn,$sql)){
                //echo "successful";
                move_uploaded_file($filepath,"images/".$filename);
                
            }else{
                echo "ERROR".$sql."<br>".$conn->error;
            }
        }
    ?>

        <h2>Social Media Profiles List</h2>
        <div class="search-box">
    <form action="#" method="GET">
        <input type="text" name="search">
        <button class="search-button" name="searchbtn" type="submit">Search</button>
       
    </form>
    </div>
        <?php 
        if(isset($_GET['searchbtn'])){
            $search = $_GET['search'];
            $sql = "SELECT * from social_media_profiles where Profile_ID like '%$search%' or Platform like '%$search%' or Profile_URL like '%$search%' or Social_Media_Logo like '%$search%'";
            $result = mysqli_query($conn,$sql);
        }else{
            $sql = "SELECT * from social_media_profiles";
            $result = mysqli_query($conn,$sql);
        }
        ?>
    
        <table id="customers">
            <tr>
                <th>Profile_ID</th>
                <th>Platform</th>
                <th>Profile_URL</th>
                <th>Social_Media_Logo</th>
                <th>Action</th>
            </tr>
            <?php 
                while ($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['Profile_ID']; ?></td>
                    <td><?php echo $row['Platform']; ?></td>
                    <td><?php echo $row['Profile_URL']; ?></td>
                    <td><img src="<?php echo "images/". $row['Social_Media_Logo']; ?>" width="100px" height="100px"></td>
                    <td>
                        <a href="socialmediaedit.php?ID=<?php echo $row['Profile_ID']; ?>">Edit</a>|
                        <a href="socialmediadelete.php?ID=<?php echo $row['Profile_ID']; ?>">Delete</a>
                    </td>
                </tr>
            <?php 
                }
            ?>
        </table>
    </section>
  <br><br><br> <br><br><br>
  <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="socialmedia.php">Social Media Profile</a></p>
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
