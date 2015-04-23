<?php
 session_start();
 session_destroy();
 header('Location: hub-login.php');
exit;
?>