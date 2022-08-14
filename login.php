<?php require 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
    
        <div class="header">
        <h3>Login</h3>
        </div>

        <form action="login.php" method="post">

        <form action="signup.php" method="post" class="form">
        <?php  if (count($errors) > 0) : ?>
            <div class="error">
  	    <?php foreach ($errors as $error) : ?>
  	        <p><?php echo $error ?></p>
  	    <?php endforeach ?>
        </div>
        <?php  endif ?>

        <div class="input-group">
            <label for="username">Username or Email</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" name="login-btn" class="btn">Login</button>
        </div>

        <p>Not yet a member? <a href="signup.php">Sign Up</a></p>

        </form>
        
    </div>
</div>

</body>
</html>