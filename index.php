<?php
require_once 'includes/config_session.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
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
    <?php
    output_username();
    ?>
    <h3>Login</h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>

    </form>

    <?php
    check_login_errors();
    ?>

    <?php
    if(!is_loggedin()){?>
    <h3>Sign Up</h3>

    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_input();
        ?>
       
        <button>Sign up</button>



    </form>
    <?php } ?>




    <?php
    check_signup_errors();
    ?>

    <h3>Log out</h3>

     <form action="includes/logout.inc.php" method="post">
        <button>Logout</button>

    </form>
    
</body>
</html>