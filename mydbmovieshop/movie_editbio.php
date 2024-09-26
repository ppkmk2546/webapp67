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
        if(!isset($_GET['m_id'])){
            header("refresh: 0; url=moviebio.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE m_id='$_GET[m_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center text-white bg-primary ">
                <h2>แก้ไขข้อมูลภาพยนตร์</h2>
            </div>
            <div class="card-body p-4">
                <form method="post" action="movie_editsuccess.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">ชื่อ</label>
                        <input type="text" name="m_id" id="m_id" class="form-control" value="<?=$row['m_id'];?>" hidden >
                        <input type="text" name="m_name" id="m_name" class="form-control" value="<?=$row['m_name'];?>" / >
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ประเภท</label>
                        <input type="text" name="m_type" id="m_type" class="form-control" value="<?=$row['m_type'];?>" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">ราคา</label>
                        <input type="text" name="m_price" id="m_price" class="form-control" value="<?=$row['m_price'];?>" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">เวลา/นาที</label>
                        <input type="text" name="m_time" id="m_time" class="form-control" value="<?=$row['m_time'];?>" />
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-success px-3">บันทึกข้อมูล</button>
                        <a href="moviebio.php" class="btn btn-secondary px-3">กลับหน้าหลัก</a>
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