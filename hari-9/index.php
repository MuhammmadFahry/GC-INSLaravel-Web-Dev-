<?php
// index.php
include_once 'AnimalFactory.php';

$animals = AnimalFactory::getAllAnimals();

foreach ($animals as $animal) {
    echo nl2br($animal->getDetails() . "\n");
}
?>

<form method="get">
    <input type="submit" value="Tampilkan Semua Hewan">
</form>
