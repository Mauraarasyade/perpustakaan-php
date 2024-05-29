<?php
    session_start();

    // Cek apakah user memiliki session
    // Kalau iya, artinya user sudah login
    // Maka, pindahin ke halaman index.php
    if(isset($_SESSION["email"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Login Admin</h1>

        <form action="./login_proccess.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input required type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-danger">Submit</button>

            <a class="btn btn-primary" href="./register.php">Register</a>
        </form>
    </div>
</body>
</html>