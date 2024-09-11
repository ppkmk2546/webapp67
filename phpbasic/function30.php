<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable via Reference</title>
</head>
<body>
    <?php
        
        function addfive($num){
            $num += 5;
        }
        function addsix(&$num){
            $num +=6;
        }

        $orignum = 10;

        addfive($orignum);
        echo "Original Value is $orignum<br />";
        
        addsix($orignum);
        echo "Original Value is $orignum<br />";

        
    ?>
</body>
</html>