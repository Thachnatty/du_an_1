<?php 
  include "model/pdo.php";
  include "model/user.php";
  if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
  case 'register':
    if(isset($_POST['register'])&&($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $avatar = $_POST['avatar'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email = $_POST['email'];
        insert_client_user($username,$password,$avatar,$address,$phone,$email);
        $thongbao = "Đăng ký thành công";
         }
    include "view/user/register.php";
            break;
   



    default:
    // include "view/home.php";
       break;
   }
 }
?>