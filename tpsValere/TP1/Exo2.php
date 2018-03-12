<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
    <a href="?size=8">Taille 8</a>
   <?php
    echo $_GET["version"];
    echo "<div style='font-size: {$size}px;'>Message de taille {$size}px en rouge</div>";
    ?>
</body>
</html>