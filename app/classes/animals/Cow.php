<?php


namespace app\classes\animals;

require_once __DIR__ . '\Animal.php';

class Cow extends Animal
{
    protected $animalType = 'cow';

    protected $productType = 'milk';

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
        return random_int(8, 12);
    }
}