<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cours</title>
    <link rel="stylesheet" href="assets/cour.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<?php
require 'assets/data/db-connect.php'; ?>

<body>
    <?php require 'assets/templates/header.php' ?>
    <div id="acceuil" class="container">


        <?php
        $query1 = "SELECT * FROM citation ORDER BY RAND() LIMIT 1";
        $resultcit = $dbh->query($query1);
        ?>

        <?php
        if ($resultcit->rowCount() > 0) {
            while ($row = $resultcit->fetch(PDO::FETCH_ASSOC)) {
        ?>
                <a class="box" href="liste.html.php">
                    <p><?= $row['content'] ?></p>
                    <h2><i>- <?= $row['name'] ?></i></h2>
                </a>

                <div class="background"></div>
        <?php
            }
        }
        ?>
    </div>

</body>

</html>