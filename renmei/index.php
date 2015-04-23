<?php

/* These are our valid username and passwords */
$user = 'jonny4';
$pass = 'delafoo';
$a = 'jonny4';
$b = 'delafoo';

    
    if (($a != $user) || ($b != md5($pass))) {    
        header('Location: login.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }
    


?>
 

