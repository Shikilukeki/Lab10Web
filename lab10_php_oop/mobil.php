<?php
//Program sederhana pendefinisian class dan pemanggilan class

class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk  = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna($warnaBaru): void
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna(): void
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}

// bikin object
$a = new Mobil();
$b = new Mobil();

// mobil pertama
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();

echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna(warnaBaru: "Merah");
$a->tampilWarna();

// mobil kedua
echo "<br><br><b>Mobil kedua</b><br>";
$b->gantiWarna(warnaBaru: "Hijau");
$b->tampilWarna();
?>
