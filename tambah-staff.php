<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $Nama = $_POST["Nama"];
        $Telp = $_POST["Telp"];
        $Email = $_POST["Email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$Nama', '$Telp', '$Email'
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Data Staff</h1>

        <!-- REQUEST: GET, POST, PUT, PATCH -->
        <form action="" method="POST">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input required type="text" name="Nama" class="form-control" id="Nama">
            </div>
            <div class="mb-3">
                <label for="Telp" class="form-label">No.Telp</label>
                <input required type="text" name="Telp" class="form-control" id="Telp">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input required type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <button type="submit" name="submit" class="btn btn-danger">Submit</button>

            <a class="btn btn-primary" href="./staff.php">Kembali ke halaman staff</a>
        </form>
    </div>
</body>
</html>