<?php
session_start();
include("Login.php");

$login = new Login(null,null,null);

$login->logout();

header("Location: ../login.php");

?>