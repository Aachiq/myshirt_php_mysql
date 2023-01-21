<?php
 include './database/connexion.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css"/>
</head>
<body style="padding:20px">
    <h1 class="text-primary">Liste de commandes à Livrer</h1>
    <div class="container">
    <table class="table table-striped table-hover" id="tb1">
                <thead>
                    <tr class="bg-secondary">
                        <th>ID</th>
                        <th>FULLNAME</th>
                        <th>TELEPHONE</th>
                        <th>EMAIL</th>
                        <th>ADRESS</th>
                        <th>QUANTITE</th>
                        <th>IMAGE</th>
                        <th>ACTION</th>


                       
                    </tr>
                </thead>
                <tbody>
                
                <?php
                $result = mysqli_query($conn,"SELECT * FROM commande");
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $row["id"]; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $row ["fullName"]?></td>
                <td><?php echo $row["Phone"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["Adress"]; ?></td>
                <td><?php echo $row["qte"]; ?></td>
                <td><img width="100" height="100" src="<?php echo $row["image_tshirt"]; ?>" alt="<?php echo $row ["fullName"]?>"></td>

                 <td>
                    <a href="delete_order.php?id=<?php echo $row["id"]; ?>" 
                       data-toggle=""
                       class="delete">
                    <i class="material-icons" 
                       title="Delete"></i>
                    </a>
                </td> 
                </tr>
                <?php
                $i++;
                }
                ?>
        </tbody>
    </table>

    </div>
   
            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>