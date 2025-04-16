<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
            margin-left: 10px;
        }
        .required {
            color: red;
        }
    </style>
</head>
<body>

<?php
$nama = $nim = $gender = "";
$namaError = $nimError = $genderError = "";
$showOutput = false;

if (isset($_POST['submit'])) {
    $nama = trim($_POST['nama']);
    $nim = trim($_POST['nim']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    $valid = true;

    if ($nama === "") {
        $namaError = "Nama wajib diisi!";
        $valid = false;
    }
    if ($nim === "") {
        $nimError = "NIM wajib diisi!";
        $valid = false;
    }
    if ($gender === "") {
        $genderError = "Pilih salah satu!";
        $valid = false;
    }

    if ($valid) {
        $showOutput = true;
    }
}
?>

<form action="" method="post">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= ($nama) ?>">
    <span class="required">*</span>
    <?php if ($namaError): ?><span class="error"><?= $namaError ?></span><?php endif; ?>
    <br>

    <label>NIM:</label>
    <input type="text" name="nim" value="<?= ($nim) ?>">
    <span class="required">*</span>
    <?php if ($nimError): ?><span class="error"><?= $nimError ?></span><?php endif; ?>
    <br>

    <label>Jenis Kelamin: <span class="required">*</span></label>
    <?php if ($genderError): ?><span class="error"><?= $genderError ?></span><?php endif; ?> <br>
    <input type="radio" name="gender" value="Laki-Laki" <?= ($gender === "Laki-Laki") ? "checked" : "" ?>> Laki-Laki <br>
    <input type="radio" name="gender" value="Perempuan" <?= ($gender === "Perempuan") ? "checked" : "" ?>> Perempuan <br>
    <button type="submit" name="submit">Submit</button>
</form>

<?php if ($showOutput): ?>
    <h3>Output:</h3>
    Nama: <?= htmlspecialchars($nama) ?><br>
    NIM: <?= htmlspecialchars($nim) ?><br>
    Jenis Kelamin: <?= htmlspecialchars($gender) ?><br>
<?php endif; ?>

</body>
</html>