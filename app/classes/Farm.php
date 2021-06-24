<?php

namespace app\classes;

use app\classes\interfaces\AnimalInterface;

class Farm
{
    private $animals;

    private $products;

    /**
     * Перебирает массив с объектами животных и возвращает массив с типом и кол-вом жиотных.
     * @return array
     */
    public function getAnimalTypeCount()
    {
        $animalsTypeAndQuantity = [];

        foreach ($this->animals as $animal) {
            // если массив пустой или не содержит в себе типа животного в виде ключа, то добавить такой ключ.
            if (empty($animalsTypeAndQuantity) || (!array_key_exists($animal->getAnimalType(), $animalsTypeAndQuantity))) {
                $animalsTypeAndQuantity[$animal->getAnimalType()] = null;
            }
            // если тип итерируемого животного в виде ключа уже существует, то просто посчитать его
            if (array_key_exists($animal->getAnimalType(), $animalsTypeAndQuantity)) {
                $animalsTypeAndQuantity[$animal->getAnimalType()] += 1;
            }
        }

        return $animalsTypeAndQuantity;
    }

    public function collectProduct()
    {
        foreach ($this->animals as $animal) {
            if (empty($this->products) || (!array_key_exists($animal->getProductType(), $this->products))) {
                $this->products[$animal->getProductType()] = null;
            }
            if (array_key_exists($animal->getProductType(), $this->products)) {
                $this->products[$animal->getProductType()] += $animal->getProduct();
            }
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function releaseProducts()
    {
        return $this->products = array();
    }

    public function addAnimal(AnimalInterface $animal)
    {
        $this->animals[] = $animal;
    }

}