<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python</title>
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
</head>


<body>
<?php require 'assets/header.php' ?>
    <div class="principal">
        <h1>Python c'est quoi ?</h1>
        <p>Le langage Python est un langage de programmation populaire et polyvalent. Voici quelques points simples pour
            expliquer ce qu'est le langage Python :</p>
        <ol>
            <li>Facilité de Lecture et d'Écriture : Python est conçu pour être facile à lire et à écrire. Sa syntaxe est
                claire et ressemble presque à l'anglais, ce qui facilite la compréhension même pour les débutants en
                programmation.</li>
            <br>
            <li>Interprété : Python est un langage interprété, ce qui signifie que le code source est exécuté ligne par
                ligne par un interpréteur Python, sans nécessité de compilation préalable. Cela simplifie le processus
                de
                développement et de test.</li>
            <br>
            <li>Polyvalent : Python est utilisé dans de nombreux domaines tels que le développement web, la science des
                données, l'intelligence artificielle, l'automatisation, les jeux vidéo, etc. Sa polyvalence en fait un
                choix
                populaire pour différents types de projets.</li>
            <br>
            <li>Communauté Active : Python bénéficie d'une vaste communauté d'utilisateurs et de développeurs. Il existe
                de
                nombreuses bibliothèques et modules prêts à l'emploi, ce qui facilite le développement de solutions sans
                avoir à réinventer la roue.</li>
            <br>
            <li>Open Source : Python est un langage open source, ce qui signifie que son code source est accessible au
                public. Cela favorise la collaboration et permet à quiconque de contribuer à son amélioration.</li>
            <br>
            <li>Orienté Objet : Python prend en charge la programmation orientée objet, une approche de programmation
                qui
                organise le code autour d'objets, ce qui facilite la réutilisation du code et la gestion de la
                complexité.
            </li>
            <br>
            <li>Dynamiquement Typé : Python est un langage dynamiquement typé, ce qui signifie que vous n'avez pas
                besoin de
                déclarer explicitement le type d'une variable. Cela simplifie le processus de programmation, mais il
                faut
                être conscient des types lors de l'exécution du programme.</li>
        </ol>
        <p>En résumé, Python est un langage de programmation accessible, polyvalent et largement utilisé dans divers
            domaines en raison de sa simplicité, de sa lisibilité et de sa vaste communauté de développeurs.</p>
        <h2>Syntaxe et commandes :</h2>
        <ul>
            <li>
                <h4><span class="mot-clef">if</span> Signifie "SI"</h4>
            </li>
            <p>Premer ordre de priorité dans une declaration "if-elif-else".</p>
            <p>Exemple :</p>
            <p>score = 75</p>
            <p>if score >= 90:</p>
            <p>print("A")</p>
            <p>elif score >= 80:</p>
            <p>print("B")</p>
            <p>elif score >= 70:</p>
            <p>print("C")</p>
            <p>else:</p>
            <p>print("C")</p>
            <p></p>
            <br>
            <li>
                <h4><span class="mot-clef">else</span> Signifie "AUTRE"</h4>
            </li>
            <p>Exemple :</p>
            <p>score = 75</p>
            <p>if score >= 90:</p>
            <p>print("A")</p>
            <p>elif score >= 80:</p>
            <p>print("B")</p>
            <p>elif score >= 70:</p>
            <p>print("C")</p>
            <p>else:</p>
            <p>print("C")</p>
            <p>Code a executer si aucune autres condition n'est vraie.</p>
            <p>Dernier ordre de priorité dans une declaration "if-elif-else."</p>
            <br>
            <li>
                <h4><span class="mot-clef">in</span> Signifie "PRESENCE"</h4>
            </li>
            <p>Exemple :</p>
            <p>nombre_de_doight = int(input)</p>
            <p>if nombre_de_doight in(5)</p>
            <p>print("C'est le nombre total de doight pour une seul main")</p>
            <br>
            <li>
                <h4><span class="mot-clef">%</span> Cela donne le reste de la division.</h4>
            </li>
            <p>Exemple :</p>
            <p>Reste = 7%3</p>
            <p>print(Reste) = 1</p>
            <p>Explications : 7 / 3 = 2,33 donc le quotient est de 2, le reste est de 1.</p>
            <br>
            <li>
                <h4><span class="mot-clef">==</span> Cela symbolise une égalité.</h4>
            </li>
            <p>Exemple :</p>
            <p>reste = total_doight % 2</p>
            <p>if reste == 0:</p>
            <p>print("Nombre paire")</p>
            <br>
            <li>
                <h4><span class="mot-clef">elif</span> Signifie "sinon si" 2ème ordre de prioriter dans les declaration
                    "if-elif-else"</h4>
            </li>
            <p>Exemple :</p>
            <p>score = 75</p>
            <p>if score >= 90:</p>
            <p>print("A")</p>
            <p>elif score >= 80:</p>
            <p>print("B")</p>
            <p>elif score >= 70:</p>
            <p>print("C")</p>
            <p>else:</p>
            <p>print("C")</p>
            <br>
            <li>
                <h4><span class="mot-clef">str()</span></h4>
            </li>
            <p>En Python, str() est une fonction intégrée qui convertit son argument en une représentation sous forme de
                chaîne de caractères (string). Cela signifie que si vous avez une valeur d'un autre type de données
                (comme
                un entier, un flottant, un booléen, etc.), vous pouvez utiliser la fonction str() pour la convertir en
                une
                chaîne de </p>
            <br>
            <h4><span class="mot-clef">for</span> Signifie "Pour"</h4>
            <p>En Python, une boucle for est utilisée pour itérer sur une séquence (comme une liste, une chaîne de
                caractères, un tuple, un dictionnaire, etc.) ou sur d'autres objets itérables. La syntaxe de base d'une
                boucle for est la suivante :</p>
            <p>for variable in sequence:
                # Bloc de code à exécuter à chaque itération
                # Utilisez la variable pour accéder à l'élément courant de la séquence
            </p>
            <br>
            <h4><span class="mot-clef">while</span> Signifie "tant que"</h4>
            <p>En Python, la boucle while est utilisée pour exécuter un bloc de code tant qu'une condition spécifiée
                reste
                vraie. La syntaxe de base d'une boucle while est la suivante :</p>
            <p>while condition:
                # Bloc de code à exécuter tant que la condition est vraie
            </p>
            <p>Exemple avec une boucle while:</p>
            <p>compteur = 0</p>
            <p>while compteur < 5:</p>
                    <p>print(compteur) compteur +=1 </p>

                    <h4><span class="mot-clef"></span></h4>
                    <h4><span class="mot-clef"></span></h4>
                    <h4><span class="mot-clef"></span></h4>

        </ul>

        <h2>Connection d'une base de données avec Python</h2>
        <br>
        <br>
        <p>Tout d'abord il va nous faloir le module "mysql.connector" sur VS.code</p>
        <p>Pour ce faire nous allons devoir mettre a jour le "pip" avec la commande: <span class="mot-clef">python -m
                pip
                install
                --upgrade
                pip</span>. Une
            fois la MàJ finit nous entrons la commande d'installation: <span class="mot-clef">pip install
                mysql-connector-python</span></p>
        <br>
        <h4>C'est bien beau tout ca Max mais ca veut dire quoi "Pip" ?</h4>
        <p>"Pip" est un gestionnaire de paquets pour Python. Il est utilisé pour installer et gérer des bibliothèques,
            des
            modules et des packages Python. Le nom "pip" est un récursif acronyme pour "Pip Installs Packages" ou, de
            manière plus formelle, "Pip Installs Python". Il simplifie le processus d'installation, de mise à jour et de
            gestion des dépendances pour les projets Python.</p>
        <br>
        <h4>Exemple simple d'utilisation de mysql.connector pour se connecter à une base de données MySQL et éxécuter
            une
            requête:</h4>
        <img src="assets/img/Python/creationliendb.png" alt="">
        <h4>Exemple vu en cour de connnection a une Base de données:</h4>
        <img src="assets/img/Python/ExempleDbPy.png" alt="">
        <div>
            <p><span class="mot-clef">import mysql.connector</span> est un module Python qui fournit une interface pour
                interagir avec des bases de données MySQL à partir de programmes Python. Il permet à votre code Python
                d'établir des connexions avec une base de données MySQL, d'exécuter des requêtes SQL et de manipuler les
                résultats.</p>
            <br>
            <p><span class="mot-clef">mycursor</span> est un objet de curseur dans la bibliothèque mysql.connector. Un
                curseur est essentiel lors de l'interaction avec une base de données, car il permet d'exécuter des
                requêtes
                SQL et de récupérer les résultats.</p>
            <ol>
                <li><span class="mot-clef">Création du curseur :</span></li>
                <p>mycursor = mydb.cursor(dictionary=True)</p>
                <br>
                <p>Ici, mydb.cursor() crée un objet de curseur à partir de la connexion à la base de données (mydb). Le
                    paramètre dictionary=True indique que le curseur doit retourner les résultats sous forme de
                    dictionnaires. Cela signifie que les résultats de chaque ligne seront stockés dans un dictionnaire
                    où
                    les noms de colonnes servent de clés.</p>
                <br>
                <li><span class="mot-clef">Exécution de requêtes SQL :</span></li>
                <p>mycursor.execute('SELECT * FROM villes_france_free')</p>
                <br>
                <p>Après la création du curseur, on peut utiliser ce curseur (mycursor) pour exécuter des requêtes SQL.
                    Dans
                    votre code, une requête de sélection est exécutée pour récupérer toutes les lignes de la table
                    'villes_france_free'.</p>
                <li><span class="mot-clef">Récupération des résultats :</span></li>
                <p>liste_ville = mycursor.fetchall()</p>
                <br>
                <p>Une fois la requête exécutée, les résultats peuvent être récupérés à l'aide de méthodes telles que
                    fetchone() pour une seule ligne ou fetchall() pour toutes les lignes. Dans votre code, fetchall()
                    est
                    utilisé pour récupérer toutes les lignes résultantes de la requête SQL.</p>
                <br>
                <p>En résumé, le mycursor est un objet qui agit comme une interface pour exécuter des requêtes SQL et
                    récupérer les résultats à partir de la base de données. Il facilite l'interaction entre votre
                    programme
                    Python et la base de données MySQL.</p>
            </ol>
        </div>
    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/footer.php' ?>


</body>

</html>