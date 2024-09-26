<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is main menu webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body class="bg-light vh-100">

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Website</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
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

    <?php
    require 'conn.php';
    $sql = "SELECT * FROM studentbio";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
    ?>

    <div class="container my-5">
        <h1 class="text-center mb-5 fw-bold ">ประวัตินักศึกษา</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ที่อยู่</th>
                    <th>เบอร์โทร</th>
                    <th>ธุรกรรม</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["sid"]."</td><td>".$row["sname"]." ".$row["slastname"]."</td><td>".$row["address"]."</td><td>".$row["telephone"]."</td><td><a href='editbio.php?sid=".$row["sid"]."' class='btn btn-warning w-100 d-block'>Edit</a></td></tr>";    
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>0 results</td></tr>";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>  
        <div class="text-center mt-4">
            <a href='insertbio.php' class="btn btn-primary p-2">Insert Student</a>
        </div>
    </div>
    
    <footer class="bg-dark text-center text-white py-3 mt-4 fixed-bottom">
        <p>&copy; COPYRIGHT 2024 ระบบจัดการข้อมูลนักศึกษา</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>