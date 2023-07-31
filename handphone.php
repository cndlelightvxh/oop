<?php

// Parent class Elektronik
class Elektronik {
    protected $merk;
    private $jumlahHandphone;
    public $warnaHandphone;

    public function __construct($merk, $jumlahHandphone, $warnaHandphone) {
        $this->merk = $merk;
        $this->jumlahHandphone = $jumlahHandphone;
        $this->warnaHandphone = $warnaHandphone;
    }

    public function __destruct() {
        echo " Handphone yang sering digunakan di rumah.";
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setJumlahHandphone($jumlah) {
        $this->setJumlahHandphone = $jumlah;
    }

    public function getJumlahHandphone() {
        return $this->jumlahHandphone;
    }
}

// Child class Handphone
class Handphone extends Elektronik {
    private $jenis;

    public function __construct($merk, $jumlahHandphone, $warnaHandphone, $jenis) {
        parent::__construct($merk, $jumlahHandphone, $warnaHandphone);
        $this->jenis = $jenis;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }
}

// Instansiasi objek dari masing-masing class
$handphone = new Handphone("Samsung, Vivo, dan Redmi. <br>", "3. <br>", "White, Black, dan Blue. <br>", "Android. <br>");

// Set semua property dari objek
$handphone->setJumlahHandphone("3.");
$handphone->setJenis("Android.");

// Get semua property dari objek
echo "Merk handphone : " . $handphone->getMerk() . " ";
echo "Jumlah handphone : " . $handphone->getJumlahHandphone() . " ";
echo "Warna handphone : " . $handphone->warnaHandphone . " ";
echo "Jenis handphone : " . $handphone->getJenis() . "<br> ";

// Panggil method dari objek
echo "Ketiga handphone yang sering digunakan memiliki warna yang berbeda-beda, yaitu " . $handphone->warnaHandphone . "";

?>
