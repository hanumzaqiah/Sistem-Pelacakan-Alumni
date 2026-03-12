# Sistem Pelacakan Alumni

**Nama:** Hanum Zaqiah Permatasari  
**NIM:** 202210370311125  
**Kelas:** Rekayasa Kebutuhan A  

**Link Publikasi Web:** [Dashboard Alumni](http://alumnitrack.kesug.com/sistem-pelacakan-alumni/dashboard.php)

---

## Deskripsi Web

Sistem ini dibuat untuk **melacak alumni** dari suatu institusi, mencatat data pribadi, status pelacakan, dan hasil pencarian pekerjaan atau profil profesional mereka. Web ini dibangun menggunakan **PHP dan MySQL**, dengan tampilan sederhana menggunakan CSS.

### Fitur Utama

1. **Dashboard**  
   - Halaman utama menampilkan menu navigasi ke semua bagian sistem.

2. **Data Alumni**  
   - Menampilkan daftar alumni.  
   - Menambahkan, mengedit, atau menghapus data alumni.

3. **Pelacakan Alumni**  
   - Melacak alumni secara otomatis dengan keyword nama, universitas, dan jurusan.  
   - Memberikan **status** dan **persentase confidence** berdasarkan sumber yang ditemukan.

4. **Hasil Pelacakan**  
   - Menampilkan semua hasil pelacakan.  
   - Dapat melakukan update pekerjaan, perusahaan, dan lokasi.  
   - Menyediakan link bukti ke sumber online.

---

## Catatan Perbedaan dengan Pseudocode

- Pada **pseudocode awal**, sumber informasi yang digunakan adalah **Instagram, Facebook, dan LinkedIn**.  
- Pada implementasi web ini, sumber diubah menjadi **Google, ORCID, Google Scholar, dan LinkedIn**.  
- Alasan perubahan:
  - Nama lengkap alumni jarang muncul di **Instagram dan Facebook**, sehingga hasil pelacakan menjadi sedikit atau tidak valid.  
  - Sumber baru memberikan hasil yang lebih **relevan dan akurat** untuk nama lengkap alumni.

---


---

## Cara Penggunaan

1. Buka link web: [Dashboard Alumni](http://alumnitrack.kesug.com/sistem-pelacakan-alumni/dashboard.php)  
2. Navigasi melalui sidebar ke:
   - **Data Alumni** → tambah, edit, hapus alumni.
   - **Pelacakan** → mulai melacak data alumni.
   - **Hasil** → melihat hasil pelacakan dan mengedit jika perlu.
3. Semua tombol **Kembali ke Dashboard** sudah dikonfigurasi agar langsung kembali ke halaman utama.

---

## Teknologi yang Digunakan

- **Backend:** PHP 
- **Database:** MySQL  
- **Frontend:** HTML, CSS, JavaScript  
- **Hosting:** Web gratis (aktif beberapa hari, link di atas)

---

## Catatan Tambahan

- Web ini dibuat sebagai proyek perkuliahan.  
- Karena menggunakan hosting gratis, akses web hanya sementara.  
- Beberapa sumber hasil pelacakan disesuaikan agar lebih relevan dengan nama lengkap alumni.
