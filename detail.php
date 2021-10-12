<?php
require_once("traitement.php");
$code = $_GET['code'];
$prep = $connexion->prepare("SELECT * FROM personnages WHERE id=?");
$params = array($code);
$prep->execute($params);
$details = $prep->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <div class="container-fluid">
        <p><?php echo ($details["nom_complet"]) ?></p>
        <div class="container">
            <div class="row">
                <div style="height: 400px;">
                    <img style="display: inline;float:left;padding: 10px;" src="<?= $details["nom_image"] ?>" alt="">
                    <p><?php echo ($details["historique"]) ?></p>
                    
                </div>
                
                    
                
            </div>
        </div>
    </div>
</body>

</html>