<?php
session_start();
unset($_SESSION['dataUser']);
header('location:../views/login.php');