<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    body {
        background-color: #f7f9fc;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-label {
        font-weight: 500;
        color: #333;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px;
        border: 1px solid #d1d5db;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #4299e1;
        box-shadow: none;
    }

    .btn-primary {
        background-color: #4299e1;
        color: white;
        font-weight: 600;
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #3182ce;
    }

    /* Tambahkan gaya responsif */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        h3 {
            font-size: 1.5rem;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <h3>Tambah Jabatan</h3>
        <form action="proses_tambah_jabatan.php" method="post">
            <div class="mb-3">
                <label for="Nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" name="Nama_jabatan" class="form-control" placeholder="Masukkan Nama Jabatan"
                    required>
            </div>
            <div class="mb-3">
                <label for="Gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="text" name="Gaji_pokok" class="form-control" placeholder="Masukkan Gaji Pokok" required>
            </div>
            <div class="mb-3">
                <label for="Tunjangan" class="form-label">Tunjangan</label>
                <input type="text" name="Tunjangan" class="form-control" placeholder="Masukkan Tunjangan" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah Jabatan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>