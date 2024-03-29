<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & CSS</title>
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
        <h1>HTML & CSS</h1>
        <br>
        <p>HTML (Hypertext Markup Language) et CSS (Cascading Style Sheets) sont deux langages fondamentaux utilisés
            pour
            créer des pages web</p>
        <h2>HTML (Hypertext Markup Language) By <cite>Tim Berners-Lee</cite> :</h2>
        <br>
        <img id="zom" src="assets/img/Cour HTML & CSS/Exemple code HTML.png" alt="Code HTML">
        <p>HTML est un langage de balisage utilisé pour structurer le contenu d'une page web.</p>
        <p>Il utilise des balises pour définir différents éléments tels que titres, paragraphes, listes, liens, images,
            etc.
        </p>
        <p>HTML fournit la structure de base d'une page web en indiquant comment le contenu doit être organisé.</p>
        <br>
        <p>En HTML il existe deux types de balises, les balises block et les balises inline.</p>
        <ul>
            <h4>Balises block (éléments de type bloc) :</h4>
            <li>Les balises block occupent tout l'espace horizontal disponible sur la ligne où elles se trouvent, ce qui signifie qu'elles commencent sur une nouvelle ligne et s'étendent sur toute la largeur disponible jusqu'à ce qu'elles rencontrent un autre élément de type bloc.</li>
            <li>Par défaut, les balises block commencent sur une nouvelle ligne et poussent les éléments qui les précèdent et qui les suivent vers le haut et vers le bas, respectivement.</li>
            <li>Exemples de balises block : div, p, h1 à h6, ul, ol, li, table, form, etc.</li>
            <li>J'aime voir ca comme des balises de mises en fome du DOM</li>
        </ul>
        <br>
        <ul>
            <h4>Balises inline (éléments de type en ligne) :</h4>
            <li>Les balises inline ne commencent pas sur une nouvelle ligne et occupent uniquement la quantité d'espace nécessaire pour afficher leur contenu.</li>
            <li>Les balises inline ne provoquent pas de rupture de ligne et permettent aux éléments qui les précèdent et qui les suivent de rester sur la même ligne.</li>
            <li>Exemples de balises inline : span, a, strong, em, img, input, button, etc.</li>
            <li>J'aime voir ca comme des balises de mises de style</li>
        </ul>
        <br>
        <h2>CSS (Cascading Style Sheets) :</h2>
        <br>
        <img id="zom" src="assets/img/Cour HTML & CSS/Exemple code CSS.png" alt="Code CSS">
        <p>CSS est un langage de style utilisé pour définir la présentation et l'apparence des éléments HTML.</p>
        <p>Il permet de contrôler des aspects tels que la couleur, la police, la taille, la mise en page et d'autres
            propriétés visuelles.</p>
        <p>En utilisant CSS, vous pouvez séparer le style du contenu, ce qui facilite la maintenance et la mise à jour
            du
            design d'un site web.</p>
        <br>
        <p>En résumé, HTML définit la structure et le contenu d'une page web, tandis que CSS contrôle la mise en forme
            et
            l'apparence de ces éléments. Ensemble, HTML et CSS sont essentiels pour la création de sites web modernes et
            bien conçus.</p>

        <h2>Les outils et applications pour aider sur ces languages</h2>
        <p>Il existe plusieurs sites aidant à concevoir la structure d'un site web ainsi que son style. Pour le style,
            il
            existe par exemple des bibliothèques ou des frameworks.</p>
        <br>
        <p><span>Framework :</span> Un framework CSS est un ensemble préétabli de fichiers CSS, parfois accompagné de
            composants JavaScript, qui offre une base structurée et réutilisable pour le développement de sites web. Ces
            frameworks facilitent la conception et la mise en page en fournissant des styles prédéfinis, des grilles,
            des
            composants et d'autres éléments, ce qui permet aux développeurs de gagner du temps en évitant de créer tout
            depuis zéro.</p>
        <ul>
            <h3>Exemples de Framework disponibles:</h3>
            <li class="mot-clef">Bootstrap :</li>
            <p>Développé par Twitter, Bootstrap est l'un des frameworks les plus largement utilisés. Il offre une grille
                responsive, des composants prêts à l'emploi (boutons, formulaires, etc.) et des styles de base.</p>
            <li class="mot-clef">Foundation :</li>
            <p>Foundation est un framework CSS développé par Zurb. Il propose également une grille responsive, des
                éléments
                d'interface utilisateur prêts à l'emploi, et il est flexible pour s'adapter à différents types de
                projets.
            </p>
            <li class="mot-clef">Bulma :</li>
            <p> Bulma est un framework CSS basé sur Flexbox. Il est simple à utiliser et comprend une variété de
                composants
                qui peuvent être combinés pour créer une interface utilisateur moderne.</p>
            <li class="mot-clef">Tailwind CSS :</li>
            <p>Tailwind CSS adopte une approche différente en fournissant des classes utilitaires basées sur des
                mots-clés.
                Cela permet une personnalisation fine en utilisant ces classes directement dans le code HTML.</p>
            <li class="mot-clef">Materialize :</li>
            <p>Basé sur le concept de design Material de Google, Materialize offre des composants CSS prédéfinis pour
                créer
                des interfaces utilisateur conformes à ce style.</p>
        </ul>
        <p>L'utilisation d'un framework CSS peut accélérer le processus de développement, assurer une cohérence visuelle
            et
            faciliter la maintenance du code. Cependant, il est important de choisir un framework adapté aux besoins
            spécifiques de votre projet.</p>
        <br>
        <p><span>Bibliothèques :</span> Contrairement à un framework CSS qui fournit une structure complète pour le
            développement web, une bibliothèque CSS est un ensemble de styles réutilisables que vous pouvez utiliser de
            manière modulaire dans votre projet sans avoir à adopter une structure globale prédéfinie.</p>
        <p>Les bibliothèques CSS sont souvent plus légères et flexibles, permettant aux développeurs de sélectionner
            uniquement les composants ou les styles dont ils ont besoin.</p>
        <ul>
            <h3> Voici quelques exemples de bibliothèques CSS :</h3>
            <li class="mot-clef">Normalize.css :</li>
            <p> Cette bibliothèque vise à normaliser le rendu des styles par défaut des navigateurs, offrant ainsi une
                base
                plus cohérente pour le développement.</p>
            <li class="mot-clef">Animate.css :</li>
            <p>Elle fournit une collection d'effets d'animation préconçus que vous pouvez facilement appliquer à vos
                éléments HTML pour ajouter du dynamisme à votre site.</p>
            <li class="mot-clef">Font Awesome :</li>
            <p> Bien que principalement connue pour ses icônes, Font Awesome peut également être considérée comme une
                bibliothèque CSS car elle fournit des classes pour styliser les icônes sans nécessiter de fichiers
                image.
            </p>
            <li class="mot-clef">Hover.css :</li>
            <p> Cette bibliothèque propose une variété d'effets de survol pour les éléments, tels que des animations,
                des
                transitions et des changements de couleur.</p>
            <li class="mot-clef">Milligram :</li>
            <p>Une bibliothèque CSS légère qui fournit une feuille de style de base pour la typographie et les éléments
                HTML, sans imposer un design spécifique.</p>
        </ul>
        <p>Les bibliothèques CSS peuvent être utiles lorsque vous avez besoin de fonctionnalités spécifiques sans
            vouloir
            adopter l'ensemble d'une structure de framework. Elles vous offrent la flexibilité de sélectionner et
            d'intégrer
            uniquement les styles dont vous avez besoin dans votre projet.</p>

        <h3>Quelques rappels des balises HTML:</h3>
        <br>
        <div class="balises">
            <ul>
                <li class="mot-clef">"div"</li>
                <p>On peut voir ceci comme un container</p>
                <li class="mot-clef">"br"</li>
                <p>Retour a la ligne</p>
                <li class="mot-clef">"pre"</li>
                <p>Prise en compte des retours chariot</p>
                <li class="mot-clef">"cite"</li>
                <p>Sert a definir un auteur ( Petite mise de style )</p>
                <li class="mot-clef">"rem"</li>
                <p>Roots element ; Element racine</p>
                <li class="mot-clef">"em"</li>
                <p>Ecriture en cours</p>
                <li class="mot-clef">"ol"</li>
                <p>Order list ; Liste avec un ordre</p>
                <li class="mot-clef">"ul"</li>
                <p>Unorder list ; List a puce </p>
                <li class="mot-clef">"li"</li>
                <p>List item ; Objet de la liste</p>
                <li class="mot-clef">"p"</li>
                <p>Paragraphe</p>
                <li class="mot-clef">"h1, h2, h3"</li>
                <p>Sert a identifier des titres, avec une hierarchie.</p>
                <li class="mot-clef">"span"</li>
                <p>Sert a identifier un element (mot) dans un paragraphe</p>
                <li class="mot-clef">"a"</li>
                <p>Permet de mettre un lien externe</p>
                <li class="mot-clef">"head"</li>
                <p>C'est la "carte d'identité" du site web</p>
                <li class="mot-clef">"header"</li>
                <p>C'est la tete de notre site, l'affichage au plus haut. Cette partie se remplie generalment par une
                    barre de naviguation.</p>
                <li class="mot-clef">"body"</li>
                <p>Le corps du site, il contiendras tout le contenu editorial.</p>
                <li class="mot-clef">"footer"</li>
                <p>Les pieds du site, C'est ici que ce met généralement les mentions legals, liens vers ses réseaux et
                    d'autre informations pas très importante pour l'utilisateur.</p>
                <li class="mot-clef">"form"</li>
                <p>Permet d'indentifier un formulaire</p>
                <a class="liens" href="FormulaireHTML.html">Comment faire un formulaire ?</a>
                <br>
                <a class="liens" href="CSS.html">Plus d'info sur CSS ? C'est par ici !</a>
            </ul>
        </div>
    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/templates/footer.php' ?>
</body>

</html>