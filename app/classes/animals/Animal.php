<?php

namespace app\classes\animals;

require_once 'app\classes\interfaces\AnimalInterface.php';

use app\classes\interfaces\AnimalInterface;


abstract class Animal implements AnimalInterface
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
}