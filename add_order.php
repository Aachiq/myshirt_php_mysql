<?php 
include './database/connexion.php';

    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $adress=$_POST['adress'];

    $sql = "INSERT INTO `commande`(`fullname`,`Phone`,`Adress`,`image_tshirt`) 
    VALUES ('$fullname','$phone','$adress',NULL)";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.php');
    }
?>