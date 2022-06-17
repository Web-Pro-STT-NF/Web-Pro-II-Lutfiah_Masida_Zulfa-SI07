<?php

include_once "header.php";
include_once "sidebar.php";

?>
<div class="content-wrapper">

    <?php
    require_once 'class_bank.php';

    $ab1 = new accountBank('0123', 7000000, 'Wildan');
    $ab2 = new accountBank('0124', 1000000, 'Fadhil');
    $ab3 = new accountBank('0125', 5000000, 'Dun');

    $ab1->cetak();
    echo '<br>';
    $ab2->cetak();
    echo '<br>';
    $ab1->transfer($ab2, 1000000);
    echo 'Biaya Admin : '. accountBank::$biaya_admin;
    echo '<hr>';
    $ab1->cetak();
    echo '<hr>';
    $ab2->cetak();


    $ar_bank = [$ab1, $ab2, $ab3];

    ?>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>no</th><th>No Account</th><th>Pemilik</th><th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_bank as $acc) {
                
            ?>
            <tr>
                <td><?= $no?></td>
                <td><?= $acc->nomor?></td>
                <td><?= $acc->customer?></td>
                <td><?= $acc->saldo?></td>
            </tr>
            <?php
            $no++; 
            }
            ?>
        </tbody>
    </table>

</div>
<?php

include_once "footer.php";

?>