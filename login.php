<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/login_admin.css" />
    <link rel="icon" type="image/png" href="img/cyber.png">

    <title>SQL INJECTION</title>
</head>

<body background="img/data.png">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #000;">
        <div class=" container">
            <a class="navbar-brand" href="#">Keamanan Sistem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Login -->
    <div class="card">
        <div class="card-body">
            <form action="user_tambah.php" method="post" onSubmit="return validasi()" align="center">
                <div>
                    <h3>Login Admin</h3><br>
                </div>
                <div>
                    <input type="text" placeholder="Username" class="form-control" name="username" id="username" />
                </div><br>
                <div>
                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" /><br>
                </div>
                <div>
                    <button type="submit" class="btn btn-dark">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Akhir Login -->
</body>

<?php

//mengaktifkan session php
session_start();

//menghubungkan dengan koneksi
include 'koneksi.php';

if (isset($_POST['submit'])) {

    //menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menyeleksi data admin dengan username dan password
    $login = mysqli_query($conn, "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'");

    //menghitung jumlah data yang ditemukan
    if (mysqli_num_rows($login) == 0) {
        die("Username atau password salah!");
    } else {
        $_SESSION['admin'] = 1;
        header("Location: user_tambah.php");
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>