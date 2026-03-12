<!DOCTYPE html>
<html>

<head>
<title>Tambah Alumni</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<div class="header">
Sistem Pelacakan Alumni
</div>

<div class="container">

<div class="card">

<div class="title">Tambah Data Alumni</div>

<form method="POST" action="simpan_alumni.php">

<div class="form-group">
<label>Nama Alumni</label>
<input type="text" name="nama" required>
</div>

<div class="form-group">
<label>Universitas</label>
<input type="text" name="universitas" required>
</div>

<div class="form-group">
<label>Jurusan</label>
<input type="text" name="jurusan" required>
</div>

<div class="form-group">
<label>Tahun Lulus</label>
<input type="text" name="tahun" required>
</div>

<button class="button">Simpan</button>

</form>

<br>

<a class="button" href="alumni.php">Kembali</a>

</div>

</div>

</body>
</html>