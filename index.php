<?php 

require_once 'controllers/authController.php';
include('database_connection.php');

// verify user using token
if(isset($_GET['token']))
{
    $token = $_GET['token'];
    verifyUser($token);
}

if(!isset($_SESSION['id']))
{
    header('location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="project.css">

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
   <!-- <script src="js/bootstrap.min.js"></script>-->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
   <!-- <link href = "css/jquery-ui.css" rel = "stylesheet">-->
    <!-- Custom CSS -->
   <!-- <link href="css/style.css" rel="stylesheet"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="laborator7.js"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>


<div class="header">
    
    <?php if(isset($_SESSION['message'])): ?>
    <div class="alert <?php echo $_SESSION['alert-class']; ?>"> 
    <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        unset($_SESSION['alert-class']);
    ?> 
    </div>
    <h3>Welcome, <?php echo $_SESSION['username'];?></h3>
    <?php endif; ?>

    <a href="index.php?logout=1">Logout</a>

    <!-- if user is not verified -->
    <?php if(!$_SESSION['verified']): ?>
        <div>You need to verify your account.
            Sign in to your email account and click on
            the verification link we just emailed you at
    <strong><?php echo $_SESSION['email']; ?></strong>
    <?php endif; ?>

        </div>
    
    </div>

<h1 class="h1">Lord Of The Rings</h1>

<div id="menu"> 
  <ul>
    <li>
    <a class="link" href="gallery-pictures.html" target="_blank">Gallery</a>
  </li> 
  <li>
    <a class="link" href="information.html" target="_blank">Infos</a>
  </li>
  <li>
    <a class="link" href="posts.php" target="_blank">Posts</a>
  </li>

</ul> 
</div>

<img src="background-image.jpg" alt="image" height="600" width="1500">


<div class="footer">
<h6 class="h6">Watch the Lord of The Rings Series!</h6>
<div class="bottom-links">

<span class="watch"><a class="watch-link" href="https://vezionline.net/the-lord-of-the-rings-the-fellowship-of-the-ring-stapanul-inelelor-fratia-inelului-2001.html" target="_blank">The Fellowship of The Ring</a><br></span>
<span class="watch"><a class="watch-link" href="https://vezionline.net/the-lord-of-the-rings-the-two-towers-stapanul-inelelor-cele-doua-turnuri-2002.html" target="_blank">The Two Towers</a><br></span>
<span class="watch">
  <a class="watch-link" href="https://vezionline.net/the-lord-of-the-rings-the-return-of-the-king-stapanul-inelelor-intoarcerea-regelui-2003.html" target="_blank">The Return of The King</a><br>
</span>

</div>

</div>


<br><br><br>
   

</body>

</html>
