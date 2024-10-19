<!DOCTYPE html>
<html lang="en">
<?php 
    include 'dbconnect.php';
    session_start();
    $email= $_SESSION['email'] ;
?>
<?php
$currentPage = 'webservice.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Service</title>
   <link rel="stylesheet" href="styles.css" class="rel">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <h2>Web Service Redgisteration Form</h2>        
        <div class="contact-form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="name"> Title</label>
                <input type="text" id="" name="title" required>

                <label for="name"> Content</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>

                <label for="email">Picture Image</label>
                <input type="file" id="c" name="s_pic" required>

                <label for="name">Info</label>
                <input type="text" id="" name="info" required>


                <input class="colorbox" type="submit" value="Submit" name="submitbtn">
            </form>
        </div>

        <?php 

    if(isset($_POST['submitbtn'])){
        if(isset($_FILES['s_pic'])){

        $filename = $_FILES['s_pic']['name'];
        $filepath = $_FILES['s_pic']['tmp_name'];

        $title = $_POST['title'];
        $content = $_POST['content'];
        $info = $_POST['info'];

        $sql = "INSERT INTO web_service (ID, Title, Content, Picture, Info) 
        VALUES (NULL, '$title', '$content', '$filename', '$info')";

        //querying
        if($conn->query($sql) == True){
            //echo "Insert Row Successful";
            move_uploaded_file($filepath,"images/".$filename);
        }
        else
        {
            echo "ERROR".$sql."<br>".$conn->error;
        }

        }
    }
   ?>
   
   <h2>Web service List</h2>
   <div class="search-box">
    <form action="#" method="GET">
        <input type="text" name="search">
        <button class="search-button" name="searchbtn" type="submit">Search</button>
       
    </form>
    </div>
      <?php
        if(isset($_GET['searchsubmit'])){
            $search = $_GET['search'];
            $ssql = "SELECT * from web_service where Title LIKE '%$search%' OR Content LIKE '%$search%'
                    OR Info LIKE '%$search%'";
            $result = mysqli_query($conn,$ssql);
                    
        }
        else{
            $ssql = "SELECT * from web_service";
            $result = $conn->query($ssql);
        }
        ?>
            
            <table id="customers">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Profile Picture</th>
            <th>Info</th>
            <th>Action</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Content']; ?></td>
                    <td><img src="<?php echo "images/".$row['Picture']; ?>" width="100px" height="100px"></td>
                    <td><?php echo $row['Info']; ?></td>
                    
                   
              
                    <td>
                        <a href="webserviceedit.php?ID=<?php echo $row['ID'];?>">Edit</a>|
                        <a href="webservicedelete.php?ID=<?php echo $row['ID'];?>">Delete</a>
                    </td>
             
                </tr>
        <?php
            }
        ?>
    </table>  
        

    </section>
  <br><br><br> <br><br><br>
  
    
    <footer>
        <p>&copy; 2024 GuardianSphere (SMC Ltd.). All rights reserved. | You are here: <a href="webservice.php">Web Service</a></p>
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
