<?php
// AnimalData.php
include_once 'Animal.php';

class AnimalData {
    public static function getAnimalData() {
        return [
            'singa' => new Animal('Singa', 'Panthera leo', 'Savana', 'Karnivora'),
            'gajah' => new Animal('Gajah', 'Loxodonta', 'Hutan dan Savana', 'Herbivora'),
            'pinguin' => new Animal('Pinguin', 'Spheniscidae', 'Antartika', 'Karnivora'),
            'jerapah' => new Animal('Jerapah', 'Giraffa camelopardalis', 'Savana dan Hutan', 'Herbivora'),
            'beruang' => new Animal('Beruang', 'Ursidae', 'Hutan dan Gunung', 'Omnivora'),
            'kuda' => new Animal('Kuda', 'Equus ferus caballus', 'Padang Rumput', 'Herbivora'),
            'serigala' => new Animal('Serigala', 'Canis lupus', 'Hutan dan Tundra', 'Karnivora'),
            'elang' => new Animal('Elang', 'Accipitridae', 'Pegunungan dan Hutan', 'Karnivora'),
            'buaya' => new Animal('Buaya', 'Crocodylidae', 'Sungai dan Rawa', 'Karnivora'),
            'kangguru' => new Animal('Kangguru', 'Macropodidae', 'Padang Rumput dan Hutan Terbuka', 'Herbivora'),
            'koala' => new Animal('Koala', 'Phascolarctos cinereus', 'Hutan Eucalyptus', 'Herbivora'),
            'harimau' => new Animal('Harimau', 'Panthera tigris', 'Hutan Tropis dan Subtropis', 'Karnivora'),
            'badak' => new Animal('Badak', 'Rhinocerotidae', 'Hutan dan Padang Rumput', 'Herbivora'),
            'kambing' => new Animal('Kambing', 'Capra aegagrus hircus', 'Pegunungan dan Padang Rumput', 'Herbivora'),
            'kucing' => new Animal('Kucing', 'Felis catus', 'Rumah dan Lingkungan Sekitar', 'Karnivora'),
            'anjing' => new Animal('Anjing', 'Canis lupus familiaris', 'Rumah dan Lingkungan Sekitar', 'Omnivora'),
            'sapi' => new Animal('Sapi', 'Bos taurus', 'Peternakan dan Padang Rumput', 'Herbivora'),
            'domba' => new Animal('Domba', 'Ovis aries', 'Padang Rumput dan Peternakan', 'Herbivora'),
            'ikan hiu' => new Animal('Ikan Hiu', 'Selachimorpha', 'Laut dan Samudera', 'Karnivora'),
        ];
    }
}
?>
