<?php
    // Operator Aritmatika (+, -, x, :)
    $a = 10;
    $b = 20;
    echo $hasil = $b + $a;
    echo "<br>";

    // Operator penggabungan string / concatenation / concat
    $nama1 = "Syafitri";
    $nama2 = "Ramadhani";
    echo $gabung = $nama1." ".$nama2;
    echo "<br>";
    
    // Operator Penugasan (=, +=, -=, /=, %=, .=)
    $nama = "Hello";
    $nama .= " ";
    $nama .= "World"; //$nama = $nama . "World";
    echo $nama;

    echo "<br>";

    $angka = 10;
    $angka += 20;  //$angka = $angka + 20;
    echo $angka;


    echo "<br>";
    // Operator perbandingan (<, >, <=, >=, ==, !=)
    var_dump(10=="10");
    echo "<br>";


    // Operator identitas (===, !==) (mengecek tipe data nya juga sama atau tidak)
    var_dump(10==="10");
    echo "<br>";

    // Operator logika (&&(And), ||(or), !(not))
    var_dump(10<=30 && 10==30);


?>