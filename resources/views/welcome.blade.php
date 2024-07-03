<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngalangombo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            height: 100vh;
            background-image: url('./assets/images/Muncak.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 4rem;
        }

        .hero p {
            font-size: 1.5rem;
        }

        .header {
            position: relative;
            background-image: url('./assets/images/awan.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar {
            margin-top: 20px;
            width: 100%;
        }

        .navbar-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .nav-item {
            margin: 0 10px;
        }

        .navbar-link {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
        }

        .ngalangombo {
            font-size: 3rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 5px;
            margin-right: 10px;
        }

        .left-align {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            color: white;
        }

        .container {
            text-align: center;
            padding-top: 20px;
        }

        .pengenalan {
            text-align: left;
            margin-top: 75px;
        }

        .penjelasan {
            text-align: left;
            margin-top: 25px;
        }

        .bio {
            margin-top: -5px;
            font-size: 15px;
        }

        .section-title {
            font-weight: bold;
        }

        .about-section {
            background-color: #e0f7fa;
            padding: 50px 20px;
        }

        .maps-section {
            background-color: #f1f8e9;
            padding: 50px 20px;
        }

        .contact-section {
            background-color: #fff3e0;
            padding: 50px 20px;
        }

        @media (max-width: 768px) {
            .hero {
                height: auto;
                padding: 40px 20px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .ngalangombo {
                font-size: 2rem;
                margin-top: 10px;
            }

            .navbar-list {
                flex-direction: column;
                align-items: center;
            }

            .nav-item {
                margin: 5px 0;
            }
        }
    </style>
</head>

<body>
    <header class="header" data-header>
        <div class="container">
            <nav class="navbar d-flex flex-column flex-md-row justify-content-between align-items-center" data-navbar>
                <a class="ngalangombo" data-nav-link>Ngalangombo</a>
                <ul class="navbar-list d-flex flex-column flex-md-row justify-content-center align-items-center">
                    <li class="nav-item">
                        <a href='{{ route('welcome') }}' class="navbar-link" data-nav-link>Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="navbar-link" data-nav-link>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#maps" class="navbar-link" data-nav-link>Maps</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactUs" class="navbar-link" data-nav-link>Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="hero">
        <div class="container">
            <h1>Ngalangombo</h1>
            <p>
                Alamat: Ngalangombo, Tileng, Kec. Girisubo, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta,
                Indonesia
            </p>
            <div class="pengenalan">
                <h2>Kampung KB Ngalangombo</h2>
                <p class="section-title">Pengenalan</p>
                <div class="penjelasan">
                    <div class="bio">
                        Padukuhan Ngalangombo, yang terletak di Desa Dadapayu, Kecamatan Semanu, Kabupaten Gunungkidul,
                        dikenal
                        sebagai Kampung Keluarga Berencana (Kampung KB) yang sukses. Dengan berbagai program yang
                        mendukung
                        keluarga berencana, kesehatan, dan pembangunan masyarakat, Ngalangombo telah meraih berbagai
                        penghargaan
                        atas prestasinya dalam meningkatkan kualitas hidup warganya.
                    </div>
                </div>
                <div class="penjelasan">
                    <p class="section-title">Kondisi Geografis</p>
                    <div class="bio">
                        Wilayah Ngalangombo memiliki karakteristik perbukitan dengan sumber daya air yang terbatas.
                        Meskipun
                        demikian, masyarakatnya yang ulet mampu memanfaatkan lahan yang ada untuk pertanian dan kegiatan
                        penghidupan lainnya. Akses jalan ke Ngalangombo cukup jauh dan harus melewati perbukitan dengan
                        kondisi jalan yang mulai rusak.
                    </div>
                </div>

                <div class="penjelasan">
                    <p class="section-title">Pencapaian Terbaru</p>
                    <div class="bio">
                        Pada tahun 2023, Padukuhan Ngalangombo dinobatkan sebagai salah satu dari lima Kampung KB
                        terbaik di
                        Daerah Istimewa Yogyakarta. Penghargaan ini menunjukkan dedikasi dusun dalam meningkatkan
                        kehidupan
                        warganya melalui program pembangunan yang menyeluruh.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about-section">
        <div class="container">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula urna at leo tincidunt, nec
                consequat eros dapibus. Integer gravida nec risus eu elementum.</p>
        </div>
    </section>

    <section id="maps" class="maps-section">
        <div class="container">
            <h2>Maps</h2>
            <div class="ratio ratio-16x9"
                style="box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1); border: 2px solid #ddd; border-radius: 4px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1545261700046!2d110.77458727471936!3d-8.167938192008932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc74c2671e52b%3A0x53b219e3b79b770c!2sBalai%20Dusun%20ngalangombo!5e0!3m2!1sen!2sid!4v1688782148265!5m2!1sen!2sid"
                    width="600" height="450" style="border:0; border-radius: 4px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <section id="contactUs" class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Hariyanto Tandung / +628 9540 9210 205</p>
        </div>
    </section>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <p class="mb-0">
                Program Kerja Pribadi KKN - Universitas Atma Jaya Yogyakarta (UAJY) ~
                Hariyanto Tandung / 210711205
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const navToggleBtn = document.querySelector('[data-menu-toggle-btn]');
        const navbarList = document.querySelector('[data-navbar] ul.navbar-list');

        navToggleBtn.addEventListener('click', function() {
            navbarList.classList.toggle('active');
        });
    </script>

</body>

</html>
