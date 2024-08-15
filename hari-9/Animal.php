<?php
// Animal.php
class Animal {
    public $nama;
    public $spesies;
    public $habitat;
    public $makanan;

    public function __construct($nama, $spesies, $habitat, $makanan) {
        $this->nama = $nama;
        $this->spesies = $spesies;
        $this->habitat = $habitat;
        $this->makanan = $makanan;
    }

    public function getDetails() {
        return "Nama: $this->nama\nSpesies: $this->spesies\nHabitat: $this->habitat\nMakanan: $this->makanan\n";
    }
}
?>
