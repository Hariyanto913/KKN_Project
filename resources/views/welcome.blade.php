<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngalangombo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../public/girisuboLogo.png">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        /* CSS for bg{ */
        .hero {
            height: 110vh;
            /* background-image: url('/../public/assets/images/danau.jpeg'); */
            background-image: url('./assets/images/danau.jpeg');
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

        /* } */

        /* CSS for Header */
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .ngalangombo {
            font-size: 3rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 5px;
            margin-right: auto;
            /* Membuat teks Ngalangombo berada di ujung kiri */
        }

        .navbar-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            /* Mengatur posisi item navbar di ujung kanan */
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
            text-align: justify;
        }

        .bio2 {
            padding-top: 25px;
        }

        .section-title {
            font-weight: bold;
        }

        /* .about-section {
            background-color: #e0f7fa;
            padding: 50px 20px;
        }

        .about {
            text-align: justify;
        } */

        .about-section {
            background-color: #e0f7fa;
            padding: 50px 20px;
        }

        .about {
            text-align: justify;
        }

        .maps-section {
            background-color: #f1f8e9;
            padding: 50px 20px;
        }

        .contact-section {
            background-color: #fff3e0;
            padding: 50px 20px;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            /* Aspect Ratio 16:9 */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #ddd;
            border-radius: 4px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .about-link {
            display: inline-block;
            margin-top: 15px;
            font-size: 18px;
            color: #007bff;
            text-decoration: underline;
            cursor: pointer;
        }

        .about-link:hover {
            color: #0056b3;
        }

        /* Animation styles */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOutDown {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .fade-out-down {
            animation: fadeOutDown 0.5s ease-out forwards;
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
                text-align: center;
                display: block;
                width: 100%;
            }

            .navbar-list {
                flex-direction: column;
                align-items: center;
            }

            .nav-item {
                margin: 5px 0;
            }

            .about-section {
                text-align: center;
                padding: 10px;
            }

            .about {
                font-size: 14px;
                line-height: 1.6;
            }
        }
    </style>
</head>

<body>
    <header class="header" data-header>
        <nav class="navbar navbar-expand-md d-flex flex-column flex-md-row justify-content-between align-items-center"
            data-navbar>
            {{-- <a class="ngalangombo" data-nav-link>Ngalangombo</a> --}}
            <ul class="navbar-list d-flex flex-column flex-md-row justify-content-end align-items-center">
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
    </header>

    <div class="hero">
        <div class="container">
            <h1>Ngalangombo</h1>
            <p>
                Ngalangombo, Tileng, Kec. Girisubo, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta,
                Indonesia
            </p>
            <div class="pengenalan">
                <h2>Kampung Ngalangombo</h2>
                <p class="section-title">Pengenalan</p>
                <div class="penjelasan">
                    <div class="bio">
                        Padukuhan Ngalangombo, yang terletak di Desa Tileng, Kecamatan Girisubo, Kabupaten Gunungkidul,
                        dikenal
                        sebagai salah satu kampung yang sangat ramah antar masyrakat dan juga orang baru yang datang ke
                        kampung ngalangombo tersebut. Dengan berbagai program yang
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
                        Meskipun demikian, masyarakatnya yang ulet mampu memanfaatkan lahan yang ada untuk pertanian dan
                        kegiatan
                        penghidupan lainnya. Akses jalan ke Ngalangombo cukup jauh dan harus melewati perbukitan dengan
                        kondisi jalan yang mulai rusak.

                        <div class="bio2">
                            Ngalangombo sendiri memiliki letak yang cukup strategis dengan berbagai macam pantai,
                            berikut ada beberapa
                            contohnya ada Pantai Wediombo, Pantai Srakung, Pantai Sadeng, dan Pantai Ngunap. Dimana
                            Ngalangombo sendiri dapat dijadikan sebagai salah satu tempat untuk persinggahan (posko)
                            untuk menuju pantai-pantai tersebut.
                        </div>
                    </div>
                </div>

                <div class="penjelasan">
                    <p class="section-title">Pencapaian Terbaru</p>
                    <div class="bio">
                        Pada tahun 2024, Padukuhan Ngalangombo ditetapkan sebagai Kampung Pelopor Pancasila. Penetapan
                        ini dilakukan oleh Kodim 0730 Gunungkidul sebagai bentuk penghargaan atas komitmen masyarakat
                        Padukuhan Ngalangombo dalam menerapkan nilai-nilai Pancasila dalam kehidupan sehari-hari.
                        Penghargaan ini menunjukkan dedikasi dusun dalam meningkatkan
                        kehidupan
                        warganya melalui program pembangunan yang menyeluruh.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about-section animate-on-scroll">
        <div class="container">
            <h2>About Us</h2>
            <p class="about">Padukuhan Ngalangombo, terletak di Desa Tileng, Kecamatan Girisubo, Kabupaten Gunungkidul,
                adalah sebuah padukuhan yang dikenal karena semangat gotong-royong dan kemandirian masyarakatnya.
                Serta Ngalangombo sendiri merupakan salah satu padukuhan penjual sapi dan kambing terbaik yang tersedia
                di Gunungkidul.
                Ngalangombo telah menerapkan berbagai program untuk meningkatkan kesejahteraan dan kualitas hidup
                warganya.
                Dengan fokus pada kesehatan, pendidikan, dan pembangunan masyarakat, kami bekerja sama untuk menciptakan
                lingkungan yang harmonis dan berkelanjutan. Meskipun menghadapi tantangan
                geografis seperti akses jalan yang sulit dan sumber daya air yang terbatas, masyarakat Ngalangombo tetap
                ulet dalam mengelola lahan untuk pertanian dan kegiatan ekonomi lainnya.
                Kami bangga dengan pencapaian terbaru kami sebagai salah satu Kampung Pelopor Pancasila. Penghargaan ini
                menjadi bukti dari
                dedikasi dan kerja keras kami dalam membangun masa depan yang lebih baik bagi semua warga Ngalangombo.
            </p>
            <a href="{{ route('kegiatan') }}" class="about-link">
                <i class="fas fa-camera"></i>
                <p>Foto Kegiatan KKN</p>
            </a>
        </div>
    </section>

    <section id="maps" class="maps-section">
        <div class="container">
            <h2>Maps</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1545261700046!2d110.77458727471936!3d-8.167938192008932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bc74c2671e52b%3A0x53b219e3b79b770c!2sBalai%20Dusun%20ngalangombo!5e0!3m2!1sen!2sid!4v1688782148265!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section id="contactUs" class="contact-section animate-on-scroll">
        <div class="container">
            <h2>Contact Us</h2>
            <a href="https://linktr.ee/cavalitionzs">https://linktr.ee/ngalangombo</a>
            <p>Frendy / Hariyanto</p>
        </div>
    </section>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <p class="mb-0">
                ©️ Program Kerja Pribadi KKN - Universitas Atma Jaya Yogyakarta (UAJY) ~
                Hariyanto Tandung / 210711205
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script>
        const navToggleBtn = document.querySelector('[data-menu-toggle-btn]');
        const navbarList = document.querySelector('[data-navbar] ul.navbar-list');

        navToggleBtn.addEventListener('click', function() {
            navbarList.classList.toggle('active');
        });

        window.onload = function() {
            if (window.location.hash) {
                history.replaceState(null, null, window.location.pathname);
            }
        };
    </script> --}}

    <script>
        document.getElementById("toggleButton").addEventListener("click", function() {
            var hiddenText = document.getElementById("hiddenText");
            if (hiddenText.style.display === "none") {
                hiddenText.style.display = "block";
                this.textContent = "Show Less";
            } else {
                hiddenText.style.display = "none";
                this.textContent = "Show More";
            }
        });
    </script>

    <script>
        // Function to check if element is in viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to add or remove animation classes
        function handleScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(element => {
                if (isInViewport(element)) {
                    element.classList.add('fade-in-up');
                    element.classList.remove('fade-out-down');
                } else {
                    element.classList.add('fade-out-down');
                    element.classList.remove('fade-in-up');
                }
            });
        }

        // Add event listener for scroll event
        window.addEventListener('scroll', handleScroll);

        // Trigger scroll event to animate elements in the initial viewport
        document.addEventListener('DOMContentLoaded', handleScroll);
    </script>

</body>

</html>
