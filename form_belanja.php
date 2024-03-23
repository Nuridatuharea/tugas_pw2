<?php
$nama = $_GET['nama'];
$nama_customer = $_GET['nama_customer'];
$produk_pilihan = $_GET['produk_pilihan'];
$jumlah_beli = $_GET['jumlah_beli'];
$total_belanja = $_GET['total_belanja'];

//Buat Total Belanja
//produk_pilihan+jumlah_beli+total_belanja/3
$total_nilai = ($produk_pilihan + $jumlah_beli + $total_belanja) / 3;

//Buat Perhitungan IF Untuk Mencari Grade
if ($total_nilai >=85){
    $grade = "A";
}
elseif ($total_nilai >=70){
    $grade = "E";
}
elseif ($total_nilai >=56){
    $grade = "C";
}
elseif ($total_nilai >=30){
    $grade = "D";
}
else {
    $grade = "E";
}

//Buat Perhitungan SWITCHCASE Untuk Mencari Predikat
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case 'B'
            $predikat = "Memuaskan";
            break;
    case 'C':
                $predikat = "Cukup";
                break;

    default:
        $predikat = "Tidak Ada"
        break;
}

//Buat Perhitungan IF Untuk Mencari Status Lulus/Gagal
if ($total_belanja >= 2){
    $status = "LULUS";
}
else {
    $status = "GAGAL";
}
//Cetak Hasil
echo 'Nama'. $nama . '<br>';
echo 'Nama Customer' . $nama_customer .'<br>';
echo 'Produk Pilihan' . $produk_pilihan . '<br>';
echo 'Jumlah Beli' . $jumlah_beli . '<br>';
echo 'Total Belanja' . $total_belanja . '<br>';
echo 'Grade' . $grade . '<br>';
echo 'Predikat' . $predikat . '<br>';
echo 'Status' . $status . '<br>';

?>
