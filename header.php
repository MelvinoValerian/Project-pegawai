<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    body {
        background: linear-gradient(135deg, #cfe8fc 0%, #a0d8ef 100%);
        /* Gradasi biru muda */
        font-family: 'Arial', sans-serif;
        color: #1c355e;
        /* Warna teks biru gelap */
        height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    .navbar {
        background-color: #a0d8ef;
        padding: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        /* Memberikan efek bayangan */
    }

    .navbar-brand {
        font-weight: bold;
        color: #1c355e;
        /* Warna teks biru gelap */
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .nav-link {
        color: #5a738e;
        /* Biru keabuan untuk kesan mewah */
        font-weight: 500;
    }

    .nav-link:hover {
        color: #1c355e;
    }

    .nav-link.active {
        color: #1c355e;
        font-weight: bold;
    }

    .container {
        margin-top: 50px;
        background-color: #f1f9ff;
        /* Background putih kebiruan */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        /* Bayangan lembut */
        text-align: center;
        max-width: 600px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    h2 {
        color: #1c355e;
        font-weight: bold;
        margin-bottom: 20px;
    }

    p.lead {
        color: #5a738e;
        font-size: 1.2rem;
    }

    footer {
        margin-top: auto;
        background-color: #a0d8ef;
        color: #1c355e;
        text-align: center;
        padding: 1rem;
        font-size: 0.9rem;
    }

    footer a {
        color: #5a738e;
        text-decoration: none;
    }

    footer a:hover {
        color: #1c355e;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PEGAWAI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pegawai.php">Daftar Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambah_jabatan.php">Tambah Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2>Selamat Datang di Dashboard Pegawai</h2>
        <p class="lead">Kelola data pegawai dan jabatan dengan mudah melalui halaman ini.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Manajemen Pegawai. All rights reserved. <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat &
                Ketentuan</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>