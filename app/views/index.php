<div class="container-fluid py-5 position-relative bg-body-secondary"
    style="font-family: 'Kanit', sans-serif; height: 85vh;">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-md-6">
            <h1 style="margin-left: 90px; margin-top: 10px; font-size: 50px">FIND YOUR BEST CAR</h1>
            <p style="margin-left: 90px" class="text-secondary">Temukan mobil terbaik untuk kebutuhan perjalanan Anda.
                Kami menyediakan beragam pilihan mobil dengan harga terjangkau.</p>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-warning text-light" style="margin-right: 50px;">RENT CAR
                    NOW</button>
            </div>
        </div>
        <!-- Kolom Gambar -->

        <div class="col-md-6 text-center position-relative">
            <!-- Gambar dengan Kelas Bootstrap -->
            <img src=" ../public/img/CarBack.png" alt="Gambar Mobil" class="img-fluid position-relative"
                style="width: 200%; height: auto; object-fit: cover; z-index: 6;">
            <div class="position-absolute bg-warning rounded-circle"
                style="width: 1005px; height: 700px; top: 7%; left: 94%; transform: translate(-50%, -50%); z-index: 2;">
            </div>

        </div>
    </div>
</div>

<!-- Full Width Background Wrapper -->
<div id="aboutSection" class="container-fluid py-5 bg-body-light">
    <div class="row align-items-center">
        <div class="col-12">
            <div>
                <h1 class="text-center" style="font-family: 'Kanit', sans-serif; margin-top:-40px; font-size: 40px;">
                    Awesome feature
                </h1>
            </div>
            <div class="d-flex align-items-center justify-content-center"
                style="height: 100%; font-family: 'Kanit', sans-serif;">
                <li class="nav-item list-unstyled text-center">
                    <img src="<?= IMG ?>icon-car.png" height="40" width="40" style="margin-right: 5px;" alt="">
                    <h1 style="font-size: 20px;">Antar Jemput</h1>
                    <p class="text-secondary" style="margin-left: 10px;">pelayanan antar jemput <br>mobil di mana pun
                    </p>
                </li>
                <li class="nav-item list-unstyled text-center">
                    <img src="../public/img/icon-car.png" height="40" width="40" style="margin-left: 60px;" alt="">
                    <h1 style="font-size: 20px; margin-left: 70px;">Pembayaran COD</h1>
                    <p class="text-secondary" style="margin-left: 65px;">pelayanan antar jemput <br>mobil di mana pun
                    </p>
                </li>
                <li class="nav-item list-unstyled text-center">
                    <img src="../public/img/icon-car.png" height="40" width="40" style="margin-left: 60px;" alt="">
                    <h1 style="font-size: 20px; margin-left: 70px;">Pembayaran COD</h1>
                    <p class="text-secondary" style="margin-left: 65px;">pelayanan antar jemput <br>mobil di mana pun
                    </p>
                </li>
            </div>
        </div>
    </div>
</div>


<div id="Car" class="container-fluid py-5 bg-body-secondary ">
    <div class="row align-items-center">
        <div class="col-12"></div>
        <div class="d-flex align-items-center justify-content-center"
            style="font-family: 'Kanit', sans-serif; margin-top:-30px;">
            <h1 style="font-size: 30px;">Choose your best car</h1>
        </div>

        <!-- card car -->
        <div class="d-flex justify-content-center">
            <?php foreach ($data['mobil'] as $mobil) { ?>
                <div class="card m-2 shadow" style="width: 18rem;">
                    <img src="<?= IMG.$mobil['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mobil['nama'] ?></h5>
                        <p class="card-text"><?= $mobil['deskripsi'] ?></p>
                        <a href="#" class="btn btn-warning">Rent Car</a>
                    </div>
                </div>
            <?php } ?>
            <div class="card m-2 shadow" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-warning">Rent Car</a>
                </div>
            </div>
            <div class="card m-2 shadow" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-warning">Rent Car</a>
                </div>
            </div>
            <div class="card m-2 shadow" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-warning">Rent Car</a>
                </div>
            </div>
        </div>

        <!-- Card car -->

    </div>
</div>