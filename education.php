<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
?>
<?php
$currentPage = 'education.php';
session_start();
$email= $_SESSION['email']  ;
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
        <h2>Online Safety Education Data Setup</h2>      
        <h2>Registration Form</h2>
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name">Article Title</label>
                <input type="text" id="" name="articletitle" required>
                <label for="name">Article Content</label>
                <textarea name="articlecontent" id="" cols="30" rows="10"></textarea>
                <label for="email">Category/Topic</label>
                <input type="text" id="c" name="category" required>

                <label for="name">Author</label>
                <input type="text" id="" name="author" required>

                <label for="name">Publication Date</label>
                <input type="date" id="" name="publication" rows="10" required>

                <label for="file">Images and Multimedia</label>
                <input type="file" id="" name="file1" rows="10" required>

                <label for="text">Article Status</label>
                <input type="text" id="message" name="articlestatus" rows="10" required>

                <label for="text">User Ratings and Feedback</label>
                <input type="text" id="message" name="rating" rows="10" required>

                <input class="colorbox" type="submit" value="Submit" name="submitbtn">
            </form>
        </div>

        <?php 

    if(isset($_POST['submitbtn'])){
        if(isset($_FILES['file1'])){

        $filename = $_FILES['file1']['name'];
        $filepath = $_FILES['file1']['tmp_name'];

        $articletitle = $_POST['articletitle'];
        $articlecontent = $_POST['articlecontent'];
        $category = $_POST['category'];
        $author = $_POST['author'];
        $publication = $_POST['publication'];
        $articlestatus = $_POST['articlestatus'];
        $rating = $_POST['rating'];

        $sql = "INSERT into educational_content (Article_ID,Article_Title,Article_Content, Category, Author, Publication_Date, Images_And_Multimedia, Article_Status, User_Ratings_And_Feedback)
        Values (Null, '$articletitle','$articlecontent','$category','$author','$publication','$filename','$articlestatus', '$rating')";

        if(mysqli_query($conn,$sql)){
            echo "successful!";
            move_uploaded_file($filepath,"images/".$filename);
            //header ("Location:educationtable.php");
        }else{
          echo "ERROR".$sql."<br>".$conn->error;
        }
      }
    }
   ?>
   
   <h2>Article List</h2>
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
        $sql = "SELECT * from educational_content where Article_ID like '%$search%'or Article_Title like '%$search%' or Article_Content like '%$search%' or Category like '%$search%' or Author like '%$search%'or  Publication_Date like '%$search%' or Images_And_Multimedia like '%$search%' or Article_Status like '%$search%' or User_Ratings_And_Feedback like '%$search%' ";
        $result = mysqli_query($conn,$sql);
    }else {
        $sql = "SELECT * from educational_content";
        $result = mysqli_query($conn,$sql);
    }
    ?>
    <table id="customers">
        <tr>
            <th>Article_ID</th>
            <th>Article_Title</th>
            <th>Article_Content</th>
            <th>Category</th>
            <th>Author</th>
            <th>Publication_Date</th>
            <th>Images_And_Multimedia</th>
            <th>Article_Status</th>
            <th>User_Ratings_And_Feedback</th>
            <th>Action</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                    <td><?php echo $row['Article_ID'];?></td>
                    <td><?php echo $row['Article_Title']; ?></td>
                    <td><?php echo $row['Article_Content']; ?></td>
                    <td><?php echo $row['Category']; ?></td>
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Publication_Date']; ?></td>
                    <td><img src="<?php echo "images/".$row['Images_And_Multimedia']; ?>" width="100px" height="100px"></td>
                    <td><?php echo $row['Article_Status']; ?></td>
                    <td><?php echo $row['User_Ratings_And_Feedback']; ?></td>
                    <td>
                        <a href="educationedit.php?ID=<?php echo $row['Article_ID'];?>">Edit</a>|
                        <a href="educationdelete.php?ID=<?php echo $row['Article_ID'];?>">Delete</a>
                    </td>
             
                </tr>
        <?php
            }
        ?>
    </table>
    </section>
  <br><br><br> <br><br><br>
  <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="education.php">Online Safety Education</a></p>
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
