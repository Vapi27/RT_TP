<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CryptoMining For ever</title>
</head>
<body>
    <a href="?couleur=red&size=15&message=SAlut">Rouge et petit</a><br>
    <a href="?couleur=green&size=30&message=SAlut">Vert Moyen</a><br>
    <a href="?couleur=blue&size=50&message=SAlut">Bleu et Grand</a><br>
    <form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size"><br>
    <label for="message">message : </label>
    <input type="text" value="" name="message" id="message"><br>
    <label for="message">Couleur : </label>
    <input type="color" value="" name="couleur" id="couleur">
    <input type="submit" value="Valider">
</form>
   <?php
    echo "<div>Message de taille {{$_GET["size"]}}px en {$_GET["couleur"]}</div>";
    echo "<p style='color: {$_GET["couleur"]};'><span style='font-size: {$_GET["size"]}px;'>{$_GET["message"]}</span></p>";

    if (empty($_GET["couleur"])){
      echo "<p style='color:red'>Vous n'avez pas remplis tout les champs</p>"; 
    }
    ?>
</body>
</html>