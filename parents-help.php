<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
   $email= $_SESSION['email'];
?>
<?php
$currentPage = 'parents-help.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Helps</title>
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
            <a href="login.php">Logout</a>
            </li>
              
            </ul>
        </nav>
    </header>
    <section class="home-page">
        <h2>Welcome to Our Social Media Campaign</h2>
        <p>Learn about the risks and how to keep teenagers safe online.</p>

       
        
        <div class="parent">
            <h1>Teaching teenagers to be smart about Social Media</h1>
            <p>Most teens and many preteens use some form of social media and have a profile on a social networking site. Many visit these sites every day.There are plenty of good things about social media — but also many risks and things kids and teens should avoid. They don't always make good choices when they post something to a site, and this can lead to problems.</p>
            <p>To help them find the balance, it's important to talk with your kids about how to use social media wisely.</p>
            <div class="screen">
                <div class="screen1">
                    <img src="images/screen1.png" alt="">
                </div>
                <div class="screen1">
                    <img src="images/screen2.png" alt="">
                </div>
                <div class="screen1">
                    <img src="images/screen3.png" alt="">
                </div>
            </div>
            <ul>
                <li>
                    <h3>Setting Internet Rules for Kids</h3>
                    <p>
                        Kids need guidelines to navigate the vast playground of the internet safely. As such, they'll need you to set rules for the basics of safe and responsible internet use. This doesn't mean use an authoritarian approach to their safety. Rather, you'll want to guard them by working with them to set the rules.
                    </p>
                </li>
                <li>
                    <h3>Be nice</h3>
                    <p>
                    Mean behavior is not OK. Make it clear that you expect your kids to treat others with respect, and to never post hurtful or embarrassing messages. And ask them to always tell you about any harassing or bullying messages that others post.
                    </p>
                </li>
                <li>
                    <h3>Think twice before hitting "enter."</h3>
                    <p>
                    Remind kids that what they post can be used against them. For example, letting the world know that you're on vacation or posting your home address gives would-be robbers a chance to strike. Kids also should avoid posting specific locations of parties or events, as well as phone numbers.
                    </p>
                </li>
                <li>
                    <h3>Use privacy settings. </h3>
                    <p>
                    Privacy settings are important. Go through them together to make sure your kids understand each one. Also, explain that passwords are there to protect them against things like identity theft. They should never share them with anyone, even a boyfriend, girlfriend, or best friend.
                    </p>
                </li>
                <li>
                    <h3>Don't make "friend" with strangers.</h3>
                    If you don't know them, don't friend them." This is a plain, simple — and safe — rule of thumb. Let them know that kids who follow friends are generally happier than those who follow strangers.
                </li>
                <li>
                    <h3>What to do if something goes wrong</h3>
                    <p>
                    If cyberbullying, harassment, or other problems happen, you or your child can report it to school staff, the social media platform, or local law enforcement. If you're worried about your child's mental health, talk to their doctor.
                    </p>
                </li>
            </ul>
            <div class="screen">
                <div class="screen2">
                    <img src="images/screen4.png" alt="">
                </div>
            </div>
        </div>


        
    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="parents-help.php">How Parent Can Help</a></p>
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
