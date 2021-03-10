<!-- Nama  : Malik Fajar 
Kelas : IF -C 
Npm : 203040092 -->
<!-- Praktikum Web Programming, Kamis jam 8 -->
<!-- Praktikum : Pemorgraman Web -->
<?php
    function tumpukanBola($tumpukan) {
        echo "<table>";
            for($baris = 1; $baris <= $tumpukan; $baris++) {
                echo "<tr>"; 
                    for($kolom = 1; $kolom <= $baris; $kolom++) {
                        echo "<td class='bola'>$baris</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>

    <style>
        .bola {
            width: 80px;
            height: 80px;
            border: 2px solid black;
            border-radius: 50px;
            background-color: salmon;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <?= tumpukanBola(5)?>
</body>
</html>