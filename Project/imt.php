<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Project/imt.css">
    <title>Release notes</title>
</head>
<body>
    <div class="textpuskesmas">PUSKESMAS CIPAKU</div>
    <div class="backtext"><a href="../Project/LandingPage.html">Kembali</a></div>
    <a href="../Project/LandingPage.html"><div class="back"></div></a>
    <div class="logopuskesmas"></div>
    <div class="container">
        <div class="test">
            <h1>Menghitung BMI</h1>
            <form method="get" action="">
                <label for="nama">Nama</label>
                <br>
                <input type="text" name="nama"><br>
                <label for="kelamin">Jenis Kelamin</label>
                <br>
                <select name="kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select><br>
                <label for="tb">Tinggi Badan (cm)</label>
                <br>
                <input type="text" name="tb"><br>
                <label for="bb">Berat  Badan (kg)</label>
                <br>
                <input type="text" name="bb"><br>
                <input type="submit" name="submit" value="Hitung BMI">
            </form>

            <?php
                if (isset($_GET['submit'])) {
                    $nama        = $_GET['nama'];
                    $kelamin    = $_GET['kelamin'];
                    $tb            = $_GET['tb']/100;
                    $bb            = $_GET['bb'];
                    $bmi        = $bb / ($tb * $tb);

                    echo '<div class="hasil">';
                    echo "<h3>Hasil perhitungan BMI</h3>";
                    echo "Nama Anda: $nama<br>";
                    echo "Jenis kelamin: $kelamin<br>";
                    echo "Tinggi Badan: $tb meter<br>";
                    echo "Berat Badan: $bb kilogram<br>";
                    echo "<hr>BMI Anda: ".number_format($bmi);
                    echo "<h4>Kesimpulan:</h4>";
                    
                    if($bmi < 15.5) {
                        echo "Anda mengalami anoreksia";
                    }elseif ($bmi < 18.5 ) {
                        echo "Anda mengalami kekurangan gizi";
                    }elseif ($bmi < 25 ) {
                        echo "Anda memiliki berat badan normal";
                    }elseif ($bmi < 30 ) {
                        echo "Anda memiliki overweight";
                    }elseif ($bmi < 35 ) {
                        echo "Anda mengalami Obesitas Level 1";
                    }elseif ($bmi < 40 ) {
                        echo "Anda mengalami Obesitas Level 2";
                    }else {
                        echo "Anda mengalami Obesitas Akut";
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>