<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja POST</title>
</head>
<body>
<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 pt-3">
                <p>Belanja Online</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <form method="POST">
                        <div class="form-group row">
                            <label for="costumer" class="col-4 col-form-label">Customer</label> 
                            <div class="col-8">
                            <input id="costumer" name="costumer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label> 
                            <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
                            <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                </form>
            <?php
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $costumer = isset($_POST['costumer']) ? $_POST['costumer'] : '';
                    $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
                    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

                    $harga_TV = 4200000 * intval($jumlah);
                    $harga_kulkas = 3100000 * intval($jumlah);
                    $harga_mesincuci = 3800000 * intval($jumlah);

                    echo "Nama Customer : $costumer";
                    echo "<br/>Produk Pilihan : $produk";
                    echo "<br/>Jumlah Beli : $jumlah";

                    switch($produk){
                        case "tv":
                            echo "<br/>Total Belanja : $harga_TV";
                            break;
                        case "Kulkas":
                            echo "<br/>Total Belanja : $harga_kulkas";
                            break;
                        case "Mesin Cuci":
                            echo "<br/>Total Belanja : $harga_mesincuci";
                            break;
                    }

            ?>
            </div>
            <div class="col-3">
                <table>
                    <div class="table-row">
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </div>
                    <div class="table-row">
                        <tr>
                            <td>TV : 4.200.000</td>
                        </tr>
                    </div>
                    <div class="table-row">
                        <tr>
                            <td>Kulkas : 3.100.000</td>
                        </tr>
                    </div>
                    <div class="table-row">
                        <tr>
                            <td>MESIN CUCI : 3.800.000</td>
                        </tr>
                    </div>
                    <div class="table-row">
                        <tr>
                            <th>Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                </div>
                </table>
            </div>
    </div>
</body>
</html>