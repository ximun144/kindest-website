<?php

$name = $_POST['name'];
if (empty($name)) {
    header('Location: index.html');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le site le plus poli d'Internet</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>

        <div class="card" style="width:500px;">
            <div class="card-image">
                <img src="http://materializecss.com/images/sample-1.jpg" alt="image" style="width:500px">
                <span class="card-title">Pour <?= htmlspecialchars($name); ?></span>
                <a class="btn-floating halfway-fab waves-effect waves-light" href="index.html"><i class="material-icons">replay</i></a>
            </div>
            <div class="card-content">
                <p>Bien le bonjour <?= htmlspecialchars($name); ?>. Je vous offre une image, et je vous souhaite une très agréable journée ! A bientôt ! :)</p>
            </div>
        </div>

        <script	src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
