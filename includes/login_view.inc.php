<?php

declare(strict_types=1);


function is_loggedin(){
    if(isset($_SESSION["user_id"])){
        
        return true;
    }
    else{
return false;    
}
}


function output_username(){
    
    if(isset($_SESSION["user_id"])){
        echo "<p>" . "You are logged in as " . htmlspecialchars($_SESSION["user_username"]) . "</p>";
        
    }
    else{
        echo "<p>" . "you're not logged in" . "</p>". "<br>";
    }
}
function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        unset($_SESSION["errors_login"]);

        echo "<br>";

        foreach($errors as $value){

            echo "<p>" . $value . "</p>";


        }
    }
    else if(isset($_GET["login"]) && $_GET['login'] == 'success'){

        echo "<p>" . "LOGIN SUSSCESS" . "</p>";

    }
}