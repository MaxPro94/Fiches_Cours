<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les commandes CMD</title>
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
        <h1>Les commandes CMD :</h1>
        <br>
        <p>La commande CMD, qui signifie "Command Prompt" en anglais, est une interface en ligne de commande présente
            dans
            les systèmes d'exploitation Windows. C'est un outil qui permet aux utilisateurs d'interagir avec le système
            d'exploitation en utilisant des commandes textuelles.</p>
        <p>Voici quelques informations importantes concernant CMD :</p>
        <br>
        <li>Ligne de Commande : CMD fournit une interface textuelle où les utilisateurs peuvent saisir des commandes
            pour
            effectuer diverses tâches, comme la navigation dans les répertoires, l'exécution de programmes, la gestion
            de
            fichiers, etc.</li>
        <li>Commandes : CMD prend en charge un ensemble de commandes intégrées telles que cd (changement de répertoire),
            dir
            (liste des fichiers et dossiers), copy (copier des fichiers), del (supprimer des fichiers), etc.</li>
        <li>Scripting : En plus de l'utilisation interactive, CMD permet également l'exécution de scripts batch, qui
            sont
            des fichiers texte contenant une séquence de commandes. Ces scripts peuvent automatiser des tâches
            répétitives.
        </li>
        <li>Exécution d'Applications : CMD permet également d'exécuter des applications en saisissant le nom de
            l'exécutable
            dans la ligne de commande. Cela peut être utile pour lancer des programmes directement depuis la ligne de
            commande.</li>
        <li>Accès à des Outils Système : CMD donne accès à divers outils système et utilitaires en utilisant des
            commandes
            spécifiques. Par exemple, des outils tels que ipconfig pour afficher la configuration IP, sfc pour la
            vérification des fichiers système, etc.</li>
        <li>Powershell : Sur les versions plus récentes de Windows, PowerShell est également disponible en tant
            qu'interface
            en ligne de commande plus puissante et avancée par rapport à CMD.</li>
        <br>
        <p>Pour ouvrir CMD sur Windows, vous pouvez appuyer sur la touche Windows + R, taper "cmd" et appuyer sur
            Entrée, ou
            rechercher "Invite de commandes" dans le menu Démarrer. Il existe également une variante graphique appelée
            PowerShell qui offre plus de fonctionnalités et de puissance.</p>
        <br>
        <br>

        <div class="principal">
            <h2>Type de language SQLite :</h2>
            <img src="assets/img/Commandes_CMD/Exemple_creation_db.png" alt="">
            <img src="assets/img/Commandes_CMD/Exemple_creation_db2..png" alt="">
        </div>
        <br>
        <div class="principal">
            <h2>Exercices et correction:</h2>
            <p>Les exercices presenter si dessous sont disponibles sur le site : "sql.sh".</p>
            <p>Veillez a bien DL les deux DB, afin de les ouvrirs et d'effectuer les exercices.</p>
            <img src="assets/img/Commandes_CMD/ExoSQL/PrérequisExo.png" alt="">
            <p>Si cette etape vous est inconnue je vous renvoie a la page "WAMP" pour toutes les informations
                nécéssaires.
            </p>
            <h2>Les Exercices :</h2>
            <img src="assets/img/Commandes_CMD/ExoSQL/TotalExoSQL.png" alt="">
            <ul>
                <li><span>Exercice 1 :</span></li>
                <p>Nous allons selectionner les <span>COLONNES</span> "ville_nom" et "ville_population" qui se trouve ou
                    ?
                    Dans la <span>TABLE</span> "villes_france_free" quelles <span>WHERE</span> ? "ville_population_2012"
                    DECROISSANTS LIMITER aux 10 premiers.</p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo1MySQL.png" alt="">
                <br>
                <br>
                <li><span>Exercice 2 :</span></li>
                <p>Nous allons selectionner les <span>COLONNES</span> "ville_nom" et "ville_surface" qui se trouve ou ?
                    Dans
                    la <span>TABLE</span> "villes_france_free" quelles <span>WHERE</span> ? "ville_surface"
                    <span>LIMITER
                        aux 50 premiers</span> resultats.
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo2MySQL.png" alt="">
                <br>
                <br>
                <li><span>Exercice 3 :</span></li>
                <p>Nous allons selectionner <span>TOUT = (*)</span> Ou ça ? Dans la <span>TABLE</span>
                    "villes_france_free"
                    ou ? Dans la <span>COLONNE</span> "ville_code_postal" <span>WHERE</span> quelles conditions ?
                    <span>COMMENCE PAR 97 =
                        ('97%')</span>.
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo3MysQL.png" alt="">
                <p><span>WHERE</span>est un mot clef qui doit etre suivis de conditions</p>
                <br>
                <br>
                <li><span>Exercice 4 :</span></li>
                <p>Nous allons selectionner les <span>COLONNES</span> "ville_nom","ville_population " et
                    "departement_code"
                    Ou ça ? Dans LES <span>TABLES</span> "villes_france_free" et "departement" <span>WHERE</span>
                    quelles
                    conditions ?
                    "ville_departement" = "departement_code" dans <span>L'ORDRE</span> "ville_population_2012"
                    <span>DECROISSANT LIMITER aux 10</span> premiers resultats.
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo4MySQL.png" alt="">
                <br>
                <br>
                <li><span>Exercice 5 :</span></li>
                <p>Nous allons selectionner les <span>COLONNES</span> "departement_nom","departement_code",
                    <span>COMPTER</span> le nombre de ville_id dans quelle <span>TABLES</span> ?
                    "villes_france_free","departement" <span>WHERE</span> quelles conditions ? "departement_code" =
                    "ville_departement" <span>GROUPER PAR</span> "departement_code".
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo5MySQL.png" alt="">
                <p>Nous pouvons optimiser cette requête afin quelle soit plus clair :</p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo5MySQLopti.png" alt="">
                <p>Dans cette requête nous pouvons constater qu'une variable <span>'nombre_ville'</span> a etais créé,
                    dans
                    laquelle nous ajouterons la valeur calculer "ville_id". </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/ExoMySQL5Finish.png" alt="">
                <p>Voila a quoi ressemble une organisation d'ecriture des requetes bien plus claire.</p>
                <br>
                <br>
                <li><span>Exercice 6 :</span></li>
                <p>Nous allons selectionner les <span>COLONNES</span> "departement_nom","departement_code, on lui
                    demande
                    ensuite de <span>calculer le total</span> de "ville_surface" que l'on met dans une nouvelle variable
                    appeler 'superficie', tout ca ce trouve dans les <span>TABLES</span>
                    "villes_france_free","departement"
                    <span>WHERE</span> quelles ? "departement_code" = "ville_departement" <span>GROUPER PAR</span>
                    "departement_code" dans <span>L'ORDRE DECROISSANT LIMITER A 10</span> dans la variable 'superficie'.
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo6MySQL.png" alt="">
                <br>
                <br>
                <li><span>Exercice 7 :</span></li>
                <p>Nous allons selectionner tout et demander de tout <span>COMPTER</span> dans quelle <span>TABLE</span>
                    ?
                    "villes_france_free" Quelle <span>LIGNE</span> ? "ville_nom" ajout d'une contrainte : <span>LIKE qui
                        signifie "preference" 'Saint-%' (Qui commence par 'Saint-')</span>.</p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo7MySQL.png" alt="">
                <br>
                <br>
                <li><span>Exercice 8 :</span></li>
                <p>Nous allons slectionner la <span>COLONNE</span> "ville_nom" de <span>COMPTER</span> le total et de la
                    mettre dans une <span>VARIABLE</span> appeler 'cpt'. Dans quelle <span>TABLE</span> ?
                    "villes_france_free" <span>GOUPER PAR</span> "ville_nom", <span>HAVING > 1 : seulement ceux qui ont
                        plusieurs fois le meme nom. Donc plus grand que 1.</span> Dans <span>L'ORDRE DECROISSANT</span>.
                </p>
                <img src="assets/img/Commandes_CMD/Cour2ExoSQLite/Exo8MySQL.png" alt="">
            </ul>
        </div>
        <div class="commandes">
            <h2>Listes des commandes les plus generiques SQLite :</h2>
            <a href="requete_SQLite.html">Requètes SQLite / SQL.sh</a>
            <ul>
                <li><span class="def">WHERE :</span> Mot clef suivis de conditions</li>
                <p>Exemple :</p>
                <img src="assets/img/Commandes_CMD/Exemple_WHERE.png" alt="">
                <br>
                <li><span class="def">VARCHAR :</span> Limitation de la chaine de caractère ( 255 )</li>
                <br>
                <li><span class="def">INT :</span> Uniquement des nombres</li>
                <br>
                <li><span class="def">Delete :</span> Detruire</li>
                <br>
                <li><span class="def">SELECT / SELECT * :</span> Selectionner / Selectionner toutes les colonnes</li>
                <br>
                <li><span class="def">VALUES (), (), () :</span> Ajouter des valeurs</li>
                <br>
                <li><span class="def">CREATE TABLE :</span> Créé une table</li>
                <br>
                <li><span class="def">INSERT INTO :</span> Inserer dans</li>
                <br>
                <li><span class="def">UPDATE :</span> Mise a jour definitive</li>
                <br>
                <li><span class="def">NOT NULL :</span> Obligation pour l'utilisateur de remplir la ligne demander</li>
                <p>
                <h3>Exemple :</h3>
                </p>
                <img src="assets/img/Commandes_CMD/CMD1.png" alt="">
                <li><span class="def">DEFAULT :</span> Si la ligne n'est pas rempli on donne un status par defaut.</li>
                <p>
                <h3>Exemple :</h3>
                </p>
                <img src="assets/img/Commandes_CMD/CMD2.png" alt="">
                <br>
                <li><span class="def">PRIMARY KEY :</span> Rendre la colonne unique</li>
                <br>
                <li><span class="def">AUTOINCREMENT :</span> Attribut seul un numéro si la colonne n'est pas remplie.
                </li>
                <br>
                <li><span class="def">SMALLINT :</span> Pas plus que 255</li>
                <br>
                <li><span class="def">UNIQUE :</span> Obligation que la ligne soit unique</li>
                <br>
                <li><span class="def">DROP TABLE IF EXISTS :</span> Detruit la table si elle existe</li>
                <p>
                <h3>Exemple :</h3>
                </p>
                <img src="assets/img/Commandes_CMD/CMD3.png" alt="">
                <li>'B%', '%B', '%B%' : Qui commence par B, finit par un B, Contient un B</li>
                <p>
                <h3>Exemple :</h3>
                </p>
                <img src="assets/img/Commandes_CMD/CMD4.png" alt="">
                <br>
                <li><span class="def">.tables :</span> Afficher les tables</li>
                <br>
                <li><span class="def">.help :</span> Voir les commandes "."</li>
                <br>
                <li><span class="def">.header on :</span> Voir les entêtes</li>
                <br>
                <li><span class="def">name_table.name_colonne :</span> Est aussi accepter pour sdes selections
                    complementaires.</li>
                <br>
                <li><span class="def">SUM(name_colonne) :</span> Calculer la somme total de la colonne souhaité.</li>
                <br>
                <li><span class="def">AVG(name_colonne) :</span> Fait la moyenne de la colonne souhaité</li>
                <br>
                <li><span class="def">REPLACE :</span> Remplacement de l'affichage demander.</li>
                <br>
                <li><span class="def">DISTINCT :</span> Supprime les doublons.</li>
                <p>A placer juste aprés le "SELECT"</p>
                <br>
                <li><span class="def">AS :</span> Renommer une colle ou une table.</li>
                <br>
                <li><span class="def">EXISTS :</span> Savoir si il y'a une presence ou non de la ligne</li>
                <br>
                <li><span class="def">GROUP BY :</span> Elle permet de diviser les résultats en groupes en fonction des
                    valeurs communes dans une ou plusieurs colonnes spécifiées. Après le regroupement, vous pouvez
                    appliquer
                    des fonctions d'agrégation (telles que COUNT, SUM, AVG, MAX, MIN) pour effectuer des calculs sur
                    chaque
                    groupe.</li>
                <p>
                <h3>Exemple et explications :</h3>
                </p>
                <p>Supposons que nous avons une table "commandes" avec les colonnes "id_client", "date_commande" et
                    "montant". Nous voulons obtenir le montant total des commandes pour chaque client. Nous pouvons
                    utiliser
                    la clause 'GROUP BY'de la manière suivante :</p>
                <img src="assets/img/Commandes_CMD/ExempleGROUP_BY.png" alt="">
                <p>Dans cet exemple, la clause 'GROUP BY id_client'egroupe les résultats par la colonne "id_client". La
                    fonction d'agrégation 'SUM(montant)' est alors appliquée à chaque groupe pour calculer le montant
                    total
                    des commandes pour chaque client.</p>
                <br>
                <li><span class="def">ORDER BY :</span> Cela permet de trié par ordre de la colonne souhaiter (ORDER BY
                    nom_colonne ;)</li>
                <p>Nous pouvons ajouter une "DESC" a la fin de la condition afin de trier par ordre decroissant, nous
                    pouvons aussi ajouter plusieurs colonnes.</p>
                <h3>Exemple :</h3>
                <p>ORDER BY prix DESC, titre, durée;</p>
                <p>Cette ligne de code auras pour but de triée dans l'ordre des prix mais si le meme prix est trouver
                    pour
                    deux films alors il les trieras par nom et si deux films on le meme nom il les trieras par la durée.
                </p>
                <p>Le second champs s'applique uniquements aux lignes qui ont des valeurs identiques pour le premier
                    champ.
                    Ainsi de suite si l'on rajoute encore des champs.</p>
                <p><span class="def">!!! UN "ORDER BY" SE MET TOUJOURS EN FIN DE REQUETE !!!</span></p>
                <br>
                <li><span class="def">HAVING() :</span>La clause HAVING en SQL est utilisée en conjonction avec la
                    clause
                    GROUP BY pour filtrer les résultats d'une requête basée sur des conditions qui s'appliquent aux
                    groupes
                    créés par la clause GROUP BY. En d'autres termes, HAVING est utilisé pour appliquer une condition
                    aux
                    groupes, tandis que la clause WHERE est utilisée pour appliquer des conditions aux lignes
                    individuelles.
                </li>
                <br>
                <li><span class="def">LEFT OUTER JOIN :</span>Lorsque l'instruction LEFT OUTER JOIN est ajoutée, le
                    serveur
                    SQL affiche les éléments qui sont présent dans les deux tables de la jointure MAIS aussi les
                    éléments
                    qui sont présents uniquement dans la table indiquée par le FROM</li>
                <br>
                <li><span class="def">INNER JOIN :</span>L'instruction INNER JOIN sert a afficher les seulement les
                    éléments
                    présents dans les deux tables.</li>
                <br>
                <li><span class="def">IN :</span> L'instruction "IN" permet de definir une liste de valeurs possible
                    pour un
                    champ.</li>
                <p>Exemple d'utilisation : SELECT * FROM Films WHERE codefilm IN(1, 2, 6)</p>
                <p>Il va nous donner seulement les lignes de la table Films auxquel correspond le codefilm 1, 2 et 6.
                </p>
                <br>
                <h3>Petit recap des utilisations des conditions :</h3>
                <p>Une condition permet de choisir les lignes que l'on affiche.</p>
                <p>Une condition s'effectue avec l'instruction <span>WHERE</span></p>
                <p>Pour qu'une ligne soit affichée, elle doit respecter tous les critères de restriction indiqués avec
                    un
                    <span>AND</span>
                </p>
                <p>Par contre avec un <span>OR</span> il suffit de respecter au moins 1 des critères.</p>
                <p>Lorsque le critère de restriction contient une chaine de caractère ou une date, celle-ci doivent être
                    entourées de <span>"celle-ci"</span></p>
                <p>Lorsque l'on souhaite afficher toutes les lignes dont la valeur d'un champ entre dans intervalle, on
                    utilise l'instruction <span>BETWEEN</span></p>
                <p>L'instruction <span>LIKE</span> permet de comparer deux chaines de caractères. Dans ce cadre,
                    <span>%</span> remplace 0 ou plusieurs caractères alor que <span>_</span> en remplace forcement 1
                    seul.
                </p>
                <p>Pour comparer la valeur d'un champ a une liste de valeur on utilise l'instruction <span>IN</span></p>
                <li><span class="def"></span></li>
                <li><span class="def"></span></li>
                <li><span class="def"></span></li>
                <li><span class="def"></span></li>
                <li><span class="def"></span></li>
                <li><span class="def"></span></li>
                <li><span class="def">Les operateurs de comparaison :</span></li>
                <p><span>"="</span> Egal</p>
                <p><span>"<"< /span> Inferiereur à</p>
                <p><span>">"</span> Superieur à</p>
                <p><span>"<="< /span> Inferieur ou egal à</p>
                <p><span>">="</span> Superieur ou egal à</p>
                <p><span>"<> ou !="</span> Diferrent de</p>

                <li></li>
            </ul>
        </div>
    </div>

    <a id="ancre" href="#Logo"><span class="material-symbols-outlined">
        keyboard_arrow_up
        </span></a>
<?php require 'assets/templates/footer.php' ?>


</body>

</html>