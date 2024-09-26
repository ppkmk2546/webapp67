<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

<header class="bg-primary text-white text-center py-3">
    <h1>ระบบจัดการข้อมูลนักเรียน</h1>
</header>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow w-50 ">
        <div class="card-body text-center">
            
            <?php
                require 'conn.php';
                $sql_update="UPDATE member 
                SET mem_name='$_POST[mem_name]', mem_lastname='$_POST[mem_lastname]', 
                mem_address='$_POST[mem_address]', mem_tel='$_POST[mem_tel]' 
                WHERE mem_id='$_POST[mem_id]' ";

                $result= $conn->query($sql_update);

                if(!$result) {
                    die("Error God Damn it : ". $conn->error);
                } else {
                    echo "<div class='alert alert-success'>แก้ไขข้อมูลสำเร็จ! กำลังกลับสู่หน้าหลัก...</div>";
                    header("refresh: 1; url=memberbio.php");
                }
            ?>
            <a href="memberbio.php" class="btn btn-secondary mt-3">กลับไปที่หน้าหลัก</a>
        </div>
    </div>
</div>

<footer class="bg-light text-center py-3 mt-4">
    <p>&copy; 2024 ระบบจัดการข้อมูลนักเรียน</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
