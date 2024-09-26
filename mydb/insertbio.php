<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertbio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="text-center mb-4">Insert Student Bio</h2>

        <form method="post" action="insertbiosuccess.php" class="border p-4 bg-white shadow-sm rounded">
            <div class="mb-3">
                <label for="sname" class="form-label fw-bold">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="sid" id="sid" placeholder="รหัสนักศึกษา" required>
            </div>

            <div class="mb-3">
                <label for="sname" class="form-label fw-bold">ชื่อ</label>
                <input type="text" class="form-control" name="sname" id="sname" placeholder="กรอกชื่อ" required>
            </div>

            <div class="mb-3">
                <label for="slastname" class="form-label fw-bold">นามสกุล</label>
                <input type="text" class="form-control" name="slastname" id="slastname" placeholder="กรอกนามสกุล" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label fw-bold">ที่อยู่</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="กรอกที่อยู่" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label fw-bold">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="กรอกเบอร์โทร" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-success px-3">บันทึก</button>
                <a href="mainmenu.php" class="btn btn-primary px-3">กลับสู่หน้าหลัก</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>