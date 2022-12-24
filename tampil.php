<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>SQL INJACTION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/input.css" />
    <link rel="icon" type="image/png" href="img/cyber.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #000;">
        <div class=" container">
            <a class="navbar-brand" href="#">Keamanan Sistem</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-end  ms-auto">
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

    <section id="input">
        <div class="container">
            <h2 style="text-align: center;">Data Mahasiswa</h2>
            <br>

            <!-- PHP -->
            <?php
            if (isset($_GET['alert'])) {
                if ($_GET['alert'] == 'gagal_ekstensi') {
            ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                        Ekstensi Tidak Diperbolehkan
                    </div>
                <?php
                } elseif ($_GET['alert'] == "gagal_ukuran") {
                ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                        Ukuran File terlalu Besar
                    </div>
                <?php
                } elseif ($_GET['alert'] == "berhasil") {
                ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success</h4>
                        Berhasil Disimpan
                    </div>
            <?php
                }
            }
            ?>
            <br>

            <!-- Menampilkan tabel input -->
            <a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
            <br>
            <br>
            <table class="table table-bordered">
                <tr align="center">
                    <th width="20%">Nim</th>
                    <th width="20%">Nama</th>
                    <th width="20%">Alamat</th>
                    <th width="20%">Foto</th>
                </tr>
                <?php
                $data = mysqli_query($koneksi, "SELECT * from user");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['user_nim']; ?></td>
                        <td><?php echo $d['user_nama']; ?></td>
                        <td><?php echo $d['user_alamat']; ?></td>
                        <td align="center"><img src="gambar/<?php echo $d['user_foto'] ?>" width="35" height="40"></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>