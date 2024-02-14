<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un formulaire</title>
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
        <h1>Réalisation d'un formulaire:</h1>
        <br>
        <h2>A quoi sert un formulaire ?</h2>
        <br>
        <p>Un formulaire sert a enregistrer des données entrer par l'utilisateur et a les utiliser dans le cadre d'une architecture 3 tiers. (Desktop - serveur - BDD)</p>
        <br>
        <p>Pour bien demarrer la création de notre formulaire nous allons le mettre dans une balise "form".</p>
        <img src="assets/img/FormulaireHTML/baliseform.png" alt="image de la balise form">
        <p>Dans cette balise nous allons entrez des input.</p>
        <img src="assets/img/FormulaireHTML/exempleinput1.png" alt="image d'un code d'input">
        <p>Comme nous pouvons le voir le formulaire est relié a un fichier .php, nous y reviendrons plus tard.</p>
        <p>Nous pouvons aussi voir que nous avons donné un ID, un nom et une method a se formulaire.</p>
        <img id="zoom" src="assets/img/FormulaireHTML/conditionform.png" alt="Zoom sur les conditions du formulaire">
        <p>Pour cet exemple nous avons créé un tableau afin de simplifier la mise en page, chose a ne pas reproduire dans des cas metier.</p>
        <p>La première valeur que l'on demande a l'utilisateur et sont nom. Nous constatons que "Nom:" est dans une <span class="mot-clef">td</span> qui se trouve dans une <span class="mot-clef">tr</span> qui est elle même dans une <span class="mot-clef">table</span>.</p>
        <ul>
            <li><span class="mot-clef">table</span></li>
                <p>Sert a identifier un tableau.</p>
            <li><span class="mot-clef">tr</span></li>
                <p>table-row ; sert a identifier une ligne du tableau.</p>
            <li><span class="mot-clef">td</span></li>
                <p>table-data ; sert a identifier une donnée de la table.</p>
        </ul>
        <br>
        <p>L'architecture de ce tableau n'est pas totalement exact, mais ce n'est pas grave dans ce cas.</p>
        <h3>La syntaxe de l'input:</h3>
        <img src="assets/img/FormulaireHTML/syntaxeinput.png" alt="Exemple de syntaxe pour l'input">
        <h4>Les conditions utilisés dans cet input:</h4>
        <ul>
            <li><span class="mot-clef">type=</span></li>
                <p>Ici nous indiquons le type d'input ( Dans l'exemple c'est du text ).</p>
            <li><span class="mot-clef">name=</span></li>
                <p>Nous attribuons un nom cet input.</p>
            <li><span class="mot-clef">placeholder=</span></li>
                <p>Texte en fond de l'input qui indique quoi saisir a l'utilisateur.</p>
            <li><span class="mot-clef">size=</span></li>
                <p>Taille de l'input</p>
            <li><span class="mot-clef">maxlength=</span></li>
                <p>Limitation du nombre de caractère que l'utilisateur peut entrer.</p>
            <li><span class="mot-clef">required=</span></li>
                <p>Obligtion de remplir cet input</p>
            <li><span class="mot-clef">value=</span></li>
                <p>Remplissage en amont de l'input.</p>
        </ul>
        <h4>Voila ce que nous donne ce code une fois éxécuter:</h4>
        <img src="assets/img/FormulaireHTML/affinput.png" alt="">
        <h4>Exemple d'autre type d'input:</h4>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codetextarea.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/afftextarea.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codecheckbox.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affcheckbox.png" alt="">
        <p>Ici nous pouvons voir une zone dedié a du remplisssage texte que nous créons avec la balise textarea</p>
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/coderadio.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affradio.png" alt="">
        <p>La differrence entre l'input radio et l'input checkbox c'est qu'avec le bouton radio un seul choix est possible, il faut donc les ajoutés par groupe.</p>
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codeliste.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affliste.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codedatalist.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affdatalist.png" alt="">
        <p>La datalist nous permet de pré-enregistrer des possibilités d'input, qui lors de la saisie utilisateur lui proposera un choix selon les caractères deja entrer.</p>
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codedate.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affdate.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codenumber.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affnumber.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codemdp.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affmdp.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codemail.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affmail.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/coderange.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img src="assets/img/FormulaireHTML/affrange.png" alt="">
        <p>Il faut quand meme preciser que l'affichage de la valeur de la barre ne peut se faire uniquement en JavaScript.</p>
        <h5>Voici le code :</h5>
        <img src="assets/img/FormulaireHTML/codejs.png" alt="">
        <br>
        <h5>Avec se code :</h5>
        <img src="assets/img/FormulaireHTML/codefile.png" alt="">
        <h5>Nous obtenons se resultat a l'affichage :</h5>
        <img id="zoom" src="assets/img/FormulaireHTML/afffile.png" alt="">






    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/footer.php' ?>
</body>
</html>