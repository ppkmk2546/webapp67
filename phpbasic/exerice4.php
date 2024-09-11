<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise4</title>
</head>
<body>
<?php
    function test($str) {
    $ctr_aa = 0;  // * ตัวนับจำนวน "aa"
    $i = 0;       // * ตัวแปรสำหรับวนลูป

    // * ลูปตรวจสอบแต่ละตำแหน่งของสตริง ยกเว้นตำแหน่งสุดท้าย
    while ($i < strlen($str) - 1) {
        // * ตรวจสอบว่าสตริงที่ตำแหน่ง $i กับ $i+1 เป็น "aa" หรือไม่
        if (substr($str, $i, 2) == "aa") {
            $ctr_aa++;
        }
        $i++; // * เพิ่มตำแหน่งเพื่อไปตรวจสอบตัวถัดไป
         
    }
    return $ctr_aa;  // * คืนค่าตัวนับ
}

    // test
    echo test("bbaaccaag") . "\n";
    echo("<br />");
    echo test("jikaaasew") . "\n";
    echo("<br />");
    echo test("JSaaakoiaa") . "\n";
?>

</body>
</html>