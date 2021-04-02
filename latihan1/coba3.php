<?php
//koneksi ke database dan koneksi 
$conn = mysqli_connect('localhost', 'root', '', 'data');

//Queri ini database mahasiswa
$result = mysqli_query($conn, "SELECT*FROM mahasiswa");

//ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
$mahasiswa = $rows;
// tampung ke variabel mahasiswa



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasissa TBK</title>
</head>

<body>
  <h2>Daftar Mahasiswa TBK</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $m['id']; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60" alt=""></td>
        <th><?= $m['nama']; ?></th>
        <th><a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a></th>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>