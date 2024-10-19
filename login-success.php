<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" class="rel">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    include 'dbconnect.php';
    
    $email= $_POST['email'];
    $password= $_POST['password'];
    $admin= "admin";
    $user="user";

    $sql = "SELECT * FROM membership_section WHERE Email='$email' AND Password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Fetch the user data to array format 
        $user = $result->fetch_assoc(); 
        
        // Store the email in the session
        $_SESSION['email'] = $email;
    
        // Check if the user is admin or a regular user
        if ($user['User_Type'] == 'Admin') {
            header('location:adminhome.php');
            exit;
        } else {
            header('location:loginhome.php');
            exit;
        }
        
    }
    else{ 
            if(!isset($_SESSION['attempt'])){
                $_SESSION['attempt'] = 0;
            }
            
            $_SESSION['attempt'] += 1;
            
            if($_SESSION['attempt'] === 3){
                $_SESSION['msg'] = " 3 Times Login Failed! And Your Login is disabled wait 2 minutes ";
                $_SESSION['check'] = 1;
                $_SESSION['attempt_again'] = time() + (2*60); //1*60 = 1mins, 10*60 = 10mins
            }
            else{
                $_SESSION['msg'] = " Invalid Username and Password! ";
                
              
            }
         
            header('location:login.php');
        }
?>
</body>
</html>