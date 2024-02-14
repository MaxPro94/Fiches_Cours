<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
    <link rel="stylesheet" href="assets/cour.css">
    <link rel="stylesheet" href="assets/footer.css">
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
</head>

<body>
    <?php require 'assets/header.php' ?>
    <div class="principal">
        <h1>Cascading Style Sheets (Feuilles de style en cascade)</h1>
        <br>
        <p>CSS, acronyme de "Cascading Style Sheets", est un langage de feuilles de style
            utilisé pour décrire la présentation visuelle d'un document écrit en HTML ou XML. Il permet de styliser et
            de formater les éléments d'une page web, en définissant des règles pour les couleurs, les polices, les
            marges, les dimensions, et d'autres aspects esthétiques. CSS assure une séparation claire entre la structure
            du contenu (gérée par HTML) et sa présentation, offrant ainsi une flexibilité et une facilité de maintenance
            accrues dans le développement web.</p>
        <br>
        <h3>Petit exemple de code CSS :</h3>
        <img src="assets/img/CSS/Exemple de code CSS.png" alt="">
        <br>
        <h3>Comment lier une page HTML à une page CSS ?</h3>
        <br>
        <p>Il faut d'abord créer les deux pages (HTML & CSS) :</p>
        <img src="assets/img/CSS/pages.png" alt="">
        <p>Ensuite il faut faire le lien entre les deux :</p>
        <img src="assets/img/CSS/link.png" alt="">
        <p>La liaison entre les deux ce fait comme l'image ci-dessus. En utilisant une balise Link.</p>
        <br>
        <h3>Quelques éxplications sur se code :</h3>
        <br>
        <img src="assets/img/CSS/balise.png" alt="">
        <p>Ici nous pouvons voir l'appel simple d'une balise HTML avec sont nom</p>
        <br>
        <img src="assets/img/CSS/class.png" alt="">
        <p>La nous appelons une class, il suffit de mettre un point devant le nom de notre class.</p>
        <br>
        <img src="assets/img/CSS/id.png" alt="">
        <p>Ceci est l'appel d'un id, il faut mettre un hashtag avant sont nom.</p>
        <br>
        <p>Ce qu'il y'a d'ecrit entre crochet s'appel des propriétés et des valeurs. Ils seront appliquées aux éléments
            sélectionnés par le sélecteur CSS associé. Chaque déclaration est séparée par un point-virgule (;).</p>
        <br>
        <p>Pour voir plus de propriétés, rendez-vous à cette adresse :</p>
        <a class="liens" href="https://www.w3.org/TR/selectors-3/#simple-selectors">w3.org</a>
    </div>




    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/footer.php' ?>

</body>

</html>