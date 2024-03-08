<!DOCTYPE html>
<html lang="en">
<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'klasemen';
$koneksi = mysqli_connect($host, $username, $password, $database);


if (isset($_POST["simpan"])) {

    $tim      = htmlspecialchars($_POST['tim']);
    $kota     = htmlspecialchars($_POST['kota']);

    $sql = mysqli_query($koneksi, "SELECT nama_tim FROM bola WHERE nama_tim = '$tim'");
    $cek = mysqli_num_rows($sql);
    if ($cek > 0) {
        echo "
        <script>
            alert ('Data Tidak Boleh Sama');
            document.location.href ='add_tim.php';
        </script>
        ";
    } else {
        $query = "INSERT INTO bola (nama_tim, kota) VALUES ('$tim', '$kota')";
        mysqli_query($koneksi, $query);

        mysqli_affected_rows($koneksi);

        echo "
            <script>
                alert ('Berhasil Ditambahkan');
                document.location.href ='index.php';
            </script>
            ";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function confirmSubmit() {
            return confirm("Apakah Anda yakin ingin menyimpan data?");
        }
    </script>
    <title>Data Tim</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
        <div class="container">
            <h1 class="display-4">Aplikasi Klasemen Sepakbola</h1>
            
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Tambah Tim Sepakbola</h3>
        <form action="" method="POST" onsubmit="return confirmSubmit()">
            <div class="form-group">
                <label>Nama Tim:</label>
                <input type="text" name="tim" class="form-control" placeholder="Nama Tim" />
            </div>
            <div class="form-group">
                <label>Asal Kota:</label>
                <input type="text" name="kota" class="form-control" placeholder="Asal Kota" />
            </div>
            <input class="btn btn-primary mb-3" type="submit" name="simpan" value="Simpan">
        </form>

    </div>
</body>


</html>