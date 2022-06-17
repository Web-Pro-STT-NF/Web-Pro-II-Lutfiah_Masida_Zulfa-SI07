<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai POST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pt-3">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                </div>
                    <form method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                            <div class="col-8">
                            <input id="nama" name="nama" placeholder="masukkan nama lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                            <div class="col-8">
                            <input id="matkul" name="matkul" placeholder="masukkan mata kuliah" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                            <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="masukkan nilai uts" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                            <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="masukkan nilai uas" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                            <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="masukkan nilai tugas" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php
                        $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                        $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                        $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                        $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                        $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                        echo "Nama : $nama";
                        echo "<br/>Mata Kuliah : $mata_kuliah";
                        echo "<br/>Nilai UTS: $nilai_uts";
                        echo "<br/>Nilai UAS : $nilai_uas";
                        echo "<br/>Nilai Tugas : $nilai_tugas";

                        $nilai_akhir = intval($nilai_uts) * 0.3 + intval($nilai_uas) * 0.35 + intval($nilai_tugas) * 0.35;
                        if($nilai_akhir > 55){
                            echo "<br/>Status Kelulusan : LULUS";
                        }else{
                            echo "<br/>Status Kelulusan : TIDAK LULUS";
                        }
                        
                        $nilaiA = $nilai_akhir >= 85;
                        $nilaiB = $nilai_akhir >= 70;
                        $nilaiC = $nilai_akhir >= 56;
                        $nilaiD = $nilai_akhir >= 36;
                        $nilaiE = $nilai_akhir >= 0;

                            if($nilaiA){
                                echo "<br/>Grade : A";
                            }elseif($nilaiB){
                                echo "<br/>Grade : B";
                            }elseif($nilaiC){
                                echo "<br/>Grade : C";
                            }elseif($nilaiD){
                                echo "<br/>Grade : D";
                            }elseif($nilaiE){
                                echo "<br/>Grade : E";
                            }else{
                                echo "<br/>Grade : I";
                            }

                            switch(true){
                                case($nilaiA):
                                    echo "<br/>Status Grade : Sangat Memuaskan";
                                    break;
                                case($nilaiB):
                                    echo "<br/>Status Grade : Memuaskan";
                                    break;
                                case($nilaiC):
                                    echo "<br/>Status Grade : Cukup";
                                    break;
                                case($nilaiD):
                                    echo "<br/>Status Grade : Kurang";
                                    break;
                                case($nilaiE):
                                    echo "<br/>Status Grade : Sangat Kurang";
                                    break;
                                default:
                                    echo "<br/>Status Grade : Tidak Ada";
                                    break;
                            }
                    ?>
            </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop by Mahasiswa STT-NF</p>
            </div>
        </div>
    </div>
</body>
</html>