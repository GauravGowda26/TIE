<?php
define('TITLE', 'LogOut');
define('PAGE', 'logout');
 session_start();
 session_destroy();
 echo "<script> location.href='index.php'; </script>";
?>