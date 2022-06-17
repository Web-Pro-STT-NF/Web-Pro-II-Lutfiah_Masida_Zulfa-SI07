<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
<h2> Form Nilai </h2>
</div>
<hr>
<br>

<form method="POST" style = "margin-left : 30%;">
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">NIM</label> 
    <div class="col-7">
      <input id="text" name="nim" placeholder="" type="text" class="form-control" value="0110121151" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">MataKuliah</label> 
    <div class="col-7">
      <select id="select" name="matkul" class="custom-select" style="width: 50%">
        <option value="DW">Dasar-Dasar Pemograman</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nilai</label> 
    <div class="col-7">
      <input id="text1" name="nilai" placeholder="" type="text" class="form-control" value="90" style="width: 50%">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-2 col-7">
      <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<br>
<br>
<hr>

<?php
include_once "class_mahasiswa.php";

$data_siswa = new NilaiMahasiswa (90, "Dasar-Dasar Pemograman", 0110121151);

echo 'NIM   = '. $data_siswa->getNim();
echo '<br>Mata Kuliah = '.$data_siswa->getMatkul();
echo '<br>Nilai = '.$data_siswa->getNilai();
echo '<br>Grade = '.$data_siswa->grade();
echo '<br>Hasil = '.$data_siswa->hasil();

?>

</body>
</html>