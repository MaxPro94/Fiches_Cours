<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citation</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<?php
require 'assets/data/db-connect.php'; ?>
<?php
$query1 = "SELECT * FROM citation ORDER BY RAND() LIMIT 1";
$resultcit = $dbh->query($query1);
?>

<?php
if ($resultcit->rowCount() > 0) {
    while ($row = $resultcit->fetch(PDO::FETCH_ASSOC)) {
?>
        <a class="box" href="cours.html.php">
            <p><?= $row['content'] ?></p>
            <h2><i>- <?= $row['name'] ?></i></h2>
        </a>

        <div class="background"></div>
<?php
    }
}
?>