<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$email= $_SESSION['email'];
?>
<?php
$currentPage = 'logincontact.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css" class="rel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <a href="loginguide.php">Logout</a>
            </li>
             
            </ul>
        </nav>
    </header>

    <section class="contact-container2">
        <h2>Contact Us</h2>
        <p>If you have any questions or concerns, feel free to reach out to us using the form below.</p>

        <div class="contact-form">
            <form>
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="logincontact.php">Contact Us</a></p>
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
