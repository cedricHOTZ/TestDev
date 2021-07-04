<?php
//connexion à la BDD
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
  <title>Onepagetest</title>
</head>

<body>
  <div class="container-fluid">
    <header>
      <div class="text-center">
        <img src="res/images/logo_mcir.png" class="mb-2 mt-3" />
      </div>
    </header>
    <!-- REALISATIONS -->
    <section id="realisations">
      <h2 class="text-center mt-5 mb-5">nos réalisations</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
        <?php
        while ($donnees = $reponse->fetch()) {
        ?>
          <div class="col-md-4">
            <div class="card">
              <?php
              echo "<img src=\"res/images/{$donnees["image_url"]}\">";
              ?>
              <div class="card-body">
                <h5 class="card-title"><?php echo $donnees['titre']; ?></h5>
                <p class="card-text text-center"><?php echo $donnees['description']; ?></p>
                <a href="" class="card-text text-center">En savoir plus</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
  </div>
  <?php
  $reponse->closeCursor(); // Termine le traitement de la requête
  ?>
  </section>

  <!-- BANNIERE-->


  <section id="banniere">

    <div class="ban mt-5">
      <?php
      echo "<img src=\"res/images/{$banniere["image_url"]}\">";
      ?>
      <div id="bottom-right">
        <p><span><?php echo $banniere['titre']; ?></span></p>
        <p><?php echo $banniere['description']; ?></p>
      </div>
    </div>
  </section>

  <!-- NOS VALEURS -->
  <section id="valeur">
    <div class="container-fluid">
      <h2 class="text-center mt-5">nos valeurs</h2>
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
        <?php
        while ($donnnees = $reponse1->fetch()) {
        ?>
          <div class="col-md-4">
            <div class="card  text-white text-center wprock-img-zoom-hover  mb-4">
              <div class="wprock-img-zoom">
                <?php
                echo "<img src=\"res/images/{$donnnees["image_url"]}\">";
                ?>

              </div>
              <div class="card-img-overlay text-center">
                <h2 class="card-title text-center  titrevaleur"><?php echo $donnnees['titre']; ?></h2>
                <p class="card-text text-center  paravaleur"><?php echo $donnnees['description']; ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
    <?php
    $reponse1->closeCursor(); // Termine le traitement de la requête
    ?>
  </section>

  <?php include("footer.php"); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="FitText.js"></script>
<script>
  jQuery("#bottom-right").fitText(1.2);
</script>

</html>