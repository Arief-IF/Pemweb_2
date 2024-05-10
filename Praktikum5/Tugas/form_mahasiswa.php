<?php 
require_once 'class_nilaimahasiswa.php';

if (isset($_POST['submit'])) {
    // Ambil data
    $nim = $_POST['nim'];
    $matakuliah = $_POST['mk'];
    $nilai = $_POST['nilai'];

    // Proses nilai
    $nilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
    $hasilUjian = $nilaiMahasiswa->hasilujian();
    $grade = $nilaiMahasiswa->grade();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Form Nilai Ujian</h1><hr>

    <div class="center">
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="nim">NIM</label></td>
                    <td><input type="number" name="nim" id="nim" required></td>
                </tr>
                <tr>
                    <td><label for="nim">Mata Kuliah</label></td>
                    <td><input type="text" name="mk" id="mk" required></td>
                </tr>
                <tr>
                    <td><label for="nilai">Nilai</label></td>
                    <td><input type="number" name="nilai" id="nilai" required></td>
                </tr>
            </table>
            <br>
            <div>
                <button type="submit" name="submit">Hasil</button>
            </div>
        </form>

        <?php if (isset($_POST['submit'])) { ?>
        <ul>
            <li>NIM: <?= $nim ?></li>
            <li>Mata Kuliah: <?= $matakuliah ?></li>
            <li>Nilai: <?= $nilai ?></li>
            <li>Hasil Ujian: <?= $hasilUjian ?></li>
            <li>Grade: <?= $grade ?></li>
        </ul>
        <?php } ?>
    </div>
</body>
</html>
