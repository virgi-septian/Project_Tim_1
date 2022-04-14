<?php
if(isset($_POST['simpan'])){
    $type=$_POST['tipe'];
    $nama=$_POST['nama'];
    $no=$_POST['no'];
    $jumlah=$_POST['jumlah'];
    $alamat=$_POST['alamat'];
    $lama=$_POST['lama'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hitory</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Akhir CSS -->

</head>

<body id="history">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #011b64">
        <div class="container-fluid">
            <img src="../img/logo.png" style="height:60px; width: 50px;" alt="">
            <h3 class="navbar-brand ms-2" style="color:rgb(255, 230, 0);">HOTEL</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link" aria-current="page" href="halaman1.html">Home</a>
                    <a class="nav-link" href="#history">History</a>
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- isi -->
    <br><br><br><br><br><br>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <center>
            <table>
                <tr>
                    <th>
                        <center>Pesanan No.1</center>
                        <br>
                    </th>
                </tr>
                <tr>
                    <th>Type </th>
                    <td> : </td>
                    <td>&nbsp; <?php echo $type; ?></td>
                </tr>
                <tr>
                    <th>
                        Nama
                    </th>
                    <td> : </td>
                    <td>&nbsp;<?php echo$nama ?></td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td> : </td>
                    <td>&nbsp; <?php echo $no; ?></td>
                </tr>
                <tr>
                    <th>Jumlah </th>
                    <td> : </td>
                    <td>&nbsp; <?php echo $jumlah; ?></td>
                </tr>
                <tr>
                    <th>Lama Menginap </th>
                    <td> : </td>
                    <td>&nbsp; <?php echo $lama; ?> Hari</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td> : </td>
                    <td> &nbsp;<?php echo $alamat; ?></td>
                </tr>
            </table>
        </center>
    </div>
    <br><br><br><br><br><br>
    <!-- akhir isi -->

    <!-- footer -->
    <footer style="background-color: #011b64"" class=" p-4">
        <p style="color: #ffff" class="text-center">
            Created with
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill"
                style="color: red" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg>
            by
            <a style="color: #ffff" class="fw-bold" href="">Tim 1</a>
            <i class="text-end">&#169; copyright 2022 </i>
        </p>
    </footer>
    <!-- akhir footer -->

</body>

</html>