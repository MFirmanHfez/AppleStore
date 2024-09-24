<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AppleStoreOfficial/pesanan/</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* CSS for aligning image and specifications side by side */
        .modal-body .specification-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .modal-body .specification-container img {
            max-width: 300px;
            margin-right: 30px;
        }
        .modal-body .specification-container .specifications {
            max-width: 400px;
            text-align: left;
        }
        .modal-body .specification-container .specifications h4 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Apple Store</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Log Out</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pesanan.php">Pesanan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Barang Yang Tersedia</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">

            <?php 
                // Array dengan data pesanan
                $pesanan = [
                    [
                        'id_pesanan' => 1,
                        'nama_barang' => 'MacBook',
                        'foto' => 'amc.jpg',
                        'storage' => '256GB',
                        'processor' => 'A4+ Bionic',
                    ],
                    [
                        'id_pesanan' => 2,
                        'nama_barang' => 'iPhone 8',
                        'foto' => 'a8.jpg',
                        'storage' => '128GB',
                        'processor' => 'A9 Bionic',
                    ],
                    [
                        'id_pesanan' => 3,
                        'nama_barang' => 'Iphone X',
                        'foto' => 'f9.jpg',
                        'storage' => '128GB',
                        'processor' => 'A10 Bionic',
                    ],
                    [
                        'id_pesanan' => 4,
                        'nama_barang' => 'iPhone XS',
                        'foto' => 'axs.jpg',
                        'storage' => '128GB',
                        'processor' => 'A10+ Bionic',
                    ],
                    [
                        'id_pesanan' => 5,
                        'nama_barang' => 'iPhone XR',
                        'foto' => 'xr.jpg',
                        'storage' => '128GB',
                        'processor' => 'A11 Bionic',
                    ],
                    [
                        'id_pesanan' => 6,
                        'nama_barang' => 'iPhone 11',
                        'foto' => 'a11.jpg',
                        'storage' => '256GB',
                        'processor' => 'A12 Bionic',
                    ],
                    [
                        'id_pesanan' => 7,
                        'nama_barang' => 'iPhone 12',
                        'foto' => 'a12.jpg',
                        'storage' => '256GB',
                        'processor' => 'A13 Bionic',
                    ],
                    [
                        'id_pesanan' => 8,
                        'nama_barang' => 'iPhone 13',
                        'foto' => 'b13.jpg',
                        'storage' => '256GB',
                        'processor' => 'A14 Bionic',
                    ],
                    [
                        'id_pesanan' => 9,
                        'nama_barang' => 'iPhone 14',
                        'foto' => 'a14.jpg',
                        'storage' => '512GB',
                        'processor' => 'A15 Bionic',
                    ],
                    [
                        'id_pesanan' => 10,
                        'nama_barang' => 'iPhone 15',
                        'foto' => 'z15.jpg',
                        'storage' => '512GB',
                        'processor' => 'A16 Bionic',
                    ],
                    [
                        'id_pesanan' => 11,
                        'nama_barang' => 'iPhone 16 Pre Order',
                        'foto' => 'az.jpg',
                        'storage' => '512GB',
                        'processor' => 'A18+ Bionic',
                    ],
                    [
                        'id_pesanan' => 13,
                        'nama_barang' => 'ADAPTOR',
                        'foto' => 'adptr.jpg',
                        'storage' => '128GB',
                        'processor' => 'A14 Bionic',
                    ],
                    [
                        'id_pesanan' => 14,
                        'nama_barang' => 'KABEL LIGHNING',
                        'foto' => 'ligt.jpg',
                        'WAT' => '20 WAT',
                        'processor' => 'A14 Bionic',
                    ],
                    [
                        'id_pesanan' => 15,
                        'nama_barang' => 'APPLE WATCH',
                        'foto' => 'wat.png',
                        'storage' => '10GB',
                        'processor' => 'Apple M2',
                    ],


                    // Anda bisa melanjutkan data pesanan di sini
                ];

                // Menampilkan data pesanan
                foreach ($pesanan as $row) { 
            ?>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1-<?= $row['id_pesanan'] ?>">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/<?= $row['foto'] ?>" alt="..." />
                    </div>
                </div>
                <!-- Modal with Image and Specifications Side by Side -->
                <div class="portfolio-modal modal fade" id="portfolioModal1-<?= $row['id_pesanan'] ?>" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?= $row['nama_barang'] ?></h2>
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Image and Specifications Side by Side -->
                                            <div class="specification-container">
                                                <!-- Product Image -->
                                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/<?= $row['foto'] ?>" alt="..." />
                                                <!-- Product Specifications -->
                                                <div class="specifications">
                                                    <h4>Spesifikasi</h4>
                                                    <p><strong>Brand:</strong> Apple</p>
                                                    <p><strong>Model:</strong> <?= $row['nama_barang'] ?></p>
                                                    <p><strong>Storage:</strong> <?= $row['storage'] ?></p>
                                                    <p><strong>Processor:</strong> <?= $row['processor'] ?></p>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                                <i class="fas fa-cart-arrow-down"></i> Batal
                                            </button>
                                            <a href='pembelian.php?id=<?= $row['id_pesanan'] ?>'><button type='button' class='btn btn-secondary'>
                                                <i class="fas fa-cart-plus"></i> Beli
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Muhammad Firman Hafiz</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
