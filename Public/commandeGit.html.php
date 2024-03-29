<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande GIT-BASH</title>
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
<?php require 'assets/templates/header.php' ?>
    <div class="principal">
        <h1>Quelle est l'utilité de GIT-BASH</h1>
        <p>Ici nous allons voir les commandes les plus utiles sur GIT-BASH</p>
        <p>Dans la plupart des cas, quand nous travaillerons sur GitHub un "Master Git" sera en charge de valider les
            push, pull et les commits.</p>
        <p>Afin d'utiliser GIT de la maniere la plus optimiser nous allons créé des branches pour chaque elements de
            travail.</p>
        <h3>Exemple :</h3>
        <p>Si un utilisateur a pour projet de travailler sur la barre de navigation, nous allons créé une branche
            "barre_nav" afin d'isoler le travail dasn une seule branche.</p>
        <br>
        <p>Cela auras pour effets de reduire le nombre de risque de conflit possible, là est tout le but de Git &
            GitHub.</p>
        <p>Nous pouvons aussi nous aidez de logiciel annexe comme GitDesktop, GitKraken ou SourceTree, afin de nous
            faciliter la tâche.</p>
        <h2>Les différentes commandes les plus vues sur GIT</h2>
        <ul>
            <li><span class="mot-clef">git config</span></li>
            <p>L'une des commandes git les plus utilisées est git config. On l'utilise pour configurer les préférences
                de l'utilisateur : son adresse email, l'algorithme utilisé pour diff, le nom d’utilisateur et le format
                de fichier etc. Par exemple, la commande suivante peut être utilisée pour définir le mail d'un
                utilisateur</p>
            <p>git config --global user.email sam@google.com</p>
            <br>
            <li><span class="mot-clef">git init</span></li>
            <p>Cette commande est utilisée pour créer un nouveau dépôt GIT</p>
            <br>
            <li><span class=" mot-clef">git add</span></li>
            <p> La commande git add peut être utilisée pour ajouter des fichiers à l'index.</p>
            <br>
            <li><span class="mot-clef">git clone</span></li>
            <p>La commande git clone est utilisée pour la vérification des dépôts. Si le dépôt se trouve sur un serveur
                distant, utilisez:</p>
            <p>git clone alex@93.188.160.58:/chemin/vers/dépôt</p>
            <br>
            <li><span class=" mot-clef">git commit</span></li>
            <p>La commande git commit permet de valider les modifications apportées au HEAD. Notez que tout commit ne se
                fera pas dans le dépôt distant.</p>
            <p>git commit –m “Description du commit”</p>
            <br>
            <li><span class="mot-clef">git status</span></li>
            <p>La commande git status affiche la liste des fichiers modifiés ainsi que les fichiers qui doivent encore
                être ajoutés ou validés. Compare avec le depot local.</p>
            <br>
            <li><span class=" mot-clef">git checkout</span></li>
            <p>La commande git checkout peut être utilisée pour créer des branches ou pour basculer entre elles.</p>
            <p>git checkout -b "nom-branche"</p>
            <p>Si nous voulons changer de branche sans avoir besoin de la créé nous procederons ainsi:</p>
            <p>git checkout "nom-branche"</p>
            <br>
            <li><span class="mot-clef">git remote</span></li>
            <p>Cette commande remote permet à un utilisateur de se connecter à un dépôt distant. La commande suivante
                répertorie les dépôts distants actuellement configurés:</p>
            <p>git remote –v</p>
            <p>Cette commande permet à l'utilisateur de connecter le dépôt local à un serveur distant:</p>
            <p>git remote add origin " 93.188.160.58"</p>
            <br>
            <li><span class="mot-clef">git fetch</span></li>
            <p>Git fetch permet à un utilisateur d'extraire tous les fichiers du dépôt distant qui ne sont pas
                actuellement dans le répertoire de travail local. Exemple d'utilisation:</p>
            <p>git fetch origin</p>
            <br>
            <li><span class=" mot-clef">git branch</span></li>
            <p>La commande git branch peut être utilisée pour répertorier, créer ou supprimer des branches. Pour
                répertorier toutes les branches présentes dans le dépôt, utilisez:</p>
            <p>git branch</p>
            <p>Pour supprimer une branche:</p>
            <p>git branch –d "nom-branche"</p>
            <br>
            <li><span class="mot-clef">git merge</span></li>
            <p>La commande git merge est utilisée pour fusionner une branche dans la branche active.</p>
            <p>git merge " nom-branche"</p>
            <br>
            <li><span class="mot-clef">git diff</span></li>
            <p>La commande git diff permet de lister les conflits. Pour visualiser les conflits d'un fichier, utilisez:
            </p>
            <p>git diff --base " nom-fichier"</p>
            <p>La commande suivante est utilisée pour afficher les conflits entre les branches à fusionner avant
                de les
                fusionner:</p>
            <p>git diff "branche-cible"</p>
            <p>Pour simplement énumérer tous les conflits actuels, utilisez:</p>
            <p>git diff</p>
            <br>
            <li><span class="mot-clef">git tag</span></li>
            <p>Le marquage est utilisé pour marquer des commits spécifiques avec des poignées simples. Un exemple peut
                être:</p>
            <p>git tag 1.1.0 " insert-commitID-here"</p>
            <br>
            <li><span class="mot-clef">git log</span></li>
            <p>L' exécution de cette commande génère le log d'une branche. Un exemple de sortie :</p>
            <p>commit 15f4b6c44b3c8344caasdac9e4be13246e21sadw</p>
            <p>Author: Alex Hunter " alexh@gmail.com" </p>
            <p>Date: Mon Oct 1 12:56:29 2016 -0600</p>
            <br>
            <li><span class="mot-clef">git history</span></li>
            <p>Affiche l'historique des commandes taper.</p>
            <br>
            <li><span class=" mot-clef">git reset</span></li>
            <p>Pour réinitialiser l'index et le répertoire de travail à l'état du dernier commit, la commande git reset
                est utilisée :</p>
            <p>git reset --hard HEAD</p>
            <br>
            <li><span class="mot-clef">git rm</span></li>
            <p>Git rm peut être utilisé pour supprimer des fichiers de l'index et du répertoire de travail. Usage:</p>
            <p>git rm nomfichier.txt</p>
            <br>
            <li><span class=" mot-clef">git stash</span></li>
            L'une des moins connues, git stash aide à enregistrer les changements qui ne doivent pas être commit
            immédiatement. C'est un commit temporaire. Usage:
            <p>git stash</p>
            <br>
            <li><span class="mot-clef"">git show</span></li>
            <p>Pour afficher des informations sur tout fichier git, utilisez la commande git show .</p>
            <li><span class=" def">git ls-tree</span></li>
            <p>Pour afficher un fichier arborescent avec le nom et le mode de chaque élément, et la valeur SHA-1 du
                blob, utilisez la commande git ls-tree . Par exemple:</p>
            <p>git ls-tree HEAD</p>
            <br>
            <li><span class="mot-clef">git cat-file</span></li>
            <p>À l'aide de la valeur SHA-1, affichez le type d'un fichier à l'aide de la commande git cat-file . Par
                exemple:</p>
            <p>git cat-file –p d670460b4b4aece5915caf5c68d12f560a9fe3e4</p>
            <br>
            <li><span class=" mot-clef">git grep</span></li>
            <p>Git grep permet à un utilisateur de rechercher dans les arbres de contenu des expressions et / ou des
                mots. Par exemple, pour rechercher www.hostinger.com dans tous les fichiers, utilisez:</p>
            <p>git grep "www.hostinger.com"</p>
            <br>
            <li><span class="mot-clef">gitk</span></li>
            <p>Gitk est l'interface graphique du dépôt local.</p>
            <br>
            <li><span class=" mot-clef">git instaweb</span></li>
            <p>Avec la commande git instaweb , un serveur Web peut être exécuté par interface avec le dépôt local. Qui
                redirige directement vers un serveur web. Par exemple:</p>
            <p>git instaweb –httpd=webrick</p>
            <br>
            <li><span class="mot-clef">git gc</span></li>
            <p>Pour optimiser le dépôt en supprimant les fichiers inutiles et les optimiser.</p>
            <br>
            <li><span class=" mot-clef">git archive</span></li>
            <p>La commande git archive permet à un utilisateur de créer un fichier zip ou tar contenant les composants
                d'un arbre du dépôt. Par exemple:</p>
            <p>git archive --format=tar master</p>
            <br>
            <li><span class="mot-clef">git prune</span></li>
            <p>Via la commande git prune , les fichiers qui n'ont pas de pointeurs entrants seront supprimés.</p>
            <br>
            <li><span class=" mot-clef">git fsck</span></li>
            <p>Pour effectuer une vérification d'intégrité du système de fichiers git, utilisez la commande git fsck .
                Tous les fichiers corrompus seront identifiés.</p>
            <br>
            <li><span class="mot-clef">git rebase</span></li>
            <p>La commande git rebase est utilisée pour la réapplication des commits sur une autre branche.</p>
            <br>
            <li><span class=" mot-clef">git push</span></li>
            <p>Git push est une autre commandes GIT de base. Un simple push envoie les modifications locales apportées à
                la branche principale associée.</p>
            <br>
            <li><span class="mot-clef">git pull</span></li>
            <p>Pour fusionner toutes les modifications présentes sur le dépôt distant dans le répertoire de travail
                local, la commande pull est utilisée.</p>
            <br>
    </div>
    </ul>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/templates/footer.php' ?>
</body>

</html>