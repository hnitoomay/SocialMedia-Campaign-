<!DOCTYPE html>
<html lang="en">
<?php
include 'dbconnect.php';
?>
<?php
$currentPage = 'legislation.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legislation</title>
    <link rel="stylesheet" href="styles.css" class="rel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
    <header>
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
    </header>
    <section class="home-page">
        <h2>Welcome to Our Social Media Campaign</h2>
        <p>Learn about Legislation and laws to keep teenagers safe online.</p>

        <div class="parent">
            <h1>Legislation and Guidance to social media use</h1>
            <p>As concerns arise regarding the effects of social media usage on children's mental health, state legislators are introducing measures to protect children while using the internet and internet-based forms of communication, including social media.</p>
            <p>Although legislation and guidelines for best practices pertaining to the use of social media on the internet can differ between jurisdictions, many nations and organizations place emphasis on a number of universal themes and ideas.</p>

            <ul>
                <h1>Relavent Legislation</h1>
                <li>
                    <h3>Children's Online Privacy Protection Act (COPPA) in the United States</h3>
                    <p>
                        COPPA is a U.S. federal law enacted in 1998 to protect the online privacy of children under the age of 13. The law is administered by the Federal Trade Commission (FTC).
                    </p>
                </li>
                <li>
                    <h3>Age Appropriate Design Code in the United Kingdom</h3>
                    <p>
                        The Age Appropriate Design Code, introduced by the Information Commissioner's Office (ICO) in the UK, aims to protect the privacy and safety of children online. The code became enforceable on September 2, 2020.
                    </p>
                </li>
                <li>
                    <h3>Australia: Enhancing Online Safety (Children) Act 2015:</h3>
                    <p>
                        This act establishes the Office of the eSafety Commissioner, which is responsible for promoting online safety for Australian children. It addresses issues such as cyberbullying, image-based abuse, and online safety education.
                    </p>
                </li>
                <li>
                    <h3>South Korea: Youth Protection Revision Act</h3>
                    <p>
                        This legislation in South Korea focuses on protecting children and adolescents from harmful online content. It includes provisions related to age verification, restricting access to harmful content, and promoting online safety education.
                    </p>
                </li>
                <li>
                    <h3>Children's Online Privacy Protection Act (COPPA) in the United States</h3>
                    <p>
                        While GDPR is a comprehensive data protection regulation, it includes specific provisions regarding the processing of personal data of children. It requires obtaining parental consent for the processing of personal data of children under the age of 16.
                    </p>
                </li>
                <div class="line-con">
            <div class="line"></div>
        </div>
                <h1>Best Practice Guidance</h1>
                <p>The above legislations protect teenagers against Cyberbullying and Harassment,Online Safety,Content Moderation,Privacy Laws and the following are guidance to social media use</p>
                <b>For Privacy Laws</b>
                <li>
                    <p>Obtain explicit consent before collecting personal information.</p>
                </li>
                <li>
                   <p> Clearly communicate privacy policies and terms of service.</p>
                </li>
                <li>
                    <p>Implement strong security measures to protect user data.</p></li>
                    <br>
                <b>Content Moderation</b>
                <li><p>Establish clear content moderation policies.</p></li>
                <li><p>Use technology and human moderators to enforce policies.</p></li>
                <br>
                <b>Cyberbullying and Harassment</b>
                <li>
                    <p>Establish clear community guidelines prohibiting harassment.</p>
                </li>
                <li>
                    <p>Implement reporting mechanisms for users to flag inappropriate behavior.</p>
                </li>
                <li><p>Work with law enforcement when necessary.</p></li>
                
            </ul>

            <div class="screen">
                <div class="screen2">
                    <img src="images/screen6.png" alt="">
                </div>
            </div>
        </div>

       
    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 GuardianSphere. All rights reserved. | You are here: <a href="legislation.php">Legislation</a></p>
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