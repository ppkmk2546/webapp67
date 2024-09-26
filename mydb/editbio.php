<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editbio</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <?php
        if(!isset($_GET['sid'])){
            header("refresh: 0; url=mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM studentbio WHERE sid='$_GET[sid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center text-white bg-primary ">
                <h2>แก้ไขข้อมูลนักเรียน</h2>
            </div>
            <div class="card-body p-4">
                <form method="post" action="editsuccess.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">ชื่อ</label>
                        <input type="text" name="sid" id="sid" class="form-control" value="<?=$row['sid'];?>" hidden >
                        <input type="text" name="sname" id="sname" class="form-control" value="<?=$row['sname'];?>" / >
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">นามสกุล</label>
                        <input type="text" name="slastname" id="slastname" class="form-control" value="<?=$row['slastname'];?>" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ที่อยู่</label>
                        <input type="text" name="address" id="address" class="form-control" value="<?=$row['address'];?>" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">เบอร์โทร</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" value="<?=$row['telephone'];?>" />
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success px-3">บันทึกข้อมูล</button>
                        <a href="mainmenu.php" class="btn btn-secondary px-3">กลับหน้าหลัก</a>
                        <!-- <input type="submit" value="บันทึก"> -->
                        <!-- <a href='mainmenu.php'><button class="btn btn-secondary">กลับหน้าหลัก</button></a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>