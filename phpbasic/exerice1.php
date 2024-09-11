<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerice1</title>
</head>
<body>
    <?php
        function test($str) {
        // * ดึงตัวอักษรสุดท้ายของสตริงออกมา
        $s = substr($str, strlen($str) -1);
        // * คืนค่าผลลัพธ์ใหม่ที่เพิ่มตัวอักษรสุดท้ายที่หน้าสุดและท้ายสุดของสตริง
        return $s.$str.$s;
    }

        // * Test cases
        echo test("Red" )."\n";
        echo("<br />");
        echo test("Green")."\n";  // * Output: nGreenn
        echo("<br />");
        echo test("1")."\n";
    ?>

</body>
</html>