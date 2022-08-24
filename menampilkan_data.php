<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data PHP Native</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        .content {
            margin-top: 50px
        }

        table,tr,td {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
            padding: 10px; 
        }

        table {
            width: 70%;
            margin-bottom: 50px;
        }
        
        thead {
            background-color: #064663;
            color: white;
        }

        tbody {
            background-color: #ECB365;
        }

    </style>
</head>
<body>
    <center>
        <div class="content">
        <h4>Menampilkan Semua Data Pegawai</h4>
        <table value="1">
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                         
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, 'SELECT * FROM tbl_pegawai');
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tbody>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai Berjenis Laki-Laki</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, 'SELECT *, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM tbl_pegawai where jns_kel="L" ');
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai dengan Status Menikah</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                       
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, 'SELECT *, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM tbl_pegawai where status="M" ');
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai dengan Status Belum Menikah</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                              
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, 'SELECT *, TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS umur FROM tbl_pegawai where status="B" ');
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai yang Usianya diantara 20 sampai dengan 30</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                
                    <td>Umur</td>                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 20 AND 30");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                    <td><?php echo $data['umur'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai yang Usianya diantara 31 sampai dengan 45</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                
                    <td>Umur</td>                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 31 AND 45");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                    <td><?php echo $data['umur'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai yang Masa Kerjanya diantara 1 sampai 5 tahun</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                
                    <td>Lama Kerja</td>                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 1 AND 5");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                    <td><?php echo $data['masa'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai yang Masa Kerjanya diantara 6 sampai 10 tahun</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                
                    <td>Lama Kerja</td>                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 6;
            $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 6 AND 10");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                    <td><?php echo $data['masa'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <h4>Menampilkan Data Pegawai yang Masa Kerjanya diantara 11 sampai 25 tahun</h4>
        <table>
            <thead>
                <tr>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>                
                    <td>Status</td>                
                    <td>Mulai Kerja</td>                
                    <td>Lama Kerja</td>                
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 6;
            $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 11 AND 25");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <!-- <td><?php echo $no++ ?></td> -->
                    <td><?php echo $data['nip'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['jns_kel'] ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['mulai_kerja'] ?></td>
                    <td><?php echo $data['masa'] ?></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </center>
</body>
</html>