<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation des fichiers PHP</title>
    <link rel="stylesheet" href="assets/cour.css">
    <link rel="stylesheet" href="assets/templates/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<body>
    <?php require 'assets/header.php' ?>
    <div class="principal">
        <h1>Organisation des fichiers PHP</h1>
        <img src="assets/img/Php-orga/Orga-html.png" alt="">
        <p>Ici nous sommes sur un site statique comportant des fiches de cours.</p>
        <p>Une fiche de cours est unique et n'apparaît qu'une seule fois sur le site, c'est pourquoi j'ai décidé d'en faire un site statique.</p>
        <p>Si nous étions sur un site de e-commerce, nous aurions plutôt opté pour un site dynamique car les articles peuvent souvent changer et être vus sur plusieurs pages.</p>
        <br>
        <p>Un fichier nommer nanani.html.php agit comme un template, c'est une page qui structure notre affichage car il y'a du language HTML a l'interieur</p>
        <p>Quand un fichier est seulement au format .php cela indique que la page contiendras uniquement du language php donc une page qui ne gère pas l'affichage.</p>
        <br>
        <img src="assets/img/Php-orga/assets.png" alt="">
        <p>Comme vous pouvez le voir, j'ai deux fichiers PHP nommés Header et Footer que j'appelle dans chaque page afin de pouvoir changer tous mes en-têtes et pieds de page qu'une seule fois et toutes les pages seront touchées par la modification.</p>
        <p>Cela facilite grandement les modifications qui pourront être faites ultérieurement.</p>
    </div>
    <?php require 'assets/footer.php' ?>
</body>
</html>

</body>
</html>