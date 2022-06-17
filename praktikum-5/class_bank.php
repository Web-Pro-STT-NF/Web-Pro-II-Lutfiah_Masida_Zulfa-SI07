<?php
require_once 'class_account.php';

class accountBank extends account {
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan, $uang){
        $ab_tujuan->deposit($uang); //account bank tujuan bertambah saldo
        $this->withdrawl($uang); //saldo account ini berkurang
        $this->withdrawl(self::$biaya_admin);
    }

    public function cetak(){
        parent::cetak(); // panggil fungsi parent cetak
        echo '<br/>Customer : '. $this->customer;
    }
}
?>