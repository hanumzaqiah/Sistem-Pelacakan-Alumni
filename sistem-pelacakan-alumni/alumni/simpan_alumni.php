<?php

include "../koneksi.php";

$nama = $_POST['nama'];
$universitas = $_POST['universitas'];
$jurusan = $_POST['jurusan'];
$tahun = $_POST['tahun'];

mysqli_query($conn,"
INSERT INTO alumni
(nama,universitas,jurusan,tahun_lulus,status,persentase)
VALUES
('$nama','$universitas','$jurusan','$tahun','Belum Dilacak','0')
");

header("location:alumni.php");

?>