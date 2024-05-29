<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["Nama"];
        $isbn = $_POST["ISBN"];
        $unit = $_POST["Unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama='$nama',
        isbn='$isbn', unit=$unit WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Form Edit Data Buku</h1>

        <!-- REQUEST: GET, POST, PUT, PATCH -->
        <form action="" method="POST">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input required value="<?php echo $buku ['Nama']?>" type="text" name="Nama" class="form-control" id="Nama">
            </div>
            <div class="mb-3">
                <label for="ISBN" class="form-label">ISBN</label>
                <input required value="<?php echo $buku ['ISBN']?>" type="text" name="ISBN" class="form-control" id="ISBN">
            </div>
            <div class="mb-3">
                <label for="Unit" class="form-label">Unit</label>
                <input required value="<?php echo $buku ['Unit']?>" type="number" name="Unit" class="form-control" id="Unit">
            </div>

            <button type="submit" name="submit" class="btn btn-danger">Submit</button>

            <a class="btn btn-primary" href="./buku.php">Kembali ke halaman buku</a>
        </form>
    </div>
</body>
</html>