<?php

use \app\classes\animals\Cow;
use \app\classes\animals\Chicken;
use \app\classes\Farm;

function addNewAnimals(array $newAnimals, $farm)
{
    foreach ($newAnimals as $animal => $quantity) {
        $counter = 1;
        if ($animal === 'cow') {
            while ($counter <= $quantity) {
                $farm->addAnimal(new Cow(uniqid('cow')));
                $counter++;
            }
        }
        if ($animal === 'chicken') {
            while ($counter <= $quantity) {
                $farm->addAnimal(new Chicken(uniqid('chicken')));
                $counter++;
            }
        }
    }
}

function weeklyProductsList(array $products)
{
    foreach ($products as $productType => $productQuantity) {
        echo $productType . ' - ' . $productQuantity . "\n";
    }
}

function animalsList(array $animals)
{
    foreach ($animals as $animalType => $animalQuantity) {
        echo $animalType . ' - ' . $animalQuantity . "\n";
    }
}

function weeklyProductCollection(Farm $farm)
{
    for ($counter = 1; $counter <= 7; $counter++) {
        $farm->collectProduct();
    }
}