<?php
function insert_client_user($username,$password,$avatar,$address,$phone,$email){
    $sql = "INSERT INTO user(username,password,avatar,address,phone,email) VALUES('$username','$password','$avatar','$address','$phone','$email') ";
    pdo_execute($sql);
}


?>