<?php
session_start();
if(isset($_SESSION['admin'])) {
    header('location: /pages/dashboard.php');
} else { 
    header('location: /auth/login.php');
}

