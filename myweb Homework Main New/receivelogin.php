<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylephp.css">
    
</head>
<body>
    <h1> ยินดีต้อนรับ </h1>

        <div>
            <?php
                $showuser = $_POST['user'];
                echo "Welcome to cs supermarket websit: $showuser";
            ?> 
        </div>
   <form action="shopping.html">
     <input type="submit" name="shop" value="shopping here!">
     <!-- shopping click here! -->
</form>

</body>
</html>



