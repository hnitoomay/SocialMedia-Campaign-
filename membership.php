<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
    $email= $_SESSION['email']  ;
?>
<?php
$currentPage = 'membership.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
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
   <h2>Membership List</h2> 
    <div class="search-box">
    <form action="#" method="GET">
        <input type="text" name="search">
        <button class="search-button" name="searchbtn" type="submit">Search</button>
       
    </form>
    </div> 

    <?php 
    include 'dbconnect.php';

    if(isset($_GET['searchbtn'])){
        $search = $_GET['search'];
        $sql = "SELECT * from membership_section where User_ID like '%$search%'or Username like '%$search%' or Email like '%$search%' or Password like '%$search%' 
        or Full_Name like '%$search%'or  Date_Of_Birth like '%$search%' or Registration_Date like '%$search%' or Subscription_Status like '%$search%' or Newsletter_Subscription like '%$search%' or Profile_Image like '%$search%' or User_Type like '%$search%' ";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    }else {
        $sql = "SELECT * from membership_section";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    }
    ?>
    <table id="customers">
        <tr>
            <th>User_ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Full_Name</th>
            <th>Date_Of_Birth</th>
            <th>Registration_Date</th>
            <th>Subscription_Status</th>
            <th>Newsletter_Preferences</th>
            <th>Profile</th>
            <th>User_Type</th>
            <th>action</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                    <td><?php echo $row['User_ID'];?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Full_Name']; ?></td>
                    <td><?php echo $row['Date_Of_Birth']; ?></td>
                    <td><?php echo $row['Registration_Date']; ?></td>
                    <td><?php echo $row['Subscription_Status']; ?></td>
                    <td><?php echo $row['Newsletter_Subscription']; ?></td>
                    <td><img src="<?php echo "images/".$row['Profile_Image']; ?>" width="100px" height="100px"></td>                   
                    <td><?php echo $row['User_Type']; ?></td>
                    <td>
                        <a href="Membershipedit.php?ID=<?php echo $row['User_ID'];?>">Edit</a>|
                        <a href="Membershipdelete.php?ID=<?php echo $row['User_ID'];?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    </section>
  <br><br><br> <br><br><br>   
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="membership.php">Membership</a></p>
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
