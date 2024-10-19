<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
    $email= $_SESSION['email'];
?>
<?php
$currentPage = 'popular-apps.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css" class="rel">
</head>
<body>
    <div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
    <header>
        <nav>
            <ul>
            <li <?php echo ($currentPage == 'loginhome.php') ? 'class="active"' : ''; ?>>
            <a href="loginhome.php">Home</a>
            </li>
            <li <?php echo ($currentPage == 'logininfo.php') ? 'class="active"' : ''; ?>>
            <a href="logininfo.php">Information</a>
            </li>
            <li <?php echo ($currentPage == 'popular-apps.php') ? 'class="active"' : ''; ?>>
            <a href="popular-apps.php">Popular Apps</a>
            </li>
            <li <?php echo ($currentPage == 'loginnewsletter.php') ? 'class="active"' : ''; ?>>
            <a href="loginnewsletter.php">Newsletter</a>
            </li>
            <li <?php echo ($currentPage == 'parents-help.php') ? 'class="active"' : ''; ?>>
            <a href="parents-help.php">How Parents Can Help</a>
            </li>
            <li <?php echo ($currentPage == 'livestreaming.php') ? 'class="active"' : ''; ?>>
            <a href="livestreaming.php">Livestreaming</a>
            </li>
            <li <?php echo ($currentPage == 'logincontact.php') ? 'class="active"' : ''; ?>>
            <a href="logincontact.php">Contact</a>
            </li>
            <li <?php echo ($currentPage == 'loginguide.php') ? 'class="active"' : ''; ?>>
            <a href="loginguide.php">Legislation</a>
            </li>
            <li <?php echo ($currentPage == 'logout.php') ? 'class="active"' : ''; ?>>
            <a href="login.php">Logout</a>
            </li>
            </ul>
        </nav>
    </header>
    <section class="home-page">
        <h2>Welcome to Our Social Media Campaign</h2>
        <p>Learn about popular social media app</p>

        
        
        <h2>Popular Social Media App </h2>
        <!-- Sample Web Services -->
        <div class="service-container">
        <?php
            $ssql="SELECT * from social_media_profiles";
            $result=$conn->query($ssql);
            if($result->num_rows > 0)  
            {
            while($row = $result->fetch_assoc()) {
            ?>
            
            <!-- Web Service 1 -->
            <div class="service-card1">
                
                <div class="service-info2">
                    
                   <p><a href="<?php echo $row['Profile_URL']; ?>"> <img src="<?php echo "images/". $row['Social_Media_Logo']; ?>" alt="Web Service 1"></a></p>
                   <p><?php echo $row['Platform']; ?><a href="<?php echo $row['Profile_URL']; ?>">Learn More</a></p>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>

     
    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). | You are here: <a href="popular-apps.php">Popular App</a></p>
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
