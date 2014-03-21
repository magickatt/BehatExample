<?php

namespace Shopping\Fruit;

abstract class AbstractFruit implements FruitInterface
{

    protected $calories;

    public function getCalories()
    {
        return (integer)$this->calories;
    }

}