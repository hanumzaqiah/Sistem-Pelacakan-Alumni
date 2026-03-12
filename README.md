# Sistem Pelacakan Alumni

**Nama:** Hanum Zaqiah Permatasari  
**NIM:** 202210370311125  
**Kelas:** Rekayasa Kebutuhan A  

**Link Publikasi Web:** [Dashboard Alumni](http://alumnitrack.kesug.com/sistem-pelacakan-alumni/dashboard.php)

---

# Sistem Pelacakan Alumni

**Nama:** Hanum Zaqiah Permatasari  
**NIM:** 202210370311125  
**Kelas:** Rekayasa Kebutuhan A  

**Link Publikasi Web:** [Dashboard Alumni](http://alumnitrack.kesug.com/sistem-pelacakan-alumni/dashboard.php)

---

## Deskripsi Web

Sistem ini dibuat untuk **melacak alumni** dari suatu institusi, mencatat data pribadi, status pelacakan, dan hasil pencarian pekerjaan atau profil profesional mereka. Web ini dibangun menggunakan **PHP dan MySQL**, dengan tampilan sederhana menggunakan CSS.

---

## Tabel Pengujian Aplikasi

| No | Fitur / Halaman            | Input / Aksi                                   | Ekspektasi Hasil                                      | Status |
|----|----------------------------|-----------------------------------------------|------------------------------------------------------|--------|
| 1  | Login                      | Masukkan username: admin, password: admin     | Berhasil login, diarahkan ke dashboard               | ✅     |
| 2  | Dashboard                  | Buka dashboard                                | Menu sidebar tampil, tombol aktif sesuai halaman    | ✅     |
| 3  | Data Alumni - Tambah        | Isi nama, universitas, jurusan, tahun lulus  | Data tersimpan di database, muncul di daftar alumni | ✅     |
| 4  | Data Alumni - Edit          | Edit salah satu alumni                        | Data berubah sesuai input, tombol update berhasil   | ✅     |
| 5  | Data Alumni - Hapus         | Klik tombol hapus                             | Data terhapus dari database, kembali ke daftar     | ✅     |
| 6  | Pelacakan Alumni            | Klik tombol "Lacak" pada alumni              | Status & persentase diperbarui, pointer bukti dibuat | ✅     |
| 7  | Hasil Pelacakan             | Edit pekerjaan, perusahaan, lokasi           | Data tersimpan, tabel update berhasil              | ✅     |
| 8  | Hasil Pelacakan             | Lihat pointer bukti                            | Link terbuka di tab baru ke sumber terkait         | ✅     |
| 9  | Navigasi Kembali Dashboard  | Klik tombol "Kembali ke Dashboard"           | Kembali ke dashboard tanpa error                    | ✅     |
| 10  | Validasi Input              | Kosongkan field saat tambah / edit alumni    | Muncul pesan error, data tidak tersimpan           | ✅     |

---

## Struktur Folder Proyek


---

## Catatan Perbedaan dengan Pseudocode

- Pada **pseudocode awal**, sumber informasi yang digunakan adalah **Instagram, Facebook, dan LinkedIn**.  
- Pada implementasi web ini, sumber diubah menjadi **Google, ORCID, Google Scholar, dan LinkedIn**.  
- Alasan perubahan:
  - Nama lengkap alumni jarang muncul di **Instagram dan Facebook**, sehingga hasil pelacakan menjadi sedikit atau tidak valid.  
  - Sumber baru memberikan hasil yang lebih **relevan dan akurat** untuk nama lengkap alumni.

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
