<?php

    class kendaraan {
        public $warna;
        public $merk;
        public $tahun;
        public $harga;
        public $kecepatan;
    

    function __construct($warna, $merk, $tahun, $harga, $kecepatan) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->harga = $harga;
        $this->kecepatan = $kecepatan;
    
    }

    function info () {
        return "Mobil ini berwarna {$this->warna}, merk {$this->merk}, tahun {$this->tahun}, dan harga {$this->harga}.";
    }

    function tambahkecepatan($kecepatan) {
        $this->kecepatan += $kecepatan;
        return "Kecepatan mobil sekarang adalah {$this->kecepatan} km/jam.";
    }
}

$mobil1 = new Kendaraan("Merah", "Toyota", 2020, 300000000, 0);
echo $mobil1->info();
echo $mobil1->tambahKecepatan(400);

$mobil1 = new Kendaraan("Merah", "Honda", 2020, 300000000, 0);
?>