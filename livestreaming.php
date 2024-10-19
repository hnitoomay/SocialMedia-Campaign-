<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
    $email= $_SESSION['email'];
?>
<?php
$currentPage = 'livestreaming.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestreaming</title>
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
        <p>Learn about how to livestream in a safe environment to keep teenagers safe online.</p>

       
        
        <div class="parent">
            <h1>Livestreaming and Safety</h1>
            <p>Livestreaming, also known as 'going live' is the broadcasting of live video over the internet to an audience in real-time.</p>
            <p>Unlike video chat services such as Skype, the videos can be watched by many people who can interact with the presenter with comments or reactions. All that is needed is access to the internet, a camera, and a platform (such as a website or app) from which to livestream. Some platforms allow several people to livestream at the same time.</p>
            <p>Popular livestreaming platforms include <b>YouTube, TikTok, Facebook Live, Instagram Live, Houseparty,</b> and <b>Twitch TV</b>.</p>
            
            <div class="screen">
                <div class="screen3">
                    <img src="images/live1.png" alt="">
                </div>
                <div class="screen3">
                    <img src="images/live2.png" alt="">
                </div>
                <div class="screen3">
                    <img src="images/live3.png" alt="">
                </div>
                <div class="screen3">
                    <img src="images/live4.png" alt="">
                </div>
              
            </div>
                <h1>What are the online risks of livestreaming?</h1>
                <ul>
                    <li><p>As livestreaming happens in real-time, teenagers may feel pressured to act in a certain way to ensure that viewers keep watching. It can also increase the risk of children acting on impulse.</p></li>
                    <li><p>As most livestreaming is public, anyone can view it and comment. This means that some viewers may leave offensive or inappropriate comments on their feeds.</p></li>
                    <li><p>We also need to be aware of our digital footprint. Anything that a live streamer does or says can be recorded by their viewers and shared more widely across other networks without knowledge or consent.</p></li>
                    <li><p>Some teenagers may also view age-inappropriate content as well as sexual or violent content particularly if they are watching other people's livestreams.</p></li>
                </ul>
            
                <h1>Top Tips to livestream in a safe environment</h1>
            <ul>
                <li>
                    <h3>Password-Protection</h3>
                    <p>
                    Password protection is one of the most basic ways to protect your live streams. With password protection in place, viewers must enter a unique password to access your broadcast, which can prevent unauthorized access and keep your content secure.
                    </p>
                </li>
                <li>
                    <h3>Secure Content</h3>
                    <p>
                    Encryption scrambles your data, making it unreadable to anyone who does not have the encryption key. So, even if someone intercepts your live stream data, they won't understand it without the key. To implement content encryption on your website, you may want to use a streaming script or software that supports encryption.
                    </p>
                </li>
                <li>
                    <h3>Geo-Blocking</h3>
                    <p>
                    Geo-blocking is a security that allows you to restrict access to your live streams based on geographic location. This way, you can prevent unauthorized access and ensure your streams are only available to your target audience. This can be especially useful if you're broadcasting sensitive or exclusive content, like a private company event or a high-profile product launch. Geo-blocking can be implemented through your streaming platform or third-party software.
                    </p>
                </li>
                <li>
                    <h3>Monitor Comments</h3>
                    <p>
                    Regularly check and moderate comments to prevent the spread of inappropriate content or cyberbullying. Create a supportive community by fostering positive communication among your viewers.
                    </p>
                </li>
                
            </ul>
            <div class="screen">
                <div class="screen2">
                    <img src="images/live5.png" alt="">
                </div>
            </div>
        </div>

        
    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="livestreaming.php">Livestreaming</a></p>
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
