<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Family</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Akhir CSS -->

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Akhir JS -->
</head>

<body id="">
    <style></style>

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
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Konten -->
    <form action="history.php" method="POST">
        <br /><br /><br />
        <div class="container">
            <div class="shadow-lg p-3 mb-5 bg-body rounded">
                <center>
                    <div class="card" style="width: 18rem">
                        <img src="../img/singel.jpg" class="card-img-top" alt="..." style="height: 180px" />
                        <div class="card-body">
                            <h5 class="card-title">Singel Room Type A3</h5>
                            <p class="card-text">Kamar Sempurna dan Minimalis Untuk Satu Orang<br>
                            <ul class="text-start">
                                <li>Kasur : 1</li>
                                <li>Wi-fi : YES</li>
                                <li>Dapur : No</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <br><br>
                    <table>
                        <tr>
                            <th>
                                <br>Isi Formulir Dibawah !<br><br>
                            </th>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <th>&nbsp;:&nbsp;</th>
                            <th><input type="text" name="tipe"></th>
                        </tr>
                        <tr>
                            <th>Nama </th>
                            <td> : </td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <th>No. Telepon</th>
                            <td> : </td>
                            <td> <input type="number" name="no"></td>
                        </tr>
                        <tr>
                            <th>Jumlah Kamar</th>
                            <td> : </td>
                            <td> <input type="number" name="jumlah"></td>
                        </tr>
                        <tr>
                            <th>Lama Menginap</th>
                            <td> : </td>
                            <td> <input type="number" name="lama"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : </td>
                            <td><textarea class="form-control" id="Pesan" name="alamat" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;<br><br></td>
                            <td>
                                <button class="btn btn-primary" type="submit" name="simpan">Pesan</button>
                                <button class="btn btn-danger" type="reset" name="tee">Hapus</button>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
        <!-- Akhir Konten -->

        <!-- footer -->
        <footer style="background-color: #011b64"" class=" p-4">
            <p style="color: #ffff" class="text-center">
                Created with
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-heart-fill" style="color: red" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg>
                by
                <a style="color: #ffff" class="fw-bold" href="">Tim 1</a>
                <i class="text-end">&#169; copyright 2022 </i>
            </p>
        </footer>
        <!-- akhir footer -->
    </form>
</body>

</html>