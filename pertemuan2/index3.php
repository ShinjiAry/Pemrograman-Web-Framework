<?php
class Mobil {
    private $kecepatan = 0;
    
    private function tampilkanKecepatan(){
         return "Kecepatan:".$this->kecepatan. "km/jam.";
    }

    public function tambahKecepatan($nilai) {
        $this->kecepatan += $nilai;
        echo $this->tampilkanKecepatan();
    }
}

class Contoh {
    private function privateMethod() {
        echo " Ini adalah private method.";
    }
    public function publicMethod() {
        // Mengakses private method dari dalam kelas
        $this->privateMethod();
    }
}
$mobil = new Mobil();
$mobil->tambahKecepatan(50); // Output: Kecepatan: 50 km/jam
// echo $mobil->tampilkanKecepatan(); // Akan menghasilkan error karena method private

$contoh = new Contoh();
$contoh->publicMethod(); // Ini adalah private method

?>