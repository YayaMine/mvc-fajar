<!DOCTYPE html>
<html lang="en">

<head style="scroll-behavior: smooth;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Jost:ital@0;1&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap">
</head>

<body class=" overflow-x-hidden" style="font-family: 'Roboto', sans-serif;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-secondary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= BASEURL; ?>" style="font-family: 'Jost', sans-serif;">
                <img src="../public/img/logo.png" width="60" height="60" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>"
                            style="font-family: 'Roboto', sans-serif;">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="#aboutSection"
                            style="font-family: 'Roboto', sans-serif;">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-4" href="#Car" style="font-family: 'Roboto', sans-serif;">CAR</a>
                    </li>
                    <li class="nav-item z-3">
                        <a class="nav-link ms-4" href="" style="font-family: 'Roboto', sans-serif;">ORDER CAR</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center z-3">
                    <li class="nav-item list-unstyled ms-4">
                        <img src="https://img.icons8.com/?size=100&id=16712&format=png&color=000000" height="30"
                            width="30" alt="">
                    </li>
                    <li class="nav-item list-unstyled ms-4">
                        <img src="https://img.icons8.com/?size=100&id=32292&format=png&color=000000" height="30"
                            width="30" alt="">
                    </li>
                </div>
            </div>
        </div>
    </nav>