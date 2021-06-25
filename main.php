<?php

require_once 'app\services\autoload.php';

use app\classes\animals\Cow;
use app\classes\animals\Chicken;
use app\classes\Farm;

$animals = [
    Cow::TYPE => 10,
    Chicken::TYPE => 20,
];

$farm = new Farm();

try {
    addNewAnimals($animals, $farm);
} catch (Throwable $e) {
    echo $e->getMessage();
    return;
}


// Вывести на экран информацию о количестве каждого типа животных на ферме.
showAnimalsList($farm->getAnimalTypeCount());

echo "\n";

// 7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
getWeeklyProductCollection($farm);

// Вывести на экран общее кол-во собранных за неделю шт. яиц и литров молока.
showWeeklyProductsList($farm->getProducts());

echo "----------------------------";
echo "\n";

$farm->releaseProducts();

//Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
$newAnimals = [
    Cow::TYPE => 1,
    Chicken::TYPE => 5,
];

addNewAnimals($newAnimals, $farm);

// Снова вывести информацию о количестве каждого типа животных на ферме.
showAnimalsList($farm->getAnimalTypeCount());

echo "\n";

// Снова 7 раз (неделю) производим сбор продукции.
getWeeklyProductCollection($farm);

// И выводим результат на экран.
showWeeklyProductsList($farm->getProducts());

