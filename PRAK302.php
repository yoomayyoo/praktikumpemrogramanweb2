<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Tinggi : <input type="number" name="tinggi" required><br>
        Alamat Gambar : 
        <input type="text" name="gambar" required><br>
        <input type="submit" value="Cetak">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = $_POST["tinggi"];
        $gambar = trim($_POST["gambar"]);

        if (!empty($gambar)) {
            $i = $tinggi;
            while ($i >= 1) {
                $spasi = 0;
                while ($spasi < ($tinggi - $i)) {
                    echo "<span style='display:inline-block; width:30px;'></span>";
                    $spasi++;
                }

                $j = 1;
                while ($j <= $i) {
                    echo "<img src='$gambar' width='30'>";
                    $j++;
                }

                echo "<br>";
                $i--;
            }
        } else {
            echo "<p style='color:red;'>Silakan masukkan alamat gambar terlebih dahulu!</p>";
        }
    }
    ?>
</body>
</html>