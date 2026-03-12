<?php
include "../koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM alumni WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>

<head>
<title>Edit Alumni</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="header">
<h2>Edit Data Alumni</h2>
</div>

<div class="container">

<div class="card">

<form method="POST" action="update_alumni.php">

<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
</div>

<div class="form-group">
<label>Universitas</label>
<input type="text" name="universitas" value="<?php echo $d['universitas']; ?>">
</div>

<div class="form-group">
<label>Jurusan</label>
<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
</div>

<div class="form-group">
<label>Tahun Lulus</label>
<input type="text" name="tahun" value="<?php echo $d['tahun_lulus']; ?>">
</div>

<button class="button">Update</button>

</form>

<br>

<a class="button" href="alumni.php">Kembali</a>

</div>

</div>

</body>
</html>