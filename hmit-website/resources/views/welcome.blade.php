<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HMIT UTS</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
        }

        /* NAVBAR */
        nav {
            position: fixed;
            width: 100%;
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            z-index: 50;
        }

        .nav-container {
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 40px;
            height: 40px;
        }

        .logo h1 {
            font-weight: bold;
            font-size: 18px;
            color: #1e3a8a;
        }

        .menu {
            display: flex;
            gap: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .menu a {
            text-decoration: none;
            color: #374151;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #1e3a8a;
        }

        /* HERO */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background: linear-gradient(to bottom right, #1e3a8a, #1e40af, #312e81);
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .hero p {
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .hero .desc {
            max-width: 500px;
            margin: auto;
            opacity: 0.8;
            margin-bottom: 25px;
        }

        .btn {
            background: white;
            color: #1e3a8a;
            padding: 12px 25px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            display: inline-block;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        /* SECTION */
        section {
            padding: 100px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        h2 {
            font-size: 30px;
            font-weight: bold;
            color: #1e3a8a;
            margin-bottom: 20px;
        }

        .text {
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* PROGRAM */
        .program {
            background: #f3f4f6;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            max-width: 1100px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .card h3 {
            color: #1e3a8a;
            margin-bottom: 10px;
        }

        .card p {
            color: #6b7280;
            font-size: 14px;
        }

        /* CONTACT */
        .contact {
    min-height: 100vh; /* ini kuncinya */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
        }

        /* FOOTER */
        footer {
            background: #1e3a8a;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <div class="nav-container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo HMIT">
            <h1>HMIT UTS</h1>
        </div>
        <div class="menu">
            <a href="#about">About</a>
            <a href="#program">Program</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div>
        <h1>Himpunan Mahasiswa Informatika</h1>
        <p>Universitas Teknologi Sumbawa</p>
        <p class="desc">
            Wadah kolaborasi, inovasi, dan pengembangan mahasiswa informatika
            untuk menghadapi dunia teknologi yang terus berkembang.
        </p>
        <a href="#about" class="btn">Explore More</a>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <h2>Tentang HMIT</h2>
        <p class="text">
            Himpunan Mahasiswa Informatika (HMIT) Universitas Teknologi Sumbawa merupakan organisasi kemahasiswaan 
            yang menjadi wadah bagi mahasiswa informatika untuk berkembang secara akademik maupun non-akademik.
        </p>
        <p class="text">
            HMIT berperan aktif dalam menciptakan lingkungan yang kolaboratif, inovatif, dan adaptif terhadap 
            perkembangan teknologi digital yang semakin pesat.
        </p>
        <p class="text">
            Dengan semangat kebersamaan dan profesionalisme, HMIT hadir sebagai ruang bagi mahasiswa untuk 
            berkontribusi dan berkreasi.
        </p>
    </div>
</section>

<!-- PROGRAM -->
<section id="program" class="program">
    <h2 style="text-align:center;">Program Unggulan</h2>

    <div class="grid">
        <div class="card">
            <h3>Seminar & Workshop</h3>
            <p>Kegiatan edukatif dengan pembicara profesional.</p>
        </div>

        <div class="card">
            <h3>Pelatihan Coding</h3>
            <p>Program peningkatan skill programming mahasiswa.</p>
        </div>

        <div class="card">
            <h3>Kompetisi Teknologi</h3>
            <p>Ajang kreativitas dan inovasi mahasiswa.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
    <div class="contact-container">
        <h2>Kontak Kami</h2>
        <p>hmit@uts.ac.id</p>
        <p>Instagram: @hmit_uts</p>
        <p>Universitas Teknologi Sumbawa</p>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 HMIT Universitas Teknologi Sumbawa</p>
</footer>

</body>
</html>