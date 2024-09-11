<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP returning Value</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "this is PHP <br />";
            echo "Say Hello";
        }
        $function_holder = "SayHello";
        $function_holder();
        
    ?>
</body>
</html>