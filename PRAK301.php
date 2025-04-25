<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Jumlah Peserta : <input type="number" name="jumlah" required> <br>
        <input type="submit" value="Cetak">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST["jumlah"];
        $i = 1;
        while ($i <= $jumlah) {
            $warna = ($i % 2 == 1) ? "red" : "green";
            echo "<h3 style='color:$warna'>Peserta ke-$i</h3>";
            $i++;
        }
    }
    ?>
</body>
</html>