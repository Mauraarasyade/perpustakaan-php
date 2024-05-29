<?php
    // Memulai interaksi dengan session
    session_start();

    // Menghilangkan session
    session_destroy();
    session_unset();

    // Pindahin ke halaman login.php
    header("Location: login.php");