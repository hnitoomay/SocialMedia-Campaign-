<!DOCTYPE html>
<html lang="en">

    <?php 

        include('dbconnect.php');

        session_start();
        if(isset($_SESSION['attempt_again'])){
        $now = time();
        if($now >= $_SESSION['attempt_again']){
            unset($_SESSION['attempt']);
            unset($_SESSION['attempt_again']);
            unset($_SESSION['msg']);
        }
        }

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles.css" class="rel">
</head>
<body> 
    <div class="logo-div"><img class="logo" src="images/icons/logo.png" alt="Logo"></div>
    <section class="contact-container2">
        <h2>Login Form</h2>
        <?php
            if(isset($_SESSION['msg']))
            {
        ?>
        <div class="alert alert-danger">
            <?php 
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
            ?>
        </div>
        <?php
            }
        ?>
        <div class="contact-form">
        <form action="login-success.php" method="POST">
                <label for="username">Email:</label>
                <input type="text" id="username" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <div class="btn-box">
                <input type="submit" value="Login" class="blue-button" >
               </div>
            </form>
            Not a Member? <a href="register.php">Register Here</a>
        <?php
        if(isset($_SESSION['check']) == 1)
        {
        ?>
          <a class="reset" href="logout.php">Reset</a>
        <?php
        }
        ?>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="login.php">Login</a></p>
        <div class="social-media-buttons">
            <a href="https://www.facebook.com/login/" target="_blank" title="Follow us on Facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://twitter.com/login" target="_blank" title="Follow us on Twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.pinterest.com/login/" target="_blank" title="Follow us on Pinterest"><i class="bi bi-pinterest"></i></a>
            <a href="https://www.instagram.com/accounts/login/" target="_blank" title="Follow us on Instagram"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
