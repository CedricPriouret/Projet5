<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <!-- inclusion du header -->
    <?php include "header.php"; ?>
<main>
        <!-- inclusion des oeuvres -->
        <?php
            $numero_oeuvre = $_GET["id"];
            include_once "oeuvres.php";

            if (isset($_GET['id']) && array_key_exists($_GET['id'], $oeuvres)) 
            $oeuvre = $oeuvres[$_GET['id']];
        ?>

    <article id="detail-oeuvre">
            <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$numero_oeuvre]["image"]; ?>" />
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$numero_oeuvre]["title"]; ?></h1>
            <p class="description"><?php echo $oeuvres[$numero_oeuvre]["description"]; ?></p>
            <p class="description-complete">
            <?php echo $oeuvres[$numero_oeuvre]["description-complete"]; ?>
            </p>
        </div>
    </article>
</main>
    <!-- inclusion du footer -->
    <?php include "footer.php"; ?>
</body>
</html>