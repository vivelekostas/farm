<?php

require_once 'app\classes\animals\Cow.php';
require_once 'app\classes\animals\Chicken.php';
require_once 'app\classes\Farm.php';
require_once 'app\services\mainService.php';

use \app\classes\Farm;

$animals = ["cow" => 2, 'chicken' => 3];

$farm = new Farm();

addNewAnimals($animals, $farm);

// Вывести на экран информацию о количестве каждого типа животных на ферме.
$animalsTypeAndQuantity = $farm->getAnimalTypeCount();
animalsList($animalsTypeAndQuantity);

echo "\n";

// 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
weeklyProductCollection($farm);

// Вывести на экран общее кол-во собранных за неделю шт. яиц и литров молока.
$productsTypeAndQuantity = $farm->getProducts();
weeklyProductsList($productsTypeAndQuantity);

echo "----------------------------";
echo "\n";

$farm->releaseProducts();

//Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
$newAnimals = ["cow" => 1, 'chicken' => 2];

addNewAnimals($newAnimals, $farm);

// Снова вывести информацию о количестве каждого типа животных на ферме.
$animalsTypeAndQuantity1 = $farm->getAnimalTypeCount();
animalsList($animalsTypeAndQuantity1);

echo "\n";

// Снова 7 раз (неделю) производим сбор продукции.
weeklyProductCollection($farm);

// И выводим результат на экран.
$productsTypeAndQuantity1 = $farm->getProducts();
weeklyProductsList($productsTypeAndQuantity1);

