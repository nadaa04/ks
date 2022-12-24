<?php

// Menghubungkan dengan koneksi database
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

// Memberi nomor random pada file gambar
$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif'); // Menyimpan ekstensi yang diperbolehkan ketika mengupload file
$filename = $_FILES['foto']['name']; // Menyimpan nama file yang sudah diinput sebelumnya
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION); // Mengecek ekstensi yang telah diupload

if (!in_array($ext, $ekstensi)) {
    header("location:tampil.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename; // MEnyimpan nama file yang disimpan dan disisipkan angka random sebelum nama file
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$nim','$nama','$alamat','$xx')");
        header("location:tampil.php?alert=berhasil");
    } else {
        header("location:tampil.php?alert=gagal_ukuran");
    }
}
