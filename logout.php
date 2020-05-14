<?php
session_start();
unset($_SESSSION['loginID']);
session_destroy();
header("Location: login.php");
?>