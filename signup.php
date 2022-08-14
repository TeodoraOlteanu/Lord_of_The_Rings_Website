<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="project.css">
</head>
<body>
    <div class="header">
        <h3 class>Register</h3>
    </div>

        <form action="signup.php" method="post" class="form">
        <?php  if (count($errors) > 0) : ?>
            <div class="error">
  	    <?php foreach ($errors as $error) : ?>
  	        <p><?php echo $error ?></p>
  	    <?php endforeach ?>
        </div>
        <?php  endif ?>

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
            <label for="passwordConf">Confirm Password</label>
            <input type="password" name="passwordConf">
        </div>

        <div class="input-group">
            <button type="submit" name="signup-btn" class="btn">Sign Up</button>
        </div>

        <p>Already a member? <a href="login.php">Sign In</a></p>

        </form>
</body>
</html>

