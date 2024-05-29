<?php
    // session_start() artinya memulai interaksi dengan session
    session_start();

    include_once("./connect.php");

    // isset: "apakah ada"?
    // apakah ada email dan password yang dikirim dari form?
    if(isset($_POST['email']) && isset($_POST['password'])){
        // Simpan email ke variabel email
        $email = $_POST['email']; // rasyade@gmail.com

        // Simpan password ke variabel password
        $password = $_POST['password'];

        // Cek ke database
        // Ambil semua data user yang emailnya sesuai dengan input di form
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);

        // Jika, email ditemukan
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            // Kita cek kecocokan password dengan hash password di database
            // Password_verify()
            if(password_verify($password, $row['password'])){
                // Kalau password benar, kasih sebuah SESSION["email"]
                $_SESSION['email'] = $email;

                // Pindahin halaman ke index.php
                header("Location: index.php");
                exit;
            } else{
                // Kalau password salah.
                echo "Password salah.";
            }
        } else {
            // Jika email tidak ditemukan
            echo "Email tidak ditemukan.";
        }
    }