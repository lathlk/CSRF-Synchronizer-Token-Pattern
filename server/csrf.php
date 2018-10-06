<?php
    $csrf_tokens = include './database/csrf_tokens.txt';

    // Return the csrf token based on the session id
    if(!isset($_COOKIE['session_id'])) {
        echo "Error! Please Login!";
    } else {
        echo $csrf_tokens[$_COOKIE['session_id']];
    }
?>