<?php
include "../koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM alumni");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Alumni</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Hanya untuk tombol supaya underline hilang */
        a.button {
            text-decoration: none; /* hilangkan underline */
        }
    </style>
</head>

<body>

<div class="header">
<h2>Data Alumni</h2>
</div>

<div class="container">

<div class="card">

<div class="title">Daftar Alumni</div>

<a class="button" href="../dashboard.php">Kembali ke Dashboard</a>
<a class="button" href="tambah_alumni.php">Tambah Alumni</a>

<table>

<tr>
<th>No</th>
<th>Nama</th>
<th>Universitas</th>
<th>Jurusan</th>
<th>Tahun</th>
<th>Status</th>
<th>Persentase</th>
<th>Aksi</th>
</tr>

<?php 
$no = 1;
while($d = mysqli_fetch_array($data)){ 
?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $d['nama']; ?></td>

<td><?php echo $d['universitas']; ?></td>

<td><?php echo $d['jurusan']; ?></td>

<td><?php echo $d['tahun_lulus']; ?></td>

<td><?php echo $d['status']; ?></td>

<td><?php echo $d['persentase']; ?>%</td>

<td>

<a class="button" href="edit_alumni.php?id=<?php echo $d['id']; ?>">
Edit
</a>

<a class="button" 
href="hapus_alumni.php?id=<?php echo $d['id']; ?>"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>