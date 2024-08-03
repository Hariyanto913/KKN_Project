<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambar Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            margin: 10px;
            max-width: 300px;
            max-height: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery figure {
            margin: 10px;
            text-align: center;
        }

        .gallery img {
            max-width: 300px;
            max-height: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .gallery figcaption {
            margin-top: 10px;
            font-size: 1rem;
            color: #555;
            word-wrap: break-word;
        }

        .btn-primary {
            margin-bottom: 30px;
        }

        @media (max-width: 576px) {
            .gallery figure {
                flex: 0 1 calc(100% - 20px);
                /* flex: 1 1 100%; */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Gambar Kegiatan Selama KKN</h1>
        <div class="gallery">
            <img src="{{ asset('assets/images/KKN/LiveIn.jpeg') }}" alt="Live-In">
            <img src="{{ asset('assets/images/KKN/Pertemuan.jpeg') }}" alt="Bermain Bersama Bocah">
            <img src="{{ asset('assets/images/KKN/CelenganDanEcoPrint.jpeg') }}" alt="Celengan & Eco Print">
            <img src="{{ asset('assets/images/KKN/CelenganDanEcoPrint1.jpeg') }}" alt="Celengan & Eco Print">
            <img src="{{ asset('assets/images/KKN/CelenganDanEcoPrint5.jpeg') }}" alt="Celengan & Eco Print">
            <img src="{{ asset('assets/images/KKN/ProkerSenam.jpeg') }}" alt="Senam Sehat">
            <img src="{{ asset('assets/images/KKN/ProkerSenam1.jpeg') }}" alt="Senam Sehat">
            <img src="{{ asset('assets/images/KKN/ProkerSenam3.jpeg') }}" alt="Senam Sehat">
            <img src="{{ asset('assets/images/KKN/ProkerPemotongBawang.jpeg') }}" alt="Pemotong Bawang">
            <img src="{{ asset('assets/images/KKN/ProkerDone.jpeg') }}" alt="Website">
            <img src="{{ asset('assets/images/KKN/ProkerTongSampah.jpeg') }}" alt="Tong Sampah">
            <img src="{{ asset('assets/images/KKN/ProkerTongSampah1.jpeg') }}" alt="Tong Sampah">
            <img src="{{ asset('assets/images/KKN/ProkerTongSampah5.jpeg') }}" alt="Tong Sampah">
            <img src="{{ asset('assets/images/KKN/ProkerBatikJumputan.jpeg') }}" alt="Batik Jumputan">
            <img src="{{ asset('assets/images/KKN/ProkerBatikJumputan1.jpeg') }}" alt="Batik Jumputan">
            <img src="{{ asset('assets/images/KKN/ProkerBatikJumputan2.jpeg') }}" alt="Batik Jumputan">
            <img src="{{ asset('assets/images/KKN/Bakar.jpeg') }}" alt="Bakar-Bakar">
            <img src="{{ asset('assets/images/KKN/Bakar1.jpeg') }}" alt="Bakar-Bakar">
            <img src="{{ asset('assets/images/KKN/Bakar2.jpeg') }}" alt="Bakar-Bakar">
            <img src="{{ asset('assets/images/KKN/Makan.jpeg') }}" alt="Makan">
            <img src="{{ asset('assets/images/KKN/Pameran.jpeg') }}" alt="Pameran">
            <img src="{{ asset('assets/images/KKN/Pameran2.jpeg') }}" alt="Pameran">
            <img src="{{ asset('assets/images/KKN/Pameran4.jpeg') }}" alt="Pameran">
            <img src="{{ asset('assets/images/KKN/PerpisahanAnak.jpeg') }}" alt="PerpisahanAnak">
            <img src="{{ asset('assets/images/KKN/PerpisahanAnak1.jpeg') }}" alt="PerpisahanAnak">
            <img src="{{ asset('assets/images/KKN/PerpisahanAnak3.jpeg') }}" alt="PerpisahanAnak">
            <img src="{{ asset('assets/images/KKN/Perpisahan1.jpeg') }}" alt="Perpisahan">
            <img src="{{ asset('assets/images/KKN/Perpisahan5.jpeg') }}" alt="Perpisahan">
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary mt-4">Back to Home</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
