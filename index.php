<?php
require_once("traitement.php");
//requete pour recuperer les images
$req = "SELECT * FROM personnages";
//pour preparer la requete
$ps = $connexion->prepare($req);
$ps->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>

<body>
  <header class="container-fluid header">
    <div class="container"></div>
    <a href="#" class="logo"> <img src="images\whatsapp-image-2020-11-27-at-09-56-40 (1).jpg" alt="" width="70"/></a>
    <nav class="menu">
      <a href="#">Acceuil</a>
      <a href="#pers">Personnages</a>
      <hr>
    </nav>
  </header>
  <section class="container-fluid banner">
    <div class="banne">

    <img class="image"src="images\giphy.gif"  alt="Banniere du site">
      <!-- <img src="images\logo.jpg" alt="images du site"> -->
    </div>
    <div class="inner-banner">
     <marquee direction="alternative">Bienvenue à la semaine du numerique</marquee>
    </div>
  </section>
  <div class="container">
     <div class="row">
      <h2 id="pers"> Personnages</h2>
      <hr class="separatoire">
      <!-- boucle pour afficher les images ligne par ligne -->
      <?php while ($img = $ps->fetch()) { ?>
        <div class="col-lg-3 col-sm-6">
        <div class="card item h m">
          <a href="detail.php?code=<?php echo ($img["id"]) ?>"><img class="card-img-top w" src="<?= $img["nom_image"] ?>"/></a>
          <div class="card-body">
            <h5 class="card-title"><?php echo ($img["nom_complet"]) ?>
            </h5>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
  </div>
    <p class="p">copiright 2021 ODK La semaine du numeique</p>    
</body>

</html>