<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
     $email=$_SESSION['email'] ;
?>
<?php
$currentPage = 'newslettersetup.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Setup</title>
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
        <h2>Newsletter Setup Redgisteration Form</h2>
        
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"> Title</label>
                <input type="text" id="" name="title" required>

                <label for="name"> Content</label>
                <input type="text" name="content" required>

                <label for="email">Publication Date</label>
                <input type="date" id="" name="date" required>

                <label for="email">Subscribers</label>
                <input type="text" id="" name="sub" required>

                <label for="email">User ID</label>
                <input type="text" id="" name="user" required>

                <label for="email">Subscription Status</label>
                <input type="text" id="" name="status" required>


                <input class="colorbox" class="colorbox" type="submit" value="Submit" name="submitbtn">
            </form>
        </div>

        <?php 
        if(isset($_POST['submitbtn'])){
           
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date = $_POST['date'];
            $sub = $_POST['sub'];
            $user = $_POST['user'];
            $status = $_POST['status'];

            $sql = "INSERT into newsletter_feature (NewsletterID,Title,Content,Publication_Date,Subscribers,User_ID,Subscription_Status)
                    Values (Null,'$title','$content','$date','$sub','$user','$status')";
            if(mysqli_query($conn,$sql)){
                echo "success";
                header('location:newslettersetup.php');
            }else{
                echo "ERROR".$sql."<br>".$conn->error;
            }

        }
    ?>

<h2>Newsletter Feature List</h2>
<div class="search-box">
    <form action="#" method="GET">
        <input type="text" name="search">
        <button class="search-button" name="searchbtn" type="submit">Search</button>
       
    </form>
    </div>
    <?php 
    if(isset($_GET['searchbtn'])){
        $search = $_GET['search'];
        $sql = "SELECT * from newsletter_feature where NewsletterID like '%$search%' or Title like '%$search%' or Content like '%$search%' or Publication_Date like '%$search%' or Subscribers like '%$search%' or User_ID like '%$search%' or Subscription_Status  like '%$search%'";
        $result = mysqli_query($conn,$sql);
    }else{
        $sql = "SELECT * from newsletter_feature";
        $result = mysqli_query($conn,$sql);
    }
    ?>
  
    <table id="customers" >
     <!-- border='1' -->
        <tr>
            <th>NewsletterID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Publication_Date</th>
            <th>Subscribers</th>
            <th>User_ID</th>
            <th>Subscription_Status</th>
            <th>Action</th>
        </tr>
        <?php 
             while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['NewsletterID'];?></td>
            <td><?php echo $row['Title'];?></td>
            <td><?php echo $row['Content'];?></td>
            <td><?php echo $row['Publication_Date'];?></td>
            <td><?php echo $row['Subscribers'];?></td>
            <td><?php echo $row['User_ID'];?></td>
            <td><?php echo $row['Subscription_Status'];?></td>
           
            <td>
                <a href="newsletteredit.php?ID=<?php echo $row['NewsletterID'];?>">Edit</a>|
                <a href="newsletterdelete.php?ID=<?php echo $row['NewsletterID'];?>">Delete</a>
            </td>
        </tr>
        <?php 
        }
        ?>
    </table>

    </section>
  <br><br><br> <br><br><br>
  
    
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="newslettersetup.php">Newsletter Articles</a></p>
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
</body>
</html>
