<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="get">
        Nilai: <input type="number" name="angka" min="0" required> <br>
        <button type="submit" name="submit">Konversi</button>
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $angka = $_GET['angka'];

        echo "<h3>Hasil: ";

        if ($angka == 0) {
            echo "Nol";
        } elseif ($angka >= 1 && $angka <= 9) {
            echo "Satuan";
        } elseif ($angka >= 10 && $angka <= 19) {
            echo "Belasan";
        } elseif ($angka >= 20 && $angka <= 99) {
            echo "Puluhan";
        } elseif ($angka >= 100 && $angka <= 999) {
            echo "Ratusan";
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan </h3>";
        }
    }
    ?>
</body>
</html>