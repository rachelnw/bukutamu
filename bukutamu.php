<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku Tamu</title>
<style>
  body {
    font-family: Arial, sans-serif; 
    text-align: center; 
    background-color: #f4f4f4; 
    margin: 0; 
    padding: 0; 
  }
  .container {
    max-width: 600px; 
    margin: auto;
    padding: 20px; 
    background-color: #fff; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
  }
  h2 {
    color: #333; /* Warna judul */
  }
  form {
    margin-top: 20px; /* Ruang atas antara judul dan formulir */
  }
  label {
    display: block; /* Mengubah label menjadi blok */
    margin-bottom: 5px; /* Ruang bawah antara label dan input */
    color: #333; /* Warna label */
  }
  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%; /* Lebar input dan textarea 100% */
    padding: 8px; /* Padding di dalam input dan textarea */
    margin-bottom: 10px; /* Ruang bawah antara input dan textarea */
    border: 1px solid #ccc; /* Garis tepi input dan textarea */
    border-radius: 5px; /* Border radius untuk sudut input dan textarea */
    box-sizing: border-box; /* Ukuran kotak termasuk padding dan border */
  }
  input[type="submit"] {
    background-color: #4caf50; /* Warna latar belakang tombol submit */
    color: #fff; /* Warna teks tombol submit */
    padding: 10px 20px; /* Padding di dalam tombol submit */
    border: none; /* Hapus garis tepi tombol submit */
    border-radius: 5px; /* Border radius untuk sudut tombol submit */
    cursor: pointer; /* Pointer ketika mengarahkan ke tombol submit */
  }
  input[type="submit"]:hover {
    background-color: #45a049; /* Warna latar belakang tombol submit saat dihover */
  }
</style>
</head>
<body>
<div class="container">
  <h2>Buku Tamu</h2>
  <?php
  // Jika metode yang digunakan adalah POST, lakukan pemrosesan formulir
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Ambil nilai input dari formulir
      $nama = $_POST['nama'] ?? ''; // Mendapatkan nilai 'nama' dari formulir atau mengatur default kosong jika tidak ada
      $email = $_POST['email'] ?? ''; // Mendapatkan nilai 'email' dari formulir atau mengatur default kosong jika tidak ada
      $komentar = $_POST['komentar'] ?? ''; // Mendapatkan nilai 'komentar' dari formulir atau mengatur default kosong jika tidak ada

      echo "<h3>Terima kasih!</h3>";
      echo "<p>Data dari $nama dengan email $email telah disimpan.</p>";
  }
  ?>
  <!-- Tambahkan garis di sekitar formulir menggunakan PHP -->
  <?php if ($_SERVER["REQUEST_METHOD"] != "POST") { ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="komentar">Komentar:</label>
    <textarea id="komentar" name="komentar" rows="4" required></textarea><br>
    <input type="submit" value="Simpan">
  </form>
  <?php } ?>
</div>
</body>
</html>
