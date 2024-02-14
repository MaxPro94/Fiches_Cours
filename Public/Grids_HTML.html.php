<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Grids en HTML</title>
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
        <h1>Les Grids en html</h1>
        <h2>Grids ? Kézako ?</h2>
        <br>
        <p>La mise en page des sites web a toujours été une vraie problématique pour les designers. Les
            techniques utilisées n'ont jamais été spécifiquement dédiées à cet objectif. C'était systématiquement
            des détournements de fonctionnalités CSS. Les designers ont utilisé des tableaux, des positionnements
            flottants, des affichages en tableaux, des frameworks lourds et pas toujours efficaces. Tout ceci est
            dorénavant de l'histoire ancienne avec l'avènement du module CSS Grid.
            Les grids en CSS sont un système de grille de mise en page qui permet de créer des designs de grille
            adaptatifs pour les pages web. Ils permettent de définir des zones de grille pour organiser les éléments
            HTML sur une page, en les disposant en lignes et en colonnes. Les tailles de colonnes et de lignes
            peuvent être définies en utilisant des unités de mesure telles que des pourcentages ou des pixels, ce
            qui permet un contrôle précis de la mise en page. Les éléments HTML peuvent être positionnés sur la
            grille en spécifiant où ils doivent commencer et terminer sur les lignes et les colonnes de la grille. Les
            grids en CSS offrent une méthode flexible pour organiser les éléments sur une page web en fonction
            de la taille de l'écran, ce qui en fait un outil puissant pour la conception de sites web adaptatifs.</p>
        <br>
        <h3>Fonctionnement:</h3>
        <br>
        <p>Il nous faut un conteneur parent pour définir la grille. C'est le Grid Container en anglais, le
            conteneur de grille en français. Dans une même page web, nous pouvons avoir autant de
            conteneurs de grille que nous le souhaitons. Nous avons aussi la possibilité d'imbriquer les
            grilles les unes dans les autres.
            Dans un conteneur de grille, le ou tous les éléments directs inclus seront des éléments enfants
            de la grille. Ce ou ces enfants sont alors nommés Grid Item en anglais ou éléments de grille en
            français.</p>
            <br>
        <p>Notez bien qu'il s'agit uniquement des éléments directs inclus qui sont des éléments de la grille. Les
            petits enfants du conteneur de grille ne sont pas affectés par la notion de grille. Ils conservent donc
            leur propriété de modèle de boîte</p>
        <br>
        <p>Nous pouvons ajouter des lignes de grille supplémentaires pour délimiter des lignes et des colonnes.
            Les lignes de grille sont numérotées de gauche à droite et de haut en bas.</p>


    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/footer.php' ?>
</body>
</html>