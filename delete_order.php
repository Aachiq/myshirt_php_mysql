<?php
include './database/connexion.php';
 $id = $_GET['id'];
 //echo $id;
 $result = mysqli_query($conn, "DELETE FROM commande WHERE id=$id"); 
 if($result){
    header('Location: list_orders.php');
}
?>