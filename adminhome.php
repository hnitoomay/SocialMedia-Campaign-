<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
    session_start();
    $email= $_SESSION['email']  ;
 ?>
<?php
$currentPage = 'adminhome.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign</title>
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
    <section>
    <h2>"Welcome to the Admin Dashboard. "</h2>
    <h2>**Manage campaigns, monitor user activity, and keep social media safe. Your tools await you!**</h2>
    <div class="admin-home-container">
        <!-- Newsletter Articles Section -->  
      <div class="admin-section">
            <div class="img1"><img src="./images/news.png" alt=""></div>
           <div class="text1">
           <h3>Newsletter Articles</h3>
           <a href="newslettersetup.php"><p><b>Manage and create newsletter articles here.<i class="bi bi-arrow-right-circle"></i></b></p></a>
            
           </div>
           
        </div>
       
       <div class="admin-section">
        <div class="img1"><img src="./images/bo.png" alt=""></div>
           <div class="text">
        
           <h3>Educational Content</h3>
            <a href="education.php"><p><b>View and create educational content here.<i class="bi bi-arrow-right-circle"></i></b></p></a>
           </div>
          
        </div>
       
        <div class="admin-section">
        <div class="img1"><img src="./images/app.png" alt=""></div>
           <div class="text">
        
           <h3>Social Media Apps</h3>
            <a href="socialmedia.php"><p><b>View and manage social media apps here.<i class="bi bi-arrow-right-circle"></i></b></p></a>
           </div>
          
        </div>

        <div class="admin-section">
        <div class="img1"><img src="./images/web.png" alt=""></div>
           <div class="text">
        
           <h3>Web Service</h3>
            <a href="webservice.php"><p><b>Create more interesting online safety service.<i class="bi bi-arrow-right-circle"></i></b></p></a>
           </div>
            <!-- Add specific functionality/content for membership users -->
        </div>
        
        <!-- Membership Users Section -->
        <div class="admin-section">
        <div class="img1"><img src="./images/mm.png" alt=""></div>
           <div class="text">
        
           <h3>Membership Users</h3>
           <a href="membership.php"> <p><b>View and manage membership users here.<i class="bi bi-arrow-right-circle"></i></b></p></a>
           </div>
            <!-- Add specific functionality/content for membership users -->
        </div>
        
        <!-- Support Information Section -->
        <div class="admin-section">
        <div class="img1"><img src="./images/con.png" alt=""></div>
           <div class="text">
           <h3>Support Information</h3>
           <a href="admincontact.php"> <p><b>Set up support information for users.<i class="bi bi-arrow-right-circle"></i></b></p></a>
           </div>
           
        </div>
    </div>
    </section>
  
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="adminhome.php">Admin Home</a></p>
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
