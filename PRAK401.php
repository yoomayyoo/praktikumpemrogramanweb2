<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        Panjang : <input type="number" name="panjang"><br>
        Lebar   : <input type="number" name="lebar"><br>
        Nilai   : <input type="text" name="nilai"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if(isset($_POST['cetak'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilaimatrix = explode(' ', $_POST['nilai']);
        $jumlah = $panjang * $lebar;

        if(count($nilaimatrix) != $jumlah){
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            $array = [];
            $index = 0;

            for($i = 0; $i < $panjang; $i++){
                $baris = [];
                for($j = 0; $j < $lebar; $j++){
                    $baris[] = $nilaimatrix[$index];
                    $index++;
                }
                $array["baris_$i"] = $baris;
            }

            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            foreach($array as $key => $baris){
                echo "<tr>";
                foreach($baris as $nilai){
                    echo "<td>$nilai</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
