<?php 
include './database/connexion.php';

    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $adress=$_POST['adress'];
    $image_tshirt=$_POST['image_tshirt'];

    /* Get the name of the uploaded file */
   // $filename = randomString().'jpeg';

    /* Choose where to save the uploaded file */
    //$location = "upload/images_commande/".$filename;

    /* Save the uploaded file to the local filesystem */
    /*if ( move_uploaded_file($image_tshirt, $location) ) { 
    echo 'Success'; 
    } else { 
    echo 'Failure'; 
    }*/

    $sql = "INSERT INTO `commande`(`fullname`,`Phone`,`email`,`Adress`,`image_tshirt`) 
    VALUES ('$fullname','$phone','$email','$adress','$image_tshirt')";
    $result = mysqli_query($conn, $sql);
    if($result){
      //  header('Location: index.php');
      echo 1;
    }else
    {
        echo 0;
    }



    function randomString($length = 10) {
        // Set the chars
        $chars='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        // Count the total chars
        $totalChars = strlen($chars);
    
        // Get the total repeat
        $totalRepeat = ceil($length/$totalChars);
    
        // Repeat the string
        $repeatString = str_repeat($chars, $totalRepeat);
    
        // Shuffle the string result
        $shuffleString = str_shuffle($repeatString);
    
        // get the result random string
        return substr($shuffleString,1,$length);
    }
?>