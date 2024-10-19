<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
$currentPage = 'information.php';
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
    
        <nav>
            <ul>
            <li <?php echo ($currentPage == 'home.php') ? 'class="active"' : ''; ?>>
            <a href="home.php">Home</a>
            </li>
            <li <?php echo ($currentPage == 'information.php') ? 'class="active"' : ''; ?>>
            <a href="information.php">Information</a>
            </li>
            <li <?php echo ($currentPage == 'contact.php') ? 'class="active"' : ''; ?>>
            <a href="contact.php">Contact</a>
            </li>
            <li <?php echo ($currentPage == 'legislation.php') ? 'class="active"' : ''; ?>>
            <a href="legislation.php">Legislation</a>
            </li>
                
            </ul>
        </nav>
    
    <section class="home-page">
        <h2>Welcome to Our Social Media Campaign</h2>
        <p>Stay with GuardianSphere By Heart<i class="bi bi-heart-fill"></i></p>

    
        
        <div class="blog-con">
            <div class="blog1">
                <div class="blog2">
                <img src="images/back.png" alt="">
                <h2>Background</h2>
                </div>
                <p>SMC was founded by a team of passionate individuals with diverse backgrounds in technology, education, and psychology. The company emerged in response to the growing need for digital literacy and safety measures tailored specifically for teenagers.</p>
            </div>
            <div class="blog1">
                <div class="blog2">
                <img src="images/mission.png" alt="">
                <h2>Mission</h2>
                </div>
                <p>The mission of SMC is to empower teenagers with the knowledge they need to make informed and responsible choices in the digital realm. They have  a noble mission to provide crucial support and guidance to teenagers navigating the complexities of social media. </p>
            </div>
            <div class="blog1">
                <div class="blog2">
                <img src="images/vision.png" alt="">
                <h2>Vision</h2>
                </div>
                <p>SMC envisions a digital landscape where teenagers confidently and responsibly engage with social media, equipped with the tools to protect themselves and their peers from potential risks. The company aspires to be a global leader in digital education, setting the standard for online safety initiatives.</p>
            </div>
            <div class="blog1">
                <div class="blog2">
                <img src="images/flag.png" alt="">
                <h2>Support</h2>
                </div>
                <p>SMC create a supportive community that encourages open discussions about online challenges for teenagers. We also collaborate with educators, parents, and online platforms to enhance the overall digital well-being of teenagers and to reduce cyber-bullying.</p>
            </div>
            <div class="blog1">
                <div class="blog2">
                <img src="images/blog.png" alt="">
                <h2>Service</h2>
                </div>
                <p>SMC takes a multi-faceted approach to support teenagers in their online journeys. The company offers a  range of informative articles, engaging videos, and interactive workshops that cover topics such as cyberbullying prevention, privacy protection, and the responsible use of social media platforms.</p>
            </div>
        </div>

        <div class="blog-con">
        <div class="blog1">
                <div class="blog2">
                <img src="images/member.png" alt="">
                <h2>Membership</h2>
                </div>
                <p>As part of its commitment to ongoing engagement, SMC features a membership section on its website. Here, teenagers can register to become part of a supportive community. Members gain access to exclusive content, participate in forums, and, importantly, sign up for a monthly newsletter. </p>
            </div>
        </div>
            


    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="information.php">Information</a></p>
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
