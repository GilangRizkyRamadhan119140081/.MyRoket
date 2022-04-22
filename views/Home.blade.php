<<?php 
    $koneksi=mysqli_connect("localhost","root","","dbmatkul");
    $hasil=mysqli_query($koneksi,"SELECT * FROM Matakuliah");

    // $kode_kelas = $_POST['kode_kelas'];
    // $nama_kelas = $_POST['nama_kelas'];
    // $kode_matakuliah = $_POST['kode_matakuliah'];
    // $nama_matakuliah = $_POST['nama_matakuliah'];
    // $sks = $_POST['sks'];

    // $querry = "INSERT INTO Matakuliah VALUES('$kode_kelas','$nama_kelas','$kode_matakuliah','$nama_matakuliah','$sks')";
    // querry($koneksi, $query);



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 1</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- style tampilan -->
    <style>
        .box-options{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
            margin-left: 2%;

        }
        



























    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Semester</h1>
    <form>
        <input class="search" type="text" placeholder="Cari..." required>     
    </form>
    <input class="button" type="button" value="Tampilkan"> 

    <nav class="navi">
    <ul>
    <a href="#">Mata Kuliah Prodi</a></li>
    <a href="#">Mata Kuliah Luar Prodi</a></li>
    </ul>
    </nav>

<div class="box-options" style="margin-left: 25%;">
            <label>Show </label>
            <!-- Setelah dipilih akan eksekusi fungsi filter_request -->
            <select id="req_per_page" onchange="filter_requests()">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            entries
        </div>

<div>



    <table border="1" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Sks</th>
            <th>Aksi</th>
        </tr>
        <<?php $i=1; ?>
        <<?php WHILE($row=mysqli_fetch_assoc($hasil)) : ?>
        <tr>
    
            <td><?= $row["kode_kelas"]; ?></td>
            <td><?= $row["nama_kelas"]; ?></td>
            <td><?= $row["kode_matakuliah"]; ?></td>
            <td><?= $row["nama_matakuliah"]; ?></td>
            <td><?= $row["sks"]; ?></td>
            <td><button>aksi</button></td>

        </tr>



        <?php $i++; ?>
        <?php endwhile; ?>



    </table>

    <nav class="navi_bawah">
    <ul>
    <a href="#">Mata Kuliah Prodi</a></li>
    <a href="#">Mata Kuliah Luar Prodi</a></li>
    </ul>
    </nav>
    


</body>
</html>