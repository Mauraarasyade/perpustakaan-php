<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BUKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1>Daftar Buku</h1>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">ISBN</th>
                <th scope="col">Unit</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Buku -->
                <?php foreach ($query as $buku) { ?>
                    <tr>
                        <td><?php echo $buku["Nama"] ?></td>
                        <td><?php echo $buku["ISBN"] ?></td>
                        <td><?php echo $buku["Unit"] ?></td>
                            <td>
                                <a class="btn btn-success" href=<?php echo "edit-buku.php?id=" . $buku["ID"] ?>>EDIT</a> |
                                <a class="btn btn-success" href=<?php echo "delete-buku.php?id=" . $buku["ID"] ?>>HAPUS</a>
                            </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="./tambah-buku.php">Tambah data buku</a>
    
        <a class="btn btn-primary" href="./index.php">Kembali ke halaman utama</a>
    </div>
</body>
</html>