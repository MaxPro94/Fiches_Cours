<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifications PHP</title>
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
        <h1>Les vérifications de formulaire en PHP</h1>

        <h2>Qu'est-ce que c'est ?</h2>
        <p>Les vérifications de formulaire en PHP sont des procédures utilisées pour valider les données entrées par l'utilisateur dans un formulaire web. Elles permettent de s'assurer que les informations fournies respectent certains critères prédéfinis avant d'être traitées ou enregistrées.</p>

        <h2>À quoi servent-elles ?</h2>
        <p>Les vérifications de formulaire en PHP servent à plusieurs fins :</p>
        <ul>
            <li><strong>Garantir l'intégrité des données :</strong> Elles permettent de vérifier que les données saisies sont complètes, valides et cohérentes, en accord avec les attentes de l'application.</li>
            <li><strong>Assurer la sécurité :</strong> Elles contribuent à prévenir les attaques par injection de code malveillant, telles que les injections SQL, en validant les données entrées avant leur utilisation dans des requêtes ou leur enregistrement dans une base de données.</li>
            <li><strong>Améliorer l'expérience utilisateur :</strong> En signalant rapidement les erreurs de saisie à l'utilisateur, elles facilitent la correction des informations et offrent une expérience plus fluide.</li>
            <li><strong>Optimiser la performance :</strong> En évitant le traitement de données invalides, elles réduisent la charge serveur et améliorent les performances globales de l'application.</li>
        </ul>

        <h2>Comment les mettre en place ?</h2>
        <p>Les vérifications de formulaire en PHP sont généralement réalisées en utilisant des fonctions et des méthodes PHP dédiées, ainsi que des expressions régulières pour les cas plus complexes. Les étapes typiques comprennent :</p>
        <ol>
            <li>
                <strong>Vérification d'un champ obligatoire :</strong>
                <p>Pour garantir qu'un champ est rempli, on peut utiliser la fonction <code>empty()</code> pour vérifier s'il est vide. Par exemple :</p>
                <pre><code>&lt;?php
                    if (empty($_POST['nom'])) {
                        $errors[] = "Le champ nom est obligatoire.";
                    }
                    ?&gt;</code></pre>
                <img src="assets/img/phpverif/verif-nom.png" alt="">
                <p>Cette vérification empêche la soumission du formulaire si le champ 'nom' est laissé vide.</p>
            </li>
            <li>
                <strong>Vérification d'un format d'e-mail valide :</strong>
                <p>Pour valider un champ d'adresse e-mail, on peut utiliser la fonction <code>filter_var()</code> avec le filtre <code>FILTER_VALIDATE_EMAIL</code>. Par exemple :</p>
                <pre><code>&lt;?php
                    $email = $_POST['email'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors[] = "L'adresse e-mail n'est pas valide.";
                    }
                    ?&gt;</code></pre>
                <h4>Exemple pratique :</h4>
                <img src="assets/img/phpverif/verifmail.png" alt="">
                <p>Cette vérification s'assure que l'e-mail entré par l'utilisateur est au format correct.</p>
            </li>
        </ol>

        <p>En suivant ces étapes, les vérifications de formulaire en PHP assurent la fiabilité, la sécurité et la convivialité des applications web.</p>
    </div>

    <?php require 'assets/templates/footer.php' ?>
</body>

</html>