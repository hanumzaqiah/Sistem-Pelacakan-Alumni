<?php
include "../koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM alumni");
?>

<!DOCTYPE html>
<html>

<head>
<title>Pelacakan Alumni</title>
<link rel="stylesheet" href="../assets/css/style.css">
<style>
    /* Hilangkan underline hanya pada tombol */
    a.button {
        text-decoration: none; /* hilangkan underline */
    }
</style>
</head>

<body>

<div class="header">
<h2>Mulai Pelacakan Alumni</h2>
</div>

<div class="container">

<div class="card">

<a class="button" href="../dashboard.php">Kembali ke Dashboard</a>

<table>

<tr>
<th>No</th>
<th>Nama</th>
<th>Status</th>
<th>Persentase</th>
<th>Pencarian Akademik</th>
<th>Pencarian Profesional</th>
<th>Verifikasi Web</th>
<th>Aksi</th>
</tr>

<?php 
$no = 1;
while($d = mysqli_fetch_array($data)){ 

$keyword = urlencode($d['nama']." ".$d['universitas']." ".$d['jurusan']);

?>

<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['status']; ?></td>
<td><?php echo $d['persentase']; ?>%</td>

<td>
<a class="button"
href="https://scholar.google.com/scholar?q=<?php echo $keyword; ?>"
target="_blank">
Scholar
</a>
<a class="button"
href="https://orcid.org/orcid-search/search?searchQuery=<?php echo $keyword; ?>"
target="_blank">
ORCID
</a>
</td>

<td>
<a class="button"
href="https://www.linkedin.com/search/results/all/?keywords=<?php echo $keyword; ?>"
target="_blank">
LinkedIn
</a>
</td>

<td>
<a class="button"
href="https://www.google.com/search?q=<?php echo $keyword; ?>"
target="_blank">
Google
</a>
</td>

<td>
<a class="button"
href="proses_lacak.php?id=<?php echo $d['id']; ?>">
Lacak
</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>