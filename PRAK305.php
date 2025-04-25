<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="text" name="input" required>
        <input type="submit" value="Submit">
    </form> <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $panjang = strlen($input);

        echo "<br><strong>Input:</strong><br>" . htmlspecialchars($input) . "<br><br>";
        echo "<strong>Output:</strong><br>";

        for ($i = 0; $i < $panjang; $i++) {
        echo strtoupper($input[$i]) . str_repeat(strtolower($input[$i]), $panjang - 1);
    }
    }
    ?>
</body>
</html>