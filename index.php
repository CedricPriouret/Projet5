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
        <div id="liste-oeuvres">
            <!-- inclusion des oeuvres -->
        <?php include_once "oeuvres.php"; ?>
        
            <?php foreach ($oeuvres as $oeuvre): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre["id"]; ?>">
                    <img src="<?php echo $oeuvre["image"]; ?>">
                    <h2><?php echo $oeuvre["title"]; ?></h2>
                    <p class="description"><?php echo $oeuvre[
                      "description"
                    ]; ?></p>
                </a>
            </article>
            <?php endforeach; ?>
        </div>
    </main>
    <!-- inclusion du footer -->
<?php include "footer.php"; ?>
</body>
</html>