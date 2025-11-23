<?php
require_once 'includes/config_session.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Log in System</title>
</head>
<body>
    <h3>Login</h3>

    <form action="login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>

    </form>

    <h3>Sign Up</h3>

    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Sign up</button>



    </form>

    <?php
    check_signup_errors();
    ?>
    
</body>
</html>