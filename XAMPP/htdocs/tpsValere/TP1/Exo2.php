<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
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
    echo "<p style='color: {$_GET["couleur"]};'>{$_GET["message"]}</p>";
    ?>
</body>
</html>