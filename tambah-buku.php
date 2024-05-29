<?php
    include_once("./connect.php");

    if(isset($_POST["submit"])){
        $Nama = $_POST["Nama"];
        $ISBN = $_POST["ISBN"];
        $Unit = $_POST["Unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$Nama', '$ISBN', $Unit
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Tambah Data Buku</h1>

        <!-- REQUEST: GET, POST, PUT, PATCH -->
        <form action="" method="POST">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input required type="text" name="Nama" class="form-control" id="Nama">
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN</label>
                <input required type="text" name="ISBN" class="form-control" id="ISBN">
            </div>
            <div class="mb-3">
                <label for="Unit" class="form-label">Unit</label>
                <input required type="number" name="Unit" class="form-control" id="Unit">
            </div>

            <button type="submit" name="submit" class="btn btn-danger">Submit</button>

            <a class="btn btn-primary" href="./buku.php">Kembali ke halaman buku</a>
        </form>
    </div>
</body>
</html>