<h2>Form Nilai Mahasiswa</h2>
<form action="proses_nilai.php" method="POST">
<label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama" name="nama" required><br>
<label for="uts">Matkul:</label><br>
        <input type="number" id="matkul" name="matkul" required><br>
<label for="uts">Nilai UTS:</label><br>
        <input type="number" id="uts" name="uts" required><br>
<label for="uas">Nilai UAS:</label><br>
        <input type="number" id="uas" name="uas" required><br>
<label for="tugas">Nilai Tugas:</label><br>
        <input type="number" id="tugas" name="tugas" required><br><br>
        <input type="submit" value="Hitung Nilai">
    </form>
<?php
    // Mengambil nilai dari form
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    // Menghitung nilai rata-rata
    $nilai_rata = ($matkul + $uts + $uas + $tugas) / 3;

    // Menampilkan hasil
    echo "<h2>Hasil Perhitungan Nilai</h2>";
    echo "Nama Mahasiswa: $nama <br>";
    echo "Matkul: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Tugas: $tugas <br>";
    echo "Nilai Rata-rata: $nilai_rata <br>";

    // Menentukan grade
    if ($nilai_rata >= 80) {
        echo "Grade: A";
    } elseif ($nilai_rata >= 70) {
        echo "Grade: B";
    } elseif ($nilai_rata >= 60) {
        echo "Grade: C";
    } elseif ($nilai_rata >= 50) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }
    ?>


