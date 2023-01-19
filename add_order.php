<?php 
include './database/connexion.php';

    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $phone=$_POST['email'];
    $adress=$_POST['adress'];

    $sql = "INSERT INTO `commande`(`fullname`,`Phone`,`email`,`Adress`,`image_tshirt`) 
    VALUES ('$fullname','$phone','$adress',NULL)";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.php');
    }
?>