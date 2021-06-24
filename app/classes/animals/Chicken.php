<?php


namespace app\classes\animals;

//require_once __DIR__ . 'Animal.php';

class Chicken extends Animal
{
    protected $animalType = 'chicken';

    protected $productType = 'eggs';

    public $id;

    public function getIdAnimals()
    {
        return $this->id;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function getProduct()
    {
        return random_int(0, 1);
    }
}