<?php
session_start();

if (!isset($_SESSION['bintang'])) {
    $_SESSION['bintang'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['set'])) {
        $_SESSION['bintang'] = (int)$_POST['jumlah'];
    } elseif (isset($_POST['tambah'])) {
        $_SESSION['bintang']++;
    } elseif (isset($_POST['kurang']) && $_SESSION['bintang'] > 0) {
        $_SESSION['bintang']--;
    }
}

$gambar = "star-images-9441.png";
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <label>Jumlah bintang</label>
        <input type="number" name="jumlah" required> <br>
        <input type="submit" name="set" value="Submit">
    </form> <br>
    <?php if ($_SESSION['bintang'] > 0): ?>
        <p>Jumlah bintang <?php echo $_SESSION['bintang']; ?></p>
        <div style="margin-bottom: 10px;">
            <?php
            $i = 0;
            while ($i < $_SESSION['bintang']) {
                echo "<img src='$gambar' width='50' style='margin:2px'>";
                $i++;
            }
            ?>
        </div>
        <form method="post">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    <?php endif; ?>
</body>
</html>