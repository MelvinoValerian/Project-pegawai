<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #e3f2fd;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .register-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        padding: 30px;
    }

    .form-label {
        font-weight: 500;
        color: #333;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 10px;
        border: 1px solid #90caf9;
        transition: border-color 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #42a5f5;
        box-shadow: none;
    }

    .btn-register {
        background-color: #42a5f5;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        padding: 12px;
        transition: background-color 0.3s ease;
    }

    .btn-register:hover {
        background-color: #1e88e5;
    }

    .form-text {
        text-align: center;
        margin-top: 15px;
        color: #555;
    }

    .form-text a {
        color: #42a5f5;
        text-decoration: none;
    }

    .form-text a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="register-card">
            <h3 class="text-center mb-4">Register</h3>
            <form action="proses_register.php" method="post">
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Masukkan Nama Lengkap"
                        required>
                </div>
                <div class="mb-3">
                    <label for="NIK" class="form-label">NIK</label>
                    <input type="text" name="NIK" class="form-control" id="NIK" placeholder="Masukkan NIK" required>
                </div>
                <div class="mb-3">
                    <label for="no_tlp" class="form-label">No Telepon</label>
                    <input type="text" name="no_tlp" class="form-control" id="no_tlp"
                        placeholder="Masukkan Nomor Telepon" required>
                </div>
                <div class="mb-3">
                    <label for="Jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="Jenis_kelamin" class="form-select" id="Jenis_kelamin" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea name="Alamat" class="form-control" id="Alamat" rows="3" placeholder="Masukkan Alamat"
                        required></textarea>
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label">Jabatan</label>
                    <select name="id" class="form-select" id="id" required>
                        <option value="" disabled selected>Pilih Jabatan</option>
                        <?php 
                            include "koneksi.php";
                            $qry_jabatan = mysqli_query($conn, "SELECT * FROM jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['Nama_jabatan'].'</option>';    
                            }
                            ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username"
                        placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Masukkan Password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="simpan" class="btn btn-register">Daftar</button>
                </div>
                <p class="form-text">Sudah punya akun? <a href="login.php">Masuk</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>