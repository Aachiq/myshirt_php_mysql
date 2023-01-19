<?php 
include './database/connexion.php';

    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $adress=$_POST['adress'];
    $image_tshirt=$_POST['image_tshirt'];

    $sql = "INSERT INTO `commande`(`fullname`,`Phone`,`email`,`Adress`,`image_tshirt`) 
    VALUES ('$fullname','$phone','$email','$adress',NULL)";
    $result = mysqli_query($conn, $sql);
    if($result){
      //  header('Location: index.php');
      echo 'Is Valide';
    }
?>