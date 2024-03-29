<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cour n°1</title>
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
</head>

<body>
<?php require 'assets/templates/header.php' ?>

    <div class="principal">
        <h1>Cour nouméroooow uno</h1>

        <h2>Git ? GitHub ? Kézako</h2>
        <img src="assets/img/cour1/git-logo.png" alt="">
        <p>Git est un logiciel de commande créé par Linus Torvald qui permet aux utilisateurs de partager leurs
            travails
            sur un dépot GitHub</p>
        <h2>Comment se présente Git ?</h2>
        <img src="assets/img/cour1/Git-inter.png" alt="">
        <p>Comme dit plus haut Git est un panneau de commande, on peut voir que je suis identifier sous le nom de
            stagiaire,
            et que je me trouve sur le bureau.</p>
        <p>Commande d'identification: git config user.email "le_bleue_en_devweb1@mns.fr"</p>
        <p>Commande d'identification avec un nom: git config user.name "LeBleue"</p>
        <h3>Le commencement:</h3>
        <p>Dans un premier temps il nous faudras créé un dépot local, pour ce faire il faut créé un dossier, appelons le
            "Test".</p>
        <img id="fich" src="assets/img/cour1/doss.png" alt="">
        <p>Une fois se dossier ouvert nous allons effectuer un clic droit, plusieurs options s'afficherons. Celle qui
            nous
            interesse est entouré:</p>
        <img src="assets/img/cour1/git1.png" alt="">
        <img src="assets/img/cou1/Git2.1.png" alt="">
        <p>Comme nous pouvons le voir, nous nous trouvons bien sur le bureau (DESKTOP) et dans le fichier Test </p>
        <p>Afin de créé le dépot local il nous faudras alors rentrer la commande "git init".</p>
        <img src="assets/img/cour1/Git3.png" alt="">
        <p>Suite cette opération, (master) s'affiche en fin de ligne pour signaler que nous somme sur la branche master
            (La
            branche maitre).</p>
        <p>-Explication: GitHub nous permet de créé plusieurs branche de travail afin de modifier le moins possible la
            branche maitre qui est le coeur du projet.</p>
        <p>-Pour laisser la branche master intact nous allons donc créé d'autres branches (branch) avec la commande "git
            checkout -b "nom de la branche":</p>
        <img src="assets/img/cour1/Git4.png" alt="">
        <p>Il nous faut bien un fichier a partager, nous allons prendre un simple doc.txt pour exemple:</p>
        <img src="assets/img/cour1/add.png" alt="">
        <p>Une fois fait, nous allons entrer la commande "git status" afin de voir les fichiers "untracked" (fichiers
            non
            suivis).</p>
        <img src="assets/img/cour1/Git5.png" alt="">
        <p>Il nous montre quel fichier est actuellement "untracked".</p>
        <p>Pour remedier a cela il nous faut rajouter se fichiers au fichiers suivis simplement en entrant la commande
            "git
            add" "nom du fichier" ou "." afin de prendre tous les fichiers:</p>
        <img src="assets/img/cour1/Git6.png" alt="">
        <p>Quand le panneau n'affiche pas d'information suite a cette commande c'est quelle a bien etait effectuer mais
            nous
            pouvons tout de meme re-verifier en entrant la commande "git status".</p>
        <h2>Utilisation de GitHub:</h2>
        <p>Nous voila fin pret a pouvoir utiliser GitHub:</p>
        <p>Premierement il faut se créé un compte sur GitHub, utiliser un e-mail pro est le mieux, GitHub offre un
            hebergement de site gratuit avec votre e-mail.</p>
        <p>Le compte est donc créé, nous voila sur notre page GitHub.</p>
        <p>Direction: Répositories:</p>
        <img src="assets/img/cour1/GitHub1.png" alt="">
        <p>Puis il nous faut créé un depot distant en appuyant sur "New", afin de pouvoir envoyé notre dépot local
            dessus:
        </p>
        <img src="assets/img/cour1/GitHub2.png" alt="">
        <p>Donner lui un nom et une description si voulu.</p>
        <img src="assets/img/cour1/GitHub3.png" alt="">
        <p>Nous pouvons voir le nombre de branche existantes dans le depot:</p>
        <img src="assets/img/cour1/GitHub4.png" alt="">
        <p>Maintenant que le dépot distant a etais créé il nous faut alors mettre en relation le depot local et le
            distant.
            Pour ce faire on va entrer la commande git remote add origin "l'url du dépot créé" </p>
        <p>Afin de trouver l'url desiré rendez vous sur le projet souhaiter, cliquer sur le bouton "Code", une fenetre
            s'ouvre et vous avez l'url souhaiter qui s'affiche:</p>
        <img src="assets/img/cour1/GitHub5.png" alt="">
        <p>Nous pouvons donc enfin mettre en relation les deux dépots avec la commande donnée plus haut (git remote add
            origin url):</p>
        <img src="assets/img/cour1/GitHub6.png" alt="">
        <p>Comme vu precedemment si le panneau n'affiche aucune erreur c'est que la commande a bien etais prise ene
            compte.
        </p>
        <p>Maintenant que les deux serveurs sont mis en relations, il nous faut envoyé le fichier: "Fichiers-dev" sur le
            dépot distant.</p>
        <p>Pour se faire il nous faut "push" (pousser) nos nouvelles info du dépot local vers le dépot distant.</p>
        <p>GitHub fonctionne sur la logique du "pull"/"push" donc pas de LegDay c'est génial. Yeaaaah BUDDY.</p>
        <p class="warning">Le push ne marchera que si vous avez effectuer au préalable un "commit"</p>
        <p>Mais KEZAKO ? C'est celui qui fait la plonge ? Le commit de cuisine ? Non non petit, c'est une validation des
            modifications que tu as apporter a ton code ou tes fichiers.</p>
        <p>Nous allons donc entrer la commande: "git commit -m "First modif"</p>
        <p>KEAZAKO "-m" ?! Le "-m" est une options, qui ajoute le fait d'accompagner ton commit d'un petit message, le
            plus
            court, clair et concit possible pour faciliter la comprehension d'autres dev potentiel.</p>
        <p>Mise en application:</p>
        <img src="assets/img/cour1/GitHub7.1.png" alt="">
        <p>Avant de pouvoir push nos infos, il faut push notre branche de travail (Max)</p>
        <p>Pour se faire nous allons utiliser la commande: "git push --set-upstream origin nom de la branche".</p>
        <p>Puis faire un push total de nos informations.</p>
        <img src="assets/img/cour1/GitHub8.png" alt="">
        <p>La ligne en dessous de la commande entrer nous indique tout c'est bien passer.</p>
        <p>Nous pouvons retourner sur GitHub, aller voir nos dépot distant et constater plusieurs changements: le nombre
            de
            branche, le fichier ajouté, la totalité du commit ainsi que le message precisant ce qui a etais fait. </p>
        <img src="assets/img/cour1/GitHub9.png" alt="">
    </div>

    <a id="ancre" href="#Logo"><span id="fleche" class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/templates/footer.php' ?>
</body>

</html>