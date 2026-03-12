<?php
include "../koneksi.php";

if(!isset($_GET['id'])){
    header("location:pelacakan.php");
    exit;
}

$id = $_GET['id'];

/* ambil data alumni */
$data = mysqli_query($conn,"SELECT * FROM alumni WHERE id='$id'");
$d = mysqli_fetch_assoc($data);

if(!$d){
    header("location:pelacakan.php");
    exit;
}

/* cek apakah sudah dilacak */
$cek = mysqli_query($conn,"SELECT * FROM hasil_pelacakan WHERE alumni_id='$id'");
if(mysqli_num_rows($cek) > 0){
    header("location:pelacakan.php");
    exit;
}

/* keyword pencarian */
$keyword = $d['nama']." ".$d['universitas']." ".$d['jurusan'];

/* pointer bukti */
$pointer = "https://www.google.com/search?q=".urlencode($keyword);

/* simulasi deteksi sumber */
$google = rand(0,1);
$scholar = rand(0,1);
$linkedin = rand(0,1);
$researchgate = rand(0,1);

/* hitung persentase */
$persentase = 0;
$sumber = "";

/* GOOGLE */
if($google){
    $persentase += 50;
    $sumber .= "Google ";
}

/* GOOGLE SCHOLAR */
if($scholar){
    $persentase += 30;
    $sumber .= "Google Scholar ";
}

/* LINKEDIN */
if($linkedin){
    $persentase += 20;
    $sumber .= "LinkedIn ";
}

/* RESEARCHGATE */
if($researchgate){
    $persentase += 10;
    $sumber .= "ResearchGate ";
}

/* jika tidak ada sumber sama sekali */
if($persentase == 0){
    $persentase = 20;
}

/* tentukan status */
if($persentase >= 70){
    $status = "Terdeteksi";
}
elseif($persentase >= 40){
    $status = "Perlu Verifikasi";
}
else{
    $status = "Tidak Ditemukan";
}

/* data tambahan */
$pekerjaan = "";
$perusahaan = "";
$lokasi = "";

$tanggal = date("Y-m-d");

/* simpan hasil pelacakan */
mysqli_query($conn,"INSERT INTO hasil_pelacakan
(alumni_id, pekerjaan, perusahaan, lokasi, sumber, confidence_score, tanggal_ditemukan, pointer_bukti)
VALUES
('$id','$pekerjaan','$perusahaan','$lokasi','$sumber','$persentase','$tanggal','$pointer')");

/* update status alumni */
mysqli_query($conn,"UPDATE alumni 
SET status='$status', persentase='$persentase'
WHERE id='$id'");

header("location:pelacakan.php");
exit;
?>