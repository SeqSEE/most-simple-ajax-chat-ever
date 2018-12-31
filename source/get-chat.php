<?php
//Checks for https, otherwise username and password or any sensitive info will be sent in plaintext
function isSecure() {
    return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443;
}

if(isSecure()){
    include_once(dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))) . '/wp-load.php');
    
    $user = wp_get_current_user();
    if($user->ID < 1){
        echo '<h1>Login to continue</h1>';
        echo wp_login_form();
        die();
    }
    
    
}

$myfile = fopen("./logs/chat.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("./logs/chat.txt"));
fclose($myfile);
