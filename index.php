<?php
// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'klasemen';
$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Ambil data tim dari database
$query = "SELECT * FROM bola ORDER BY poin DESC, gol_menang DESC";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>

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
    <title>Klasemen Bola</title>
</head>

<body >
    <div class="jumbotron jumbotron-fluid text-center bg-dark text-white">
        <div class="container">
            <h1 class="display-4">Aplikasi Klasemen Sepakbola</h1>
            
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Klasemen Bola</h3>
        <a class="btn btn-primary mb-3" href="add_tim.php" role="button">Tambah Data</a>
        <a class="btn btn-danger mb-3" href="update_skor.php" role="button">Update Skor</a>
        <table class="table table-bordered table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>Posisi</th>
                    <th>Nama Tim</th>
                    <th>Ma</th>
                    <th>Me</th>
                    <th>S</th>
                    <th>K</th>
                    <th>GM</th>
                    <th>GK</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $posisi = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $posisi . '</td>';
                    echo '<td>' . $row['nama_tim'] . '</td>';
                    echo '<td>' . $row['jml_bermain'] . '</td>';
                    echo '<td>' . $row['menang'] . '</td>';
                    echo '<td>' . $row['seri'] . '</td>';
                    echo '<td>' . $row['kalah'] . '</td>';
                    echo '<td>' . $row['gol_menang'] . '</td>';
                    echo '<td>' . $row['gol_kalah'] . '</td>';
                    echo '<td>' . $row['poin'] . '</td>';
                    echo '</tr>';
                    $posisi++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<div class="footer">
    <p class="text-center">Copyright &copy; 2024 by Al-an Muhammad Nabil</p>
</div>

</html>

<?php
// Tutup koneksi ke database
mysqli_close($koneksi);
?>