<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandezza font</title>
</head>
<body>
    <?php 
    
        echo "<h1>Generatore di grandezza casuale tra 16 e 60</h1>";
        $numero = random_int(16 ,60);
        echo "<p style ='font-size: {$numero}px;'>Hello World</p>";
    ?>



</body>
</html>