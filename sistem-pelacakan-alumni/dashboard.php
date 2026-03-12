<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>

/* RESET */
*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:"Segoe UI", Arial, sans-serif;
background:#f5f7fb;
color:#333;
line-height:1.6;
}

/* LAYOUT */
.wrapper{
display:flex;
min-height:100vh;
}

/* SIDEBAR */
.sidebar{
width:190px;
background:#1BA0E2;
color:white;
padding:20px 15px;
position:fixed;
left:0;
top:0;
bottom:0;
border-right:3px solid #0F6FB2;
}

.sidebar h2{
font-size:18px;
margin-bottom:25px;
}

/* MENU */
.sidebar a{
display:block;
color:white;
padding:12px 15px;
border-radius:10px;
margin-bottom:12px;
font-size:15px;
text-decoration:none;
transition:0.25s;
}

.sidebar a:hover{
background:#0F6FB2;
}

/* ACTIVE */
.sidebar a.active{
background:white;
color:#1BA0E2;
font-weight:600;
}

/* CONTENT */
.main{
margin-left:190px;
padding:30px;
width:100%;
}

/* HEADER */
.header{
background:#1BA0E2;
color:white;
padding:15px 20px;
font-size:18px;
font-weight:600;
border-radius:6px;
border-bottom:4px solid #0F6FB2;
margin-bottom:25px;
display:flex;
justify-content:space-between;
align-items:center;
}

.profile-menu{
position:relative;
}

.profile-icon{
width:35px;
height:35px;
background:white;
color:#1BA0E2;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
cursor:pointer;
}

.dropdown{
position:absolute;
right:0;
top:45px;
background:white;
border:1px solid #ddd;
border-radius:6px;
width:120px;
display:none;
}

.dropdown a{
display:block;
padding:10px;
color:#333;
text-decoration:none;
}

.dropdown a:hover{
background:#f3f3f3;
}

/* CARD */
.card{
background:white;
padding:25px;
border-radius:10px;
border:1px solid #e3e3e3;
box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

</style>
</head>

<body>

<div class="wrapper">

<div class="sidebar">

<h2>Menu</h2>

<a class="<?= ($currentPage == 'dashboard.php') ? 'active' : '' ?>" href="dashboard.php">Dashboard</a>

<a class="<?= ($currentPage == 'alumni.php') ? 'active' : '' ?>" href="alumni/alumni.php">Data Alumni</a>

<a class="<?= ($currentPage == 'pelacakan.php') ? 'active' : '' ?>" href="pelacakan/pelacakan.php">Pelacakan</a>

<a class="<?= ($currentPage == 'hasil_pelacakan.php') ? 'active' : '' ?>" href="hasil/hasil_pelacakan.php">Hasil</a>

</div>

<div class="main">

<div class="header">

<div>Sistem Pelacakan Alumni</div>

<div class="profile-menu">
<div class="profile-icon" onclick="toggleMenu()">👤</div>

<div class="dropdown" id="dropdownMenu">
<a href="logout.php">Logout</a>
</div>
</div>

</div>

<div class="card">
Selamat datang di sistem pelacakan alumni.
</div>

</div>

</div>

<script>

function toggleMenu(){

var menu=document.getElementById("dropdownMenu");

if(menu.style.display==="block"){
menu.style.display="none";
}else{
menu.style.display="block";
}

}

</script>

</body>
</html>