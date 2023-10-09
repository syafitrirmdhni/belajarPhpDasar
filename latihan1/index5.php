<?php
    // Function (potongan program yg bisa dipanggil secara berulang ulang)
    // Built in function (function yg sudah dibuat oleh php kita tinggal panggil)
    // User defind function (function nya kita yg buat baru kita panggil/kata)
    $teks = "Hello World";
    echo "Panjang dari teks ialah " . strlen($teks) . " Karakter.";

    // date() (menampilkan tanggal)
    echo "<br>";
    echo date("Y-m-d H:i:s");

    function salam($nama = "Admin") {
        return "Selamat datang, $nama";
    }
?>


<html>
    <body>
    <h1><?php echo salam(); ?></h1>
    </body>
</html>