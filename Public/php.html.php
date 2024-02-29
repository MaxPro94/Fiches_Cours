<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
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

<body>
    <?php require 'assets/templates/header.php' ?>
    <div class="principal">
        <h1>Php c'est quoi ?</h1>
        <br>
        <p>PHP, acronyme de "Personal Home Page" ou "Hypertext Preprocessor" et créé par Rasmus Lerdorf, est un langage de programmation côté serveur principalement conçu pour le développement web. Initialement développé en 1994 par Rasmus Lerdorf, PHP est un langage open source largement utilisé pour la création de sites web dynamiques.</p>
        <p>La syntaxe de PHP est similaire à celles utilisées par C ou C++. Ce langage est à utiliser dans le contexte d'une architecture en trois tiers.</p>
        <p>L'objectif du langage PHP est de rendre les pages web dynamiques. Par dynamique, on entend l'échange de données entre le client et la base de données.</p>
        <p>Un fichier .php peut comporter à la fois du langage PHP et du langage HTML.</p>
        <a class="liens" href="https://www.php.net/manual/fr/langref.php" target="_blank">Ton livre de chevet si tu veut être le Boss final.</a>
        <br>
        <br>
        <h2>Voici la syntaxe pour écrire du langage PHP :</h2>
        <img src="assets/img/Php/syntaxe_php.png" alt="">
        <p>Une foit la balise ouverte nous pouvons tapez tout notre code Php dedans.</p>
        <br>
        <h3>Qu'elle est la meilleure syntaxe ?</h3>
        <img src="assets/img/Php/best_syntaxe.png" alt="">
        <p>Ici nous avons 3 syntaxes différentes, elles sont toutes interpreter, mais il faut suivre certaines conventions, afin de rendre le code moins complexe et plus agréable visuelement.</p>
        <p>Il faut comprendre que PHP est un langage plus intelligent que HTML d'une certaine manière ; il parvient à interpréter certaines choses sans qu'il soit nécessaire de les spécifier explicitement. Mais n'allons pas trop vite en besogne.</p>
        <br>
        <h3>Syntaxes des variables :</h3>
        <img src="assets/img/Php/variables_php.png" alt="">
        <p>Comme nous pouvons le constater la déclaration d'une variable commence toujours par le sugne "$" et finit toujours par un ";".</p>
        <h3>Spécificiter de php pour les addtions :</h3>
        <img src="assets/img/Php/addition_php.png" alt="">
        <p>Comme nous pouvons le voir, contrairement a Python le language peut additioner un chiffre ou un nombre mit entre 'cotes'. </p>
        <br>
        <h3> Opérateur de concaténation :</h3>
        <img src="assets/img/Php/concatenation_php.png" alt="">
        <p>La concaténation en php ce fait avec le ".", nous pouvons aussi remarquer que les chaines de caractères se mette entre cotes ('') le language accepteras aussi les guillemets mais par conventions nous devont le mettre entre cotes.</p>
        <p>Il faut tout de même preciser que dans les guillemets nous pouvons placer une variable, se qui n'est pas possible avec les cotes ('')</p>
        <br>
        <h3>Opérateurs logique :</h3>
        <img src="assets/img/Php/operateur_logique.png" alt="">
        <p>Ici la syntaxe des opérateurs logiques et plus dur et un peut moins logique que sur d'autres languages.</p>
        <br>
        <h3>Opérateur de Comparaison :</h3>
        <img src="assets/img/Php/comparateur_php.png" alt="">
        <p>Les opérateurs de Comparaison ne sont pas simple non plus a retenir, mais avec de la pratique tout cela s'imprime bien.</p>
        <br>
        <h3>Echo ou var_dump() ?</h3>
        <img src="assets/img/Php/var_dump.png" alt="">
        <p>Il faut bien saisir la différence entre echo et var_dump(), la deuxieme solution nous permettre d'avoir des informations détaillées sur la variable "$titre" (taille (pour les tableaux), le type et la valeur exact). Il faut considerer "echo" comme un simple print, un affichage simple.</p>
        <br>
        <h3>Les fonctions utiles :</h3>
        <img src="assets/img/Php/fonctions_utiles.png" alt="">
        <p>Nous pouvons voir les fonctions utiles comme des conditions ou des propriétées.</p>
        <br>
        <h3>Les contrôles :</h3>
        <img src="assets/img/Php/structure_controle.png" alt="">
        <p>Ici nous effectuons des contrôles, comme avec python et ses if/elif/else.</p>
        <p>Si "nani" est egal a "nananere" alors faire "nanani + nananere"</p>
        <br>
        <h3>Exemple de boucle :</h3>
        <img src="assets/img/Php/exemple-contenu.png" alt="">
        <h4>Explications :</h4>
        <img src="assets/img/Php/appel-page-co.png" alt="">
        <p>Ce code appel un page appelée db-connect.php, c'est cette page qui va nous permettre de ce connecter a la base de données voulu</p>
        <p>Voici le contenu de la page en question:</p>
        <img src="assets/img/Php/connect.png" alt="">
        <br>
        <br>
        <p>Nous donnons la valeur comportant la requete SQL souhaiter a une variable $query1 puis nous demandons que la requete $query1 incremente les resultats dans la variable $resultcit</p>
        <p>$dbh(La base de données) ->(effectue) query($query1)(La fonction(execute la $variable) )</p>
        <img src="assets/img/Php/requete.png" alt="">
        <br>
        <img src="assets/img/Php/boucle&if.png" alt="">
        <h4>Traduction de la boucle en pseudo-code:</h4>
        <p>SI $variable obtient plus que 0 ligne alors ouvrir une boucle TantQue</p>
        <p>$row = $resultcit->fetch(PDO::FETCH_ASSOC): Cette partie est divisée en deux actions.</p>
        <p>$row = ...: Cette partie affecte le résultat de la méthode fetch() à la variable $row. Ainsi, à chaque itération de la boucle, une nouvelle ligne de résultat est stockée dans cette variable.</p>
        <p>$resultcit->fetch(PDO::FETCH_ASSOC): C'est une méthode de l'objet $resultcit (qui est probablement le résultat d'une requête SQL exécutée avec PDO) qui récupère la prochaine ligne de résultats de la requête sous forme d'un tableau associatif. La constante PDO::FETCH_ASSOC spécifie que les résultats doivent être récupérés sous forme de tableau associatif, où les clés sont les noms des colonnes de la table.</p>
        <br>
        <img src="assets/img/Php/incrementation.png" alt="">
        <p>Ici nous entrons les resultats obtenues, dans les balises HTML desirées.</p>
        <p>N'oubliez pas le format, nous allons chercher nos datas dans une db il faut donc appeler les noms des colonnes souhaitées(['content'], ['name']).</p>
        <a class="liens" href="php-orga.html.php">Comment structurer ses fichiers PHP ?</a>
        <br>
        <h3>Les vérifications avec PHP</h3>
        <br>
        <p>PHP permet de réaliser plusieurs vérifications sur les données entrées par l'utilisateur, que ce soit en utilisant des méthodes et des fonctions déjà présentes dans la bibliothèque PHP ou en recourant à des expressions régulières pour les saisies de texte.</p>
        <p>Il est essentiel de ne jamais faire aveuglément confiance aux données saisies par l'utilisateur. Pour cette raison, lors de la manipulation de formulaires, il est crucial d'appliquer plusieurs vérifications. Cela permet non seulement de garantir la qualité des données, mais aussi de renforcer la sécurité en évitant les injections SQL.</p>
        <p>En appliquant ces vérifications, on s'assure que les informations saisies respectent les critères définis. Par exemple, pour un formulaire de saisie d'e-mail, on vérifie que l'adresse saisie correspond bien à un format d'e-mail valide. Pour un champ numérique, on s'assure que seuls des chiffres sont entrés.</p>
        <p>Une fois ces vérifications effectuées, on peut en toute sécurité transférer les données saisies par l'utilisateur vers la base de données, en garantissant ainsi l'intégrité des informations stockées.</p>
        <a class="liens" href="php-verif-form.html.php">Plus d'info sur les vérifications en PHP ?</a>
    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
            keyboard_arrow_up
        </span></a>
    <?php require 'assets/templates/footer.php' ?>
</body>

</html>