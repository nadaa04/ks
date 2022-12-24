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

    <!-- Input Form -->
    <section id="input">
        <div class="container">
            <h2 style="text-align: center;">Input Data Mahasiswa</h2>
            <form action="user_act.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nim :</label>
                    <input type="number" class="form-control" placeholder="Masukkan Nim" name="nim" required="required">
                </div>
                <div class="form-group">
                    <label>Nama :</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
                </div>

                <div class="form-group">
                    <label>Alamat :</label>
                    <textarea class="form-control" name="alamat" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label>Foto :</label>
                    <input class="form-control" type="file" id="formFile" onchange="preview()" name="foto" required="required" />
                    <br><img id="frame" src="" class="img-fluid" />
                    <script>
                        function preview() {
                            frame.src = URL.createObjectURL(event.target.files[0]);
                        }

                        function clearImage() {
                            document.getElementById("formFile").value = null;
                            frame.src = "";
                        }
                    </script>
                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                    <input type="submit" name="" value="Simpan" class="btn btn-primary">
                    <input type="reset" name="clear" value="Hapus" class="btn btn-danger">
                </div>
            </form>
        </div>
    </section>
    <!-- Akhir Input Form -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>