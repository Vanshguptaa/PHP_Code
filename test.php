<?php
session_start();
$_SESSION['name'] = 'John';
echo $_SESSION['name'];
?>