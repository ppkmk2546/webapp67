<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php
        define("MINSIZE",50);
        echo MINSIZE;
        echo "<br>";
        echo "this is value minsize => ",constant("MINSIZE");
    ?>
</body>
</html>