<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    body {
        background-color: #e3f2fd;
        /* Biru muda sebagai background */
        font-family: 'Poppins', sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
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
        padding: 12px;
        border: 1px solid #90caf9;
        /* Biru muda lembut */
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #42a5f5;
        /* Biru muda sedikit lebih gelap */
        box-shadow: none;
    }

    .btn-primary {
        background-color: #42a5f5;
        /* Biru muda */
        color: white;
        font-weight: bold;
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #1e88e5;
        /* Warna hover biru yang lebih gelap */
    }

    textarea.form-control {
        resize: none;
    }

    /* Gaya responsif untuk layar yang lebih kecil */
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
        <?php 
        include "koneksi.php";
        $qry_get_pegawai = mysqli_query($conn, "select * from pegawai where Id = '".$_GET['Id']."'");
        $dt_pegawai = mysqli_fetch_array($qry_get_pegawai);
        ?>
        <h3>Ubah Pegawai</h3>
        <form action="proses_ubah_pegawai.php" method="post">
            <input type="hidden" name="Id" value="<?=$dt_pegawai['Id']?>">

            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" value="<?=$dt_pegawai['Nama']?>" class="form-control"
                    placeholder="Masukkan Nama Pegawai" required>
            </div>

            <div class="mb-3">
                <label for="Nik" class="form-label">NIK</label>
                <input type="text" name="Nik" value="<?=$dt_pegawai['Nik']?>" class="form-control"
                    placeholder="Masukkan NIK" required>
            </div>

            <div class="mb-3">
                <label for="Jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <?php 
                $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                ?>
                <select name="Jenis_kelamin" class="form-control" required>
                    <option></option>
                    <?php foreach ($arr_gender as $key_gender => $val_gender): 
                        $selek = ($key_gender == $dt_pegawai['Jenis_kelamin']) ? "selected" : ""; ?>
                    <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <textarea name="Alamat" class="form-control" rows="4" placeholder="Masukkan Alamat"
                    required><?=$dt_pegawai['Alamat']?></textarea>
            </div>

            <div class="mb-3">
                <label for="Jabatan_id" class="form-label">Jabatan</label>
                <select name="Jabatan_id" class="form-control" required>
                    <option></option>
                    <?php 
                    $qry_jabatan = mysqli_query($conn, "select * from jabatan");
                    while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                        $selek = ($data_jabatan['id'] == $dt_pegawai['Jabatan_id']) ? "selected" : "";
                        echo '<option value="'.$data_jabatan['id'].'" '.$selek.'>'.$data_jabatan['Nama_jabatan'].'</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" value="<?=$dt_pegawai['username']?>" class="form-control"
                    placeholder="Masukkan Username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control"
                    placeholder="Masukkan Password (Kosongkan jika tidak diubah)">
            </div>

            <button type="submit" name="simpan" class="btn btn-primary">Ubah Pegawai</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>