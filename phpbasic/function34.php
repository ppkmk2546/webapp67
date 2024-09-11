<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP returning Value</title>
</head>
<body>
    <?php
        function printMe($param = NULL){
            echo $param;
        }
        echo("this is the defaul value => ");
        printMe();
    ?>
</body>
</html>