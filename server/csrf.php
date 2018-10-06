<?php
    $csrf_tokens = include './database/csrf_tokens.txt';

    if(!isset($_COOKIE['session_id'])) {
        echo "Error! Please Login!";
    } else {
        echo $csrf_tokens[$_COOKIE['session_id']];
    }
?>