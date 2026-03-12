<?php
include "../koneksi.php";

/* proses hapus */
if(isset($_GET['hapus'])){
$id = $_GET['hapus'];
mysqli_query($conn,"DELETE FROM hasil_pelacakan WHERE id='$id'");
header("location:hasil_pelacakan.php");
exit;
}

/* proses update */
if(isset($_POST['simpan'])){
$id = $_POST['id'];
$pekerjaan = $_POST['pekerjaan'];
$perusahaan = $_POST['perusahaan'];
$lokasi = $_POST['lokasi'];

mysqli_query($conn,"UPDATE hasil_pelacakan SET
pekerjaan='$pekerjaan',
perusahaan='$perusahaan',
lokasi='$lokasi'
WHERE id='$id'");

header("location:hasil_pelacakan.php");
exit;
}

$edit_id = isset($_GET['edit']) ? $_GET['edit'] : "";

$query = "
SELECT hasil_pelacakan.id,
alumni.nama,
hasil_pelacakan.pekerjaan,
hasil_pelacakan.perusahaan,
hasil_pelacakan.lokasi,
hasil_pelacakan.confidence_score,
hasil_pelacakan.tanggal_ditemukan,
hasil_pelacakan.sumber,
hasil_pelacakan.pointer_bukti
FROM hasil_pelacakan
JOIN alumni ON hasil_pelacakan.alumni_id = alumni.id
ORDER BY alumni.nama ASC
";

$data = mysqli_query($conn,$query);

if(!$data){
die("Query Error : ".mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Hasil Pelacakan Alumni</title>
<link rel="stylesheet" href="../assets/css/style.css">

<style>

body{
font-family:Arial;
background:#f5f7fb;
}

table{
width:100%;
border-collapse:collapse;
margin-top:10px;
}

table,th,td{
border:1px solid #ccc;
}

th,td{
padding:10px;
text-align:center;
}

th{
background:#f2f2f2;
}

.header{
padding:20px;
text-align:center;
}

.card{
padding:20px;
margin:20px;
background:white;
box-shadow:0 0 10px #aaa;
border-radius:8px;
}

.button{
display:inline-block;
padding:8px 15px;
margin-bottom:10px;
background:#00AEEF;
color:white;
text-decoration:none;
border-radius:5px;
}

.button:hover{
background:#0093CC;
}

.pointer{
color:#007BFF;
text-decoration:underline;
}

.aksi a{
font-size:18px;
margin:0 5px;
text-decoration:none;
}

.edit{
color:#28a745;
}

.hapus{
color:#dc3545;
}

input{
width:120px;
padding:5px;
}

</style>

</head>

<body>

<div class="header">
<h2>Hasil Pelacakan Alumni</h2>
</div>

<div class="card">

<a class="button" href="../dashboard.php">Kembali ke Dashboard</a>

<table>

<tr>
<th>No</th>
<th>Nama</th>
<th>Pekerjaan</th>
<th>Perusahaan</th>
<th>Lokasi</th>
<th>Confidence</th>
<th>Tanggal</th>
<th>Sumber</th>
<th>Pointer</th>
<th>Aksi</th>
</tr>

<?php
$no=1;

if(mysqli_num_rows($data)>0){

while($d=mysqli_fetch_assoc($data)){

if($edit_id==$d['id']){
?>

<form method="POST">
<tr>

<td><?= $no++ ?></td>

<td><?= htmlspecialchars($d['nama']) ?></td>

<td>
<input type="text" name="pekerjaan" value="<?= $d['pekerjaan'] ?>">
</td>

<td>
<input type="text" name="perusahaan" value="<?= $d['perusahaan'] ?>">
</td>

<td>
<input type="text" name="lokasi" value="<?= $d['lokasi'] ?>">
</td>

<td><?= $d['confidence_score'] ?>%</td>

<td><?= $d['tanggal_ditemukan'] ?></td>

<td><?= $d['sumber'] ?></td>

<td>
<a class="pointer"
href="<?= $d['pointer_bukti'] ?>"
target="_blank">
Lihat
</a>
</td>

<td>

<input type="hidden" name="id" value="<?= $d['id'] ?>">

<button type="submit" name="simpan">💾</button>

<a href="hasil_pelacakan.php">❌</a>

</td>

</tr>
</form>

<?php
}else{
?>

<tr>

<td><?= $no++ ?></td>

<td><?= htmlspecialchars($d['nama']) ?></td>

<td><?= $d['pekerjaan'] ?: '-' ?></td>

<td><?= $d['perusahaan'] ?: '-' ?></td>

<td><?= $d['lokasi'] ?: '-' ?></td>

<td><?= $d['confidence_score'] ?>%</td>

<td><?= $d['tanggal_ditemukan'] ?></td>

<td><?= $d['sumber'] ?></td>

<td>

<?php
if(!empty($d['pointer_bukti'])){
?>

<a class="pointer"
href="<?= $d['pointer_bukti'] ?>"
target="_blank">
Lihat
</a>

<?php
}else{
echo "-";
}
?>

</td>

<td class="aksi">

<a class="edit"
href="hasil_pelacakan.php?edit=<?= $d['id'] ?>"
title="Edit">
✏️
</a>

<a class="hapus"
href="hasil_pelacakan.php?hapus=<?= $d['id'] ?>"
onclick="return confirm('Hapus data ini?')"
title="Hapus">
🗑️
</a>

</td>

</tr>

<?php
}
}

}else{
?>

<tr>
<td colspan="10">Belum ada hasil pelacakan</td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>