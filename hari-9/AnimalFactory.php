<?php
// AnimalFactory.php
include_once 'AnimalData.php';

class AnimalFactory {
    public static function getAllAnimals() {
        return AnimalData::getAnimalData();
    }
}
?>
