<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        Nilai : <input type="number" name="nilai" step="any" required><br><br>

        Dari : <br>
        <input type="radio" name="from" value="celcius" required> Celcius<br>
        <input type="radio" name="from" value="fahrenheit"> Fahrenheit<br>
        <input type="radio" name="from" value="reamur"> Rheamur<br>
        <input type="radio" name="from" value="kelvin"> Kelvin<br><br>

        Ke :<br>
        <input type="radio" name="to" value="celcius" required> Celcius<br>
        <input type="radio" name="to" value="fahrenheit"> Fahrenheit<br>
        <input type="radio" name="to" value="reamur"> Rheamur<br>
        <input type="radio" name="to" value="kelvin"> Kelvin<br><br>

        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    function toCelcius($nilai, $from) {
        switch ($from) {
            case "fahrenheit": return ($nilai - 32) * 5 / 9;
            case "reamur": return $nilai * 5 / 4;
            case "kelvin": return $nilai - 273.15;
            default: return $nilai;
        }
    }

    function fromCelcius($nilai, $to) {
        switch ($to) {
            case "fahrenheit": return ($nilai * 9 / 5) + 32;
            case "reamur": return $nilai * 4 / 5;
            case "kelvin": return $nilai + 273.15;
            default: return $nilai;
        }
    }

    if (isset($_POST['konversi'])) {
        $nilai = floatval($_POST['nilai']);
        $from = $_POST['from'];
        $to = $_POST['to'];

        if ($from == $to) {
            $hasil = $nilai;
        } else {
            $celcius = toCelcius($nilai, $from);
            $hasil = fromCelcius($celcius, $to);
        }

        // format nama satuan
        $satuan = [
            "celcius" => "°C",
            "fahrenheit" => "°F",
            "reamur" => "°R",
            "kelvin" => "K"
        ];

        echo "<h2>Hasil Konversi: " . round($hasil, 2) . " {$satuan[$to]}</h2>";
    }
    ?>
</body>
</html>