<?php 
include './database/connexion.php';

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql = "INSERT INTO `contacts`(`fullname`,`email`,`phone`,`message`) 
    VALUES ('$fullname','$email','$phone','$message')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.php');
    }
?>