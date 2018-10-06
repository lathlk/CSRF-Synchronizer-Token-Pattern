<?php
$sessions = include './database/sessions.txt';
$csrf_tokens = include './database/csrf_tokens.txt';

if(isset($_COOKIE['session_id']) and isset($_COOKIE['username'])){
    unset($sessions[$_COOKIE["username"]]);
    unset($csrf_tokens[$_COOKIE["session_id"]]);
    file_put_contents('./database/sessions.txt',  '<?php return ' . var_export($sessions, true) . ';');
    file_put_contents('./database/csrf_tokens.txt',  '<?php return ' . var_export($csrf_tokens, true) . ';');    
}
header("location: ../index.php");
?>