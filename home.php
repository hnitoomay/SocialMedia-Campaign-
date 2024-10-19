<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
   // Check if the form is submitted
   if (isset($_POST['morebtn'])) {
        // Check if the user is logged in
        if (!isset($_SESSION['email'])) {
            // User is not logged in
            // You can redirect them to the login page or show a login form
            header("Location: login.php");
            exit();
        }
        else
        {
            header("Location: loginhome.php");
            exit();
        }
    }
?>
<?php
$currentPage = 'home.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css" class="rel">
</head>
<body>
   
    <div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
        
    <header>
        <nav>
        
            <ul >
            <li <?php echo ($currentPage == 'home.php') ? 'class="active"' : ''; ?>>
            <a href="home.php">Home <i class="bi bi-caret-down-fill"></i></a>
                <ul class="drop">
                    <li><a href="#content">Online Safety</a></li>
                    <li><a href="#web">Web Service</a></li>
                    <li><a href="#teen">Teen Brain</a></li>
                </ul>
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
        <p>Learn about the risks and how to keep teenagers safe online.</p>

        <!-- New features -->
        <form class="search-bar">
            <input class="search-input" type="text" placeholder="Search...">
            <button class="search-button" type="submit">Search</button>
        </form>
        <div class="slider">
        <h2></h2>
                <div class="w3-content w3-section">                   
                    <img class="mySlides" src="images/12.jpg" >
                    <img class="mySlides" src="images/13.jpg" >
                    <img class="mySlides" src="images/14.jpg" >
                   
                </div>

                <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 1500); // Change image every 2 seconds
                }
                </script>
        </div>
        <div class="line-con">
            <div class="line"></div>
        </div>
        <h2>Video explanation about Online Safety</h2>
        <div class="service-container">
           
            <div class="service-card1">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/qtJNRxMRuPE" frameborder="0" allowfullscreen></iframe>
                    <p><b>Ways of using Social Media</b></p> 
            </div>
            <div class="service-card1">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/VpVS8lKSCbo" frameborder="0" allowfullscreen></iframe>
                    <p><b>About Privacy setting</b></p>
            </div>
            <div class="service-card1">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/NqlTOOY9CIo" frameborder="0" allowfullscreen></iframe>
                    <p><b>Keep you child safe online</b></p> 
            </div>
          
            <div class="service-card1">
                <iframe class="youtube-video" src="https://www.youtube.com/embed/HxySrSbSY7o" frameborder="0" allowfullscreen></iframe>
                    <p><b>Social safety Tips</b></p>
            </div>
           
        </div>
        <div class="line-con">
            <div class="line"></div>
        </div>
        <h2 id="content">Online Safety Education</h2>
        <div class="service-container">
            <?php
                $ssql="SELECT * from educational_content";
                $result=$conn->query($ssql);
                if($result->num_rows > 0)  
                {
                while($row = $result->fetch_assoc()) {
            ?>
            
            <!-- Web Service 1 -->
            <div class="service-card">
                
            <img src="<?php echo "images/".$row['Images_And_Multimedia']; ?>" alt="Web Service 1">
               
               <div class="service-info">
                    <h3><?php echo $row['Article_Title']; ?></h3>
                    <p><?php echo $row['Article_Content']; ?></p>
                    <p ><b>Category:</b><?php echo $row['Article_Title']; ?></p>
                    <p ><b>Publication Date:</b><?php echo $row['Publication_Date']; ?></p>
                    <!-- <a href="#">Learn More</a> -->
                    <form action="#" method="POST">
                        <input class="pizza" type="submit" name="morebtn" value="See More">
                    </form>
                </div>
              
            </div>
            <?php
                    }
                }
            ?>
        </div>
       
        <h2 id="web">Web Service</h2>
        <!-- Sample Web Services -->
        <div class="web-service">
        <?php
            $ssql="SELECT * from web_service";
            $result=$conn->query($ssql);
            if($result->num_rows > 0)  
            {
            while($row = $result->fetch_assoc()) {
            ?>
            
            <!-- Web Service 1 -->
            <div class="service-item">
            <div class="img-div"><img src="<?php echo "images\\".$row["Picture"];?>" alt="Web Service 1"></div>
                <div class="service-info1">
                    <h3><?php echo $row['Title']?></h3>
                    <p><?php echo $row['Content']?></p>
                    <p class="p1"><b><?php echo $row['Info']?></b></p>
                    <!-- <a href="#">Learn More</a> -->
                    <form action="#" method="POST">
                        <input type="submit" name="morebtn" value="See More">
                    </form>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
        <div class="line-con">
            <div class="line"></div>
        </div>
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
                    <p><?php echo $row['Platform']; ?></p>
                    <form action="#" method="POST">
                        <input class="social" type="submit" name="morebtn" value="See More">
                    </form>
                    
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
       
        <h2 id="teen">The Teen Brain and Social Media</h2>
            <div class="side-content">
                    <div class="illustration">
                        <img src="./images/brain1.png" alt="This is brain">
                    </div>
                <div class="text">
                    <p><b>
                   " Over the course of three years, the researchers looked at the brain activity of teens who habitually checked social media against those who didn't and found changes in the areas of the brain associated with social rewards and punishments.
                    It's too early to say if social media was the only cause of these changes, but it does suggest that more studies are needed to better understand brain development in the age of social media."
                    </p></b>
                 </div>
              
            </div>
                    <div class="litag">
                         <div class="lili">
                         <ul>
                            <p><b>Tips for Healthy Teen Brain</b></p>
                            <li><p>To keep a healthy balance with real-world activities, limit your screen time.</p></li>
                            <li><p>Be cautious about sharing personal information online to protect your privacy.</p></li>
                            <li><p>Practice kindness and respect in online interactions to promote a positive online community.</p></li>
                            <li><p>Stay informed about online safety measures and use privacy settings on social media platforms.</p></li>
                            <li><p>Take regular breaks from social media to reduce stress and improve mental well-being.</p></li>
                        </ul>
                         </div>
                    </div>
        <!-- Category Navigation -->
       
    </section>
    <br><br><br>
    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Guardiansphere (SMC Ltd.). All rights reserved. | You are here: <a href="home.php">Home</a></p>
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
