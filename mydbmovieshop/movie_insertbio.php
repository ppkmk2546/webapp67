<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertbio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ReelTime</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="Home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
            </div>
        </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4 fw-bold">เพิ่มภาพยนตร์</h2>

        <form method="post" action="movie_insertbiosuccess.php" class="border p-4 bg-white shadow-sm rounded">
            <div class="mb-3">
                <label for="sname" class="form-label fw-bold">รหัสภาพยนตร์</label>
                <input type="text" class="form-control" name="m_id" id="m_id" placeholder="รหัสนักศึกษา" required>
            </div>

            <div class="mb-3">
                <label for="sname" class="form-label fw-bold">ชื่อ</label>
                <input type="text" class="form-control" name="m_name" id="m_name" placeholder="กรอกชื่อ" required>
            </div>

            <div class="mb-3">
                <label for="slastname" class="form-label fw-bold">ประเภท</label>
                <input type="text" class="form-control" name="m_type" id="m_type" placeholder="กรอกนามสกุล" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label fw-bold">ราคา</label>
                <input type="text" class="form-control" name="m_price" id="m_price" placeholder="กรอกที่อยู่" required>
            </div>

            <div class="mb-3">
                <label for="telephone" class="form-label fw-bold">เวลา/นาที</label>
                <input type="text" class="form-control" name="m_time" id="m_time" placeholder="กรอกเบอร์โทร" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-success px-3">บันทึก</button>
                <a href="moviebio.php" class="btn btn-primary px-3">กลับสู่หน้าหลัก</a>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>