<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Monster</title>
</head>

<!--
KELOMPOK 13 :
Jessica Aurelia S 19.N3.0001
Elita Natalia S 19.N3.0005
Fransiskus Adrian K 19.N3.0009
Novita Delvia 19.N3.0013
Verdiana Ayustika 19.N3.0015
-->

<body>
    <p>
    <?php
    include "src/Monster.php";
    $gurita = new MonsterGurita();
    $kelelawar = new MonsterKelelawar();
    $kecoa = new MonsterKecoa();
    $kerbau = new MonsterKerbau();

    echo $gurita->Menyerang();
    echo "<br>";
    echo $kelelawar->Menyerang();
    echo "<br>";
    echo $kecoa->Menyerang();
    echo "<br>";
    echo $kerbau->Menyerang();

    echo "<br>";
    echo "<br>";
    echo $gurita->Berenang();
    echo "<br>";
    echo $kelelawar->Terbang();
    echo "<br>";
    echo $kecoa->Terbang();
    echo "<br>";
    echo $kerbau->Berjalan();   
    ?>
    </p>
</body>
</html>