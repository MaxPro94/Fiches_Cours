<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
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
        <h1>JavaScript</h1>
        <br>
        <p>JavaScript est un langage utilisé pour des opérations front ou back. Dans la formation DEVWEB, nous l'utiliserons uniquement pour du front.</p>
        <p>C'est un langage qui rend le site plus dynamique et plus ergonomique. Nous pouvons grandement améliorer l'expérience de l'utilisateur grâce à ce langage.</p>
        <p>Nous l'utiliserons beaucoup dans le but de modifier le DOM (Document Object Model) ou pour écouter les opérations faites par l'utilisateur. Nous reviendrons sur ce concept un peu plus bas.</p>
        <br>
        <h3>Comment relier un fichier JS à une page HTML ?</h3>
        <img src="assets/img/JavaScript/connect.png" alt="">
        <p>Pour lier un fichier JS à une page HTML, il faut créer une balise script et mettre le fichier en source.</p>
        <p>Un fichier JavaScript est déclaré <span>.js</span>.</p>
        <br>
        <h4>Déclaration de variable</h4>
        <br>
        <p>Pour déclarer une variable en JS, nous avons plusieurs possibilités :</p>
        <ul>
            <li><span class="mot-clef">var</span> : Anciennement la seule façon possible de déclarer une variable, aujourd'hui nous éviterons cette méthode.</li>
            <li><span class="mot-clef">const</span> : Est utilisé pour déclarer des variables avec une valeur constante qui ne peut pas être réassignée.</li>
            <li><span class="mot-clef">let</span> : Le let permet de pouvoir réassigner une nouvelle valeur à la variable. C'est la méthode la plus utilisée en JavaScript.</li>
        </ul>
        <img src="assets/img/JavaScript/variables.png" alt="">
        <p>Il est important, lors de la déclaration d'une variable, de se demander si la variable va avoir besoin d'être réassignée. Si oui, on utilisera la déclaration <span>let</span>, sinon on utilisera <span>const</span>.</p>
        <br>
        <h4>Les boucles en JS</h4>
        <p>La logique des boucles ne diffère pas des autres langages déjà vus (Python, PHP).</p>
        <h5>Types de boucles :</h5>
        <h5>For :</h5>
        <img src="assets/img/JavaScript/boucle-for.png" alt="">
        <h5>While :</h5>
        <img src="assets/img/JavaScript/boucle-while.png" alt="">
        <h5>Foreach :</h5>
        <img src="assets/img/JavaScript/boucle-foreach.png" alt="">
        <p>En JavaScript, une méthode existe pour utiliser la boucle foreach, ce qui facilite le codage.</p>
        <br>
        <h4>Les méthodes :</h4>
        <p>Il existe énormément de fonctions en JS, je donnerai ci-dessous des exemples de fonctions utilisées couramment.</p>
        <p>Pour utiliser une fonction :</p>
        <div class="balises">
            <ul>
                <li class="mot-clef"><span>addEventListener()</span></li>
                <p>La méthode addEventListener est une fonctionnalité clé de JavaScript qui permet d'ajouter des écouteurs d'événements à des éléments du DOM (Document Object Model). Cette méthode permet de réagir à divers événements déclenchés par l'utilisateur ou par le navigateur, tels que des clics de souris, des pressions de touches, des mouvements de la souris, etc.</p>
                <li class="mot-clef"><span>querySelector() / All</span></li>
                <p>La méthode querySelector est une fonctionnalité de JavaScript qui permet de sélectionner un élément du DOM (Document Object Model) en utilisant un sélecteur CSS et de renvoyer le premier élément correspondant trouvé.</p>
                <li class="mot-clef"><span>contains()</span></li>
                <p>La méthode contains est une fonctionnalité de JavaScript qui est utilisée pour vérifier si un élément DOM (Document Object Model) contient un nœud enfant spécifié, c'est-à-dire s'il s'agit d'un descendant direct ou indirect de cet élément.</p>
                <li class="mot-clef"><span>remove()</span></li>
                <p>La méthode remove() est une fonctionnalité de JavaScript qui permet de supprimer un élément du DOM (Document Object Model), c'est-à-dire de retirer complètement un nœud de l'arborescence du document.</p>
                <li class="mot-clef"><span>add()</span></li>
                <p>La méthode add() n'est pas une méthode standard en JavaScript, mais elle est souvent utilisée dans le contexte de la manipulation de classes CSS.</p>
                <li class="mot-clef"><span>alert()</span></li>
                <p>La fonction alert() en JavaScript est une fonction intégrée qui affiche une boîte de dialogue modale avec un message et un bouton "OK". Elle est souvent utilisée pour alerter l'utilisateur sur quelque chose d'important ou pour afficher des informations d'erreur.</p>
            </ul>
        </div>
    </div>
    <?php require 'assets/templates/footer.php' ?>
</body>

</html>