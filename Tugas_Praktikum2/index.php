<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Rute Penerbangan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Pendaftaran Rute Penerbangan</h2>
    
    <?php
    // Mengatur zona waktu default
    date_default_timezone_set('Asia/Jakarta');

    // Bandara Asal
    $bandaraAsal = array(
        "Soekarno Hatta",
        "Husein Sastranegara",
        "Abdul Rachman Saleh",
        "Juanda"
    );

    // Bandara Tujuan
    $bandaraTujuan = array(
        "Ngurah Rai",
        "Hasanuddin",
        "Inanwatan",
        "Sultan Iskandar Muda"
    );

    // Mengurutkan array nama bandara
    sort($bandaraAsal);
    sort($bandaraTujuan);

    // Menampilkan form pendaftaran
    echo "<form method='post' action=''>
            <label>Nama Maskapai:</label>
            <input type='text' name='namaMaskapai' required><br><br>
            
            <label>Bandara Asal:</label>
            <select name='bandaraAsal' required>";
                foreach ($bandaraAsal as $bandara) {
                    echo "<option value='$bandara'>$bandara</option>";
                }
    echo "  </select><br><br>

            <label>Bandara Tujuan:</label>
            <select name='bandaraTujuan' required>";
                foreach ($bandaraTujuan as $bandara) {
                    echo "<option value='$bandara'>$bandara</option>";
                }
    echo "  </select><br><br>

            <label>Harga Tiket:</label>
            <input type='number' name='hargaTiket' required><br><br>

            <input type='submit' name='submit' value='Daftar'>
          </form>";
    
    // Proses pendaftaran
    if (isset($_POST['submit'])) {
        $namaMaskapai = $_POST['namaMaskapai'];
        $bandaraAsal = $_POST['bandaraAsal'];
        $bandaraTujuan = $_POST['bandaraTujuan'];
        $hargaTiket = $_POST['hargaTiket'];

        // Menghitung pajak
        $pajakAsal = hitungPajak($bandaraAsal);
        $pajakTujuan = hitungPajak($bandaraTujuan);
        $totalPajak = $pajakAsal + $pajakTujuan;

        // Menghitung total harga tiket
        $totalHargaTiket = $hargaTiket + $totalPajak;

        // Menampilkan hasil pendaftaran
        echo "<div style='text-align: center;'>"; 
        echo "<h3>Hasil Pendaftaran</h3>
                <p>Nomor                : ". generateNomor()."</p>
                <p>Tanggal              : ". generateTanggal()."</p>
                <p>Nama Maskapai        : $namaMaskapai</p>
                <p>Asal Penerbangan     : $bandaraAsal</p>
                <p>Tujuan Penerbangan   : $bandaraTujuan</p>
                <p>Harga Tiket          : $hargaTiket</p>
                <p>Pajak                : $totalPajak</p>
                <p>Total Harga Tiket    : $totalHargaTiket</p>";
        echo "</div>"; 
    }

    // Fungsi untuk menghitung pajak berdasarkan bandara
    function hitungPajak($bandara)
    {
        switch ($bandara) {
            case 'Soekarno Hatta':
                return 65000;
            case 'Husein Sastranegara':
                return 50000;
            case 'Abdul Rachman Saleh':
                return 40000;
            case 'Juanda':
                return 30000;
            case 'Ngurah Rai':
                return 85000;
            case 'Hasanuddin':
                return 70000;
            case 'Inanwatan':
                return 90000;
            case 'Sultan Iskandar Muda':
                return 60000;
            default:
                return 0;
        }
    }

    // Fungsi untuk menghasilkan nomor secara acak
    function generateNomor()
    {
        return rand(100, 999);
    }

    // Fungsi untuk menghasilkan tanggal saat ini
    function generateTanggal()
    {
        return date("d-m-Y");
    }
    ?>
</body>
</html>


