<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W.A.M.P</title>
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
        <h1>W.A.M.P</h1>
        <h2>W : Windows / A : Apache / M : MySQL / P : Php</h2>
        <p>Wamp, dans le contexte informatique, est souvent associé à un acronyme qui représente un ensemble de
            logiciels
            utilisés pour le développement web. Ensemble, WAMP représente un environnement de développement web complet,
            principalement utilisé sur des systèmes d'exploitation Windows. Cet ensemble de logiciels permet aux
            développeurs de créer et de tester des sites web localement avant de les déployer sur un serveur en
            production.
            Il existe d'autres équivalents pour d'autres systèmes d'exploitation, comme LAMP (Linux, Apache, MySQL,
            PHP/Python/Perl) pour Linux, MAMP (Mac, Apache, MySQL, PHP/Python/Perl) pour macOS, et XAMPP, qui est
            multiplateforme (disponible pour Windows, macOS et Linux) et inclut également Perl.
            En résumé, WAMP fournit une plateforme de développement locale pour les applications web, permettant aux
            développeurs de travailler sur leurs projets sans avoir besoin d'une connexion internet ou d'un serveur
            distant
            pendant le processus de développement initial.</p>
        <ul>
            <li><span class="mot-clef">Apache : </span></li>
            <p>En résumé, Apache dans l'environnement WAMP sert de serveur web, fournissant la plateforme nécessaire
                pour
                héberger et exécuter des applications web développées en utilisant des langages comme PHP, Python ou
                Perl,
                tout en gérant les communications avec les clients via le protocole HTTP. C'est un composant essentiel
                pour
                le développement et le test d'applications web sur un serveur local avant de les déployer sur un serveur
                en
                production.</p>
            <li><span class="mot-clef">MySQL : </span></li>
            <p>En résumé, MySQL dans un environnement WAMP fournit la capacité de stocker, organiser et récupérer des
                données pour les applications web. Il joue un rôle crucial dans le développement d'applications
                interactives
                et dynamiques en permettant au serveur web (Apache) d'interagir avec une base de données pour fournir
                des
                contenus personnalisés en fonction des besoins de l'utilisateur.</p>
            <li><span class="mot-clef">PHP : </span></li>
            <p>En résumé, PHP dans un environnement WAMP offre la puissance de traitement côté serveur nécessaire pour
                créer
                des applications web dynamiques. Il facilite l'intégration avec des bases de données, le traitement de
                formulaires, la gestion de sessions, et bien d'autres aspects du développement web.</p>
        </ul>


        <div class="installation_wamp">
            <h2>Comment DL Wamp ?</h2>
            <p>Maintenant que nous savons l'utiliter de WAMP il nous faut le telecharger et l'installer.</p>
            <h3>Etape 1:</h3>
            <p>Se rendre sur le site : wampserver.com</p>
            <img class="screen" src="assets/img/wamp/LienDLwamp_0.png" alt="">
            <p>Puis cliquez sur :</p>
            <img class="screen" src="assets/img/wamp/DLwamp.png" alt="">
            <p>Une fois cela fait il nous faut DL les librairies Windows afin de palier a toutes erreur d'installation.
            </p>
            <p>Pour cela nous allons nous rendre sur : wampserver.aviatechno.net</p>
            <img class="screen" src="assets/img/wamp/LienDLwampLibr.png" alt="">
            <p>Puis telecharger cette librairie :</p>
            <img class="screen" src="assets/img/wamp/LienDLWampLibr1.png" alt="">
            <p>Une fois tout installer, nous pouvons lancer l'application WAMP</p>
            <img class="screen" src="assets/img/wamp/iconewamp.png" alt="">
            <p>Une fois lancer l'icone wamp se met dans le menu deroulant de la barre de tache.</p>
            <p>Si tout a etais exécuter sans problèmes la couleur de l'icone wamp doit etre vert comme sur le screenshot
                :
            </p>
            <img class="screen" src="assets/img/wamp/wampderoulant.png" alt="">
            <p>Si tout est bon nous allons maintenant effectuer un clic gauche sur sur l'icone du menu deroulant ce qui
                va
                nous affiché un autre menu deroulant venant de wamp :</p>
            <img class="screen" src="assets/img/wamp/MenuPhpMyAdmin.png" alt="">
            <p>Une fois que vous avez cliquez sur la fonctionnalité "phpMyAdmin" une page va s'ouvrir :</p>
            <img class="screen" src="assets/img/wamp/indexPhpMyAdmin.png" alt="">
            <p>Afin de faire un test nous allons seulement entrer le nom "root" dans utilisateur et lancer.</p>
            <p>Nous allons etre rediriger vers une autre page :</p>
            <img id="zom" class="screen" src="assets/img/wamp/interfacephpMyAdmin.png" alt="">
            <p>Et voila l'installation de WAMP est finit et est pret a etre utilisé !, pour voir les commandes SQL et
                les
                syntaxes je vous renvoit vers le cours 2:</p>
            <a href="CommandeCMD.html">Exemples commandes SGBDr</a>


        </div>
    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/footer.php' ?>

</body>

</html>