<?php
// Start the session
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>
<!DOCTYPE html>
<?php include 'config.php'; ?>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>jualbeliHandphone/pesanan/</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg d-flex bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">Apple Store</a>
            
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pesanan.php">Pesanan</a></li>
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
                        </button>
                        <ul class="dropdown-menu">
                        <li><a href="logout.php">Logout</a></li>
                        </ul>
                        </div>
    
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="assets/img/s.png " alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Apple Store</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Tempat jual Hand Phone Termurah Sejagat Raya</p>
            </div>
        </header>
        
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Info</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-15 ms-auto"><p class="lead">Selamat datang di Apple Store, solusi terbaik untuk semua kebutuhan hand phonesehari hari anda.</p></div>
                    <div class="col-lg-15 me-auto"><p class="lead">Mengapa Memilih Kami?<br>

                    1.  Produk Berkualitas: Semua yang kami jual asli dan bergaransi.<br>
                    2.  Harga Terjangkau: Kami menawarkan produk dengan harga yang kompetitif.<br>
                    3.  Layanan Pelanggan Terbaik: Tim kami siap membantu Anda menemukan sparepart yang tepat dan memberikan panduan perbaikan.<br>
                    4.  Pengiriman Cepat dan Aman: Kami menyediakan pengiriman ke seluruh wilayah atau opsi pengambilan langsung di toko.<br>
                    5.  Kunjungi [Nama Toko Anda] untuk mendapatkan diskon terbaik. Kami siap memberikan layanan yang terbaik!</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="pesanan.php">
                    <i class="fas fa-shopping-cart"></i>
                        Cek Barang Sekarang
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hubungi Kami</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Anda belum memasukkan nama.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="nama@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Anda belum memasukkan alamat email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">email tidak valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(+62) 856-7890-9907" data-sb-validations="required" />
                                <label for="phone">Nomor Hp</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">nomor hp diperlukan</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">pesan anda diperlukan.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Pengiriman formulir berhasil!</div>
                                    Daftar terlebih dahulu ntuk mengaktifkan formulir ini
                                    <br />
                                    <a href="index.php">BELUM ADA</a>
                                </div>
                            </div>
                            <!-- Submit Button-->
                            
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                            <div class="d-none" id="submitSuccessMessage"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi</h4>
                        <p class="lead mb-0">
                            Apple Store
                            <br />
                            Jl.Senayan Ds.Sugiwaras Tuban Jawa Timur Indonesia
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tentang Pembuat</h4>
                        <p class="lead mb-0">
                        Halo, nama saya Muhammad Firman Hafiz.Saya memiliki keahlian dalam Pembuat Website dan saat ini Sekolah di SMK TJP atau menjalankan profesi saya sebagai pelajar
                            <a href="http://instagram.com/@mhfirmane">Follow Dong</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Hafiz 2024</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const form = document.getElementById('contactForm');
                const submitButton = document.getElementById('submitButton');
                const successMessage = document.getElementById('submitSuccessMessage');

            form.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit default
            successMessage.classList.remove('d-none'); // Tampilkan pesan sukses
            successMessage.innerHTML = '<div class="text-center mb-3"><div class="fw-bolder">Data telah dikirim!</div></div>';
            submitButton.disabled = true; // Menonaktifkan tombol submit
            form.reset(); // Mengosongkan form
            });
            });
        </script>
    </body>
</html>
