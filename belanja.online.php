<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method = "GET" action = "form_belanja.php">
  <div class="form-group row">
    <label for="Customer" class="col-3 col-form-label">Customer</label> 
    <div class="col-9">
      <input id="Customer" name="Customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-9">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Pilih Produk" id="Pilih Produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="Pilih Produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Pilih Produk" id="Pilih Produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="Pilih Produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Pilih Produk" id="Pilih Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Pilih Produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="JUmlah" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-9">
      <input id="JUmlah" name="JUmlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-9">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

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
