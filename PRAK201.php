<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nama 1: <input type="text" name="nama1"><br>
        Nama 2: <input type="text" name="nama2"><br>
        Nama 3: <input type="text" name="nama3"><br>
        <button type="submit" name="urut">Urutkan</button>
    </form>

    <?php
    if (isset($_POST["urut"])) {
        $a = $_POST["nama1"];
        $b = $_POST["nama2"];
        $c = $_POST["nama3"];

        if ($a <= $b && $a <= $c) {
            echo $a . "<br>";
            if ($b <= $c) {
                echo $b . "<br>" . $c;
            } else {
                echo $c . "<br>" . $b;
            }
        } elseif ($b <= $a && $b <= $c) {
            echo $b . "<br>";
            if ($a <= $c) {
                echo $a . "<br>" . $c;
            } else {
                echo $c . "<br>" . $a;
            }
        } else {
            echo $c . "<br>";
            if ($a <= $b) {
                echo $a . "<br>" . $b;
            } else {
                echo $b . "<br>" . $a;
            }
        }
    }
    ?>
</body>
</html>