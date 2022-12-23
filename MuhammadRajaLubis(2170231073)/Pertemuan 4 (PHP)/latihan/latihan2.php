<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
        //Penulisan array dapat dibuat seperti berikut
        $nama[0] = "Muhammad";
        $nama[1] = "Raja";
        $nama[2] = "Lubis";
        echo $nama[0].$nama[1].$nama[2];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>