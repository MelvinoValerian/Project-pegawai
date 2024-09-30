<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    body {
        background-color: #e0f7fa;
        /* Warna latar belakang biru muda */
        color: #333333;
        /* Warna teks lebih gelap untuk kontras */
        font-family: 'Arial', sans-serif;
        padding: 20px;
    }

    .container {
        margin-top: 50px;
    }

    h3 {
        text-align: center;
        margin-bottom: 30px;
        color: #1976d2;
        /* Warna heading biru gelap */
    }

    table {
        background-color: #ffffff;
        /* Warna tabel putih */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Bayangan lembut untuk kedalaman */
    }

    th {
        background-color: #64b5f6;
        /* Warna header biru muda */
        color: white;
        text-align: center;
        padding: 15px;
        border-bottom: 3px solid #dddddd;
    }

    td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #dddddd;
        color: #333333;
    }

    tr:nth-child(even) {
        background-color: #b2ebf2;
        /* Warna biru muda untuk baris genap */
    }

    tr:nth-child(odd) {
        background-color: #90caf9;
        /* Warna biru untuk baris ganjil */
    }

    tr:hover {
        background-color: #42a5f5;
        /* Warna hover biru cerah */
        color: white;
        /* Warna teks berubah saat di-hover */
    }

    .btn-success {
        background-color: #43a047;
        border: none;
    }

    .btn-danger {
        background-color: #e53935;
        border: none;
    }

    .btn-primary {
        background-color: #1e88e5;
        border: none;
    }

    .btn-primary:hover,
    .btn-success:hover,
    .btn-danger:hover {
        opacity: 0.8;
        /* Efek hover pada tombol */
    }
    </style>
</head>

<body>

    <div class="container">
        <h3>Daftar Pegawai</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA PEGAWAI</th>
                    <th>NIK</th>
                    <th>NO TELEPON</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>USERNAME</th>
                    <th>JABATAN</th>
                    <th>GAJI TOTAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "koneksi.php";
                    $qry_pegawai = mysqli_query($conn, "SELECT * FROM pegawai JOIN jabatan ON pegawai.Jabatan_id = jabatan.id");
                    $no=0;
                    while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_pegawai['Nama']?></td>
                    <td><?=$data_pegawai['Nik']?></td>
                    <td><?=$data_pegawai['No_tlp']?></td>
                    <td><?=$data_pegawai['Alamat']?></td>
                    <td><?=$data_pegawai['Jenis_kelamin']?></td>
                    <td><?=$data_pegawai['username']?></td>
                    <td><?=$data_pegawai['Nama_jabatan']?></td>
                    <td><?=number_format($data_pegawai['Gaji_pokok'] + $data_pegawai['Tunjangan'], 0, ',', '.')?></td>
                    <td>
                        <a href="ubah_pegawai.php?Id=<?=$data_pegawai['Id']?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="hapus.php?Id=<?=$data_pegawai['Id']?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="register.php" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>