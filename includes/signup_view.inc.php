<?php
declare(strict_types=1);

function check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){

        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        unset($_SESSION['errors_signup']);

        foreach($errors as $error){
            echo '<p>' . $error . "<p>";
        } 
        }

    else if(isset($_GET["signup"]) && $_GET['signup'] == 'success'){

        echo "<br>";

        echo "<p>" . "SIGNUP SUSSCESS" . "<p>";



    }

}
