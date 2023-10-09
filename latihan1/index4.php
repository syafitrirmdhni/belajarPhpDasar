<?php
    // Pengulangan (for, while, do-while, foreach(khusus array))
    for ($i=0;$i<10;$i++) {
        // inisialisasi(nilai awal), terminalisasi(menghentikan perulangan), increement/decreement 
        echo "Hello World";
        echo "<br>";
    }

    echo "<br>";

    $i=0;
    while ($i<10){
        echo "Hello World<br>";
        $i++;
    }

    echo "<br>";


    // Percabangan (if)
    $nilai = 10;
    if ($nilai==10) {
        echo "Benar";
    } else {
        echo "Salah";
    }


?>