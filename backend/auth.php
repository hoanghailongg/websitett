<?php
require '../config/config.php';
if (isset($_POST['submit'])) {
  


    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $gender = '1';

    if (!empty($username) && !empty($password) && !empty($fullname) && !empty($address) && !empty($email) && !empty($phone) && !empty($company) && !empty($city)) {
       # echo "<pre>";
       # print_r($_POST);

        $insert = "INSERT INTO `user` (`username`, `password`, `fullname`, `address`, `gender`, `email`, `phone`, `company`, `city` ) VALUES('$username', md5('$password'), '$fullname', '$address', '$gender', '$email', '$phone', '$company', '$city')";
    if($conn -> query($insert) == TRUE){
       # echo "Thêm data success";
    } else{
        echo "Lỗi! \n {$insert}".$conn->error;
    }
    
    
    
    } else {
        echo "Vui lòng nhập đầy đủ thông tin!";
    }

}


?>