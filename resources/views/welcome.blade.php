<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Yayasan Darul Hikam</title>
            <!-- Favicon global -->
        <link rel="icon" href="{{ asset('assets/images/logoyayasandarulhikam.jpg') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('assets/images/logoyayasandarulhikam.jpg') }}" type="image/x-icon">



    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero-section {
            height: 80vh;
            background-image: linear-gradient(
                    rgba(0,0,0,0.6),
                    rgba(0,0,0,0.6)
                ),
                url('https://images.unsplash.com/photo-1523240795612-9a054b0db644');

            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>


<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img 
                src="{{ asset('assets/images/logoyayasandarulhikam.jpg') }}"
                alt="Logo Darul Hikam"
                height="50"
            >
        </a>

        <!-- Login Button -->
        <a href="/login" class="btn btn-success">
            Login
        </a>

    </div>

</nav>



<!-- ================= HERO ================= -->
<section class="hero-section text-white d-flex align-items-center">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Yayasan Darul Hikam
        </h1>

        <p class="lead mt-3">
            Membangun generasi unggul melalui pendidikan, akhlak, dan inovasi.
        </p>

        <div class="mt-4">
            <a href="#tentang" class="btn btn-success btn-lg me-2">
                Tentang Kami
            </a>

            <a href="/login" class="btn btn-outline-light btn-lg">
                Login Sistem
            </a>
        </div>

    </div>

</section>



<!-- ================= TENTANG ================= -->
<section id="tentang" class="py-5">

    <div class="container">

        <div class="row align-items-center">
        <!-- Image -->
        <div class="col-md-6">

            <img 
                src="{{ asset('assets/images/logoyayasandarulhikam.jpg') }}"
                class="img-fluid rounded"
                alt="Kegiatan Pendidikan Yayasan Darul Hikam"
            >

        </div>

            <!-- Content -->
            <div class="col-md-6">

                <h2 class="fw-bold mb-4">
                    Tentang Yayasan Darul Hikam
                </h2>

                <p class="text-muted">
                    Yayasan Darul Hikam merupakan lembaga pendidikan yang berkomitmen
                    dalam membangun generasi yang berilmu, berakhlak, dan berdaya saing.
                </p>

                <p class="text-muted">
                    Melalui berbagai program pendidikan dan pengembangan karakter,
                    kami berupaya menciptakan lingkungan belajar yang inspiratif
                    dan inovatif bagi peserta didik.
                </p>

                <a href="#" class="btn btn-success mt-3">
                    Selengkapnya
                </a>

            </div>

        </div>

    </div>

</section>



<!-- ================= PROGRAM ================= -->
<section id="program" class="bg-light py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Program Pendidikan
        </h2>

        <div class="row g-4">

            <!-- Program 1 -->
            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <div class="mb-3">
                        <img 
                            src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                            width="70"
                            alt="Sekolah Dasar"
                        >
                    </div>

                    <h5 class="fw-bold">
                        Sekolah Dasar
                    </h5>

                    <p class="text-muted">
                        Program pendidikan dasar yang menanamkan ilmu pengetahuan
                        serta nilai karakter kepada siswa.
                    </p>

                </div>

            </div>


            <!-- Program 2 -->
            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <div class="mb-3">
                        <img 
                            src="https://cdn-icons-png.flaticon.com/512/3135/3135789.png"
                            width="70"
                            alt="Sekolah Menengah"
                        >
                    </div>

                    <h5 class="fw-bold">
                        Sekolah Menengah
                    </h5>

                    <p class="text-muted">
                        Program pendidikan lanjutan untuk mempersiapkan siswa
                        menghadapi tantangan masa depan.
                    </p>

                </div>

            </div>


            <!-- Program 3 -->
            <div class="col-md-4">

                <div class="card border-0 shadow h-100 text-center p-4">

                    <div class="mb-3">
                        <img 
                            src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                            width="70"
                            alt="Pengembangan Karakter"
                        >
                    </div>

                    <h5 class="fw-bold">
                        Pengembangan Karakter
                    </h5>

                    <p class="text-muted">
                        Program pembinaan karakter, kepemimpinan,
                        dan pengembangan potensi siswa.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ================= KONTAK ================= -->
<section id="kontak" class="py-5">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Kontak Kami
        </h2>

        <div class="row text-center">

            <div class="col-md-4">

                <h5>Alamat</h5>

                <p class="text-muted">
                    Jl. Contoh No 123 <br>
                    Jakarta, Indonesia
                </p>

            </div>

            <div class="col-md-4">

                <h5>Telepon</h5>

                <p class="text-muted">
                    0812-3456-7890
                </p>

            </div>

            <div class="col-md-4">

                <h5>Email</h5>

                <p class="text-muted">
                    info@darulhikam.org
                </p>

            </div>

        </div>

    </div>

</section>



<!-- ================= FOOTER ================= -->
<footer class="bg-dark text-white py-4">

    <div class="container text-center">

        <p class="mb-1">
            Yayasan Darul Hikam
        </p>

        <small>
            © {{ date('Y') }} All Rights Reserved
        </small>

    </div>

</footer>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>