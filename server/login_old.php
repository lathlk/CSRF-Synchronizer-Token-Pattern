<?php
    include './database/users.php';
    include './database/sessions.php';

    if(isset($_POST['username'])){
        if($_POST['username'] == "" or $_POST['password'] == "" or $_POST['username'] == NULL or $_POST['password'] == NULL){
            header("location: ../client/index.php?error=Username or Password feilds cannot be empty.");
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            if($users[$username] === $password){
                // Start the session and generate session id and csrf token
                $session_id = uniqid();            
                $csrf_token = uniqid() . $session_id;
                $sessions[$username] = $session_id;
                $csrf_tokens[$session_id] = $csrf_token;
    
                // set session_id and username cookies
                setcookie('session_id', $session_id, time() + (86400 * 30), "/");
                setcookie('username', $username, time() + (86400 * 30), "/");
                
                header("location: ../home.php");
            }else{
                header("location: ../index.php?error=Invalid username or password! Please check the credentials and try again!");
            }
        }
    } elseif (isset($_POST['csrf_token'])){

    } else {
        if(!isset($_COOKIE['session_id'])) {
            echo "Cookie named is not set!";
        } else {
           echo $csrf_tokens[$_COOKIE['session_id']];
        }
    }

    
?>