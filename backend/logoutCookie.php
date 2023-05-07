<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {	
    unset($_COOKIE['username']);
    unset($_COOKIE['password']);
}
header('Location: ../index.php');
?> 