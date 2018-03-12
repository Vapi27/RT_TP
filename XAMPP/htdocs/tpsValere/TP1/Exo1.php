<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    <a href="?message=Hello&page=0">Afficher Hello</a><br>
    <a href="?message=Bonjours a tous&page=0">Bonjours a tous</a><br>
    <a href="?message=Acheter la lune&page=0">Acheter la lune</a><br>
    <a href="?message=Rien&page=1">Aller a la page 1</a><br>
<?php
    echo "Votre message est : ".$_GET["message"];
    ?><br>    
<?php
    echo "Vous êtes sur la page n° ".$_GET["page"];
    ?>
</body>
</html>