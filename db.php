<?php


$conn =new mysqli('localhost','root','root','users_app');

if(!$conn){
    die(mysqli_error($conn));
}


?>