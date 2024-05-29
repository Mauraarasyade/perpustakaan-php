<?php
    session_start();

    include_once("./connect.php");

    // isset: "apakah ada"?
    // apakah ada kiriman data email dan password dari form?
    if(isset($_POST['email']) && isset($_POST['password'])){
        // Simpan data email ke variabel email
        $email = $_POST['email'];

        // Simpan data password di variabel password
        // Password hash() : melakukan hashing ke password.
        // PASSWORD DEFAULT : algoritma hashing bcrypt
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);

        // Apakah email ada di database?
        if (mysqli_num_rows($result) > 0){
            echo "Email sudah terdaftar.";
        } else {
            // Bikin 1 query sql baru untuk memasukan data
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

            // Kalau registrasi berhasil
            if (mysqli_query($db, $sql) === TRUE){
                echo "Registrasi berhasil. Silakan <a href='login.php'>Login</a>.";
            } else{
                // Kalau registrasi gagal
                echo "Registrasi gagal!";
            }
        }
    }