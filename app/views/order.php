<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach ($data['mobil'] as $mobil) { ?>
    <img src="<?= IMG.$mobil['image'] ?>" class="card-img-top" alt="...">
    <p><?= $mobil['nama'] ?></p>
    <p><?= $mobil['merek'] ?></p>
    <p><?= $mobil['deskripsi'] ?></p>
    <p><?= $mobil['harga'] ?> / hari</p>
    <form action="<?= BASEURL ?>/order/add" method="post">
      <input type="hidden" name="id_mobil" value="<?= $mobil['id'] ?>">
      <label for="tanggal_mulai">Tanggal mulai</label>
      <input type="date" name="tanggal_mulai" id="tanggal_mulai">
      <br>
      <label for="tanggal_akhir">Tanggal akhir</label>
      <input type="date" name="tanggal_akhir" id="tanggal_akhir">
      <br>
      <input type="submit" value="Submit">
    </form>
  <?php } ?>
  <!-- Kasi info berapa total harganya -->
</body>
</html>