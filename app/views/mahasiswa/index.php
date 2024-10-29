<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul>
                <?php foreach( $data['mhs'] as $mhs) : ?>
                <li>
                    <strong>Nama:</strong> <?php echo $mhs['nama']; ?><br>
                    <strong>NIM:</strong> <?php echo $mhs['nim']; ?><br>
                    <strong>Email:</strong> <?php echo $mhs['email']; ?><br>
                    <strong>Jurusan:</strong> <?php echo $mhs['jurusan']; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>